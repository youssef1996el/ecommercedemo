<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Product;
use App\Models\ImageProduct;
use App\Models\Advertisement;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Order;
use DB;
class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        return view('Admin.index')->with('users', $users);
    }

    public function brands()
    {
        $brands = Brands::all();
        return view('Admin.ViewBrand')->with('brands', $brands);
    }
    public function Add_brands()
    {
        return view('Admin.AddBrand');
    }

    public function StoreBrand(Request $request)
    {
        try
        {

            $request->validate([
                'name' => 'required',
                'path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            ]);

            if ($request->hasFile('path')) {
                // Store the image in the public/images folder
                $imagePath = $request->file('path')->store('images', 'public');

                // Get the file name
                $fileName = basename($imagePath);

                // Create a new Brand instance
                $brand = new Brands();
                $brand->name = $request->input('name');
                $brand->patch = $fileName;
                $brand->iduser = 1;
                $brand->save();
            }

            return redirect()->back()->with('success', 'Brand saved successfully.');
        }
        catch (Throwable $th) {
            return redirect()->back()->with('error', 'An error occurred while saving the brand.');
        }
    }



    public function Category()
    {
        $Category = Category::all();
        return view('Admin.Category')->with('category', $Category);
    }

    public function StoreCategory(Request $request)
    {
        try
        {
            $Category = Category::create([
                'name'   => $request->category_name,
                'iduser' => 1,
            ]);
            return redirect()->back()->with('success', 'Category saved successfully.');
        }
        catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An error occurred while saving the brand.');
        }
    }

    public function EditCategory(Request $request)
    {
        try
        {
            $Category = Category::where('id', $request->id)->update([
                'name'   => $request->category
            ]);
            return response()->json([
                'status'   => 200,
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function trashCategory(Request $request)
    {
        try
        {
            $Category = Category::where('id',$request->id)->delete();
            return response()->json([
                'status'   => 200,
            ]);

        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function Products()
    {
        $Category   = Category::all();
        $Brand      = Brands::all();
        $product    = DB::select("select p.id, name, description, price, quantity, image from products p,imagesproduct i where
                                    p.id = i.idproduct group by i.idproduct");
        return view('Admin.Products')
        ->with('Category', $Category)
        ->with('product', $product)
        ->with('Brand', $Brand);
    }

    public function StoreProduct(Request $request)
    {

         try {
            $Product = Product::create([
                'name'                  => $request->name_product,
                'description'           => $request->description,
                'price'                 => $request->price,
                'quantity'              => $request->Quantity,
                'idbrand'               => $request->Brand,
                'iduser'                => 1,
                'idcaategory'           => $request->Category,
            ]);

            if($Product) {
                if ($request->hasFile('images')) {
                    // If multiple images are uploaded
                    if(is_array($request->file('images'))) {
                        foreach ($request->file('images') as $image) {
                            // Store image in storage
                            $imagePath = $image->store('images', 'public');

                            // Get the file name
                            $fileName = basename($imagePath);

                            // Create ImageProduct entry
                            ImageProduct::create([
                                'idproduct' => $Product->id,
                                'image' => $fileName
                            ]);
                        }
                    } else { // If only one image is uploaded
                        // Store image in storage
                        $imagePath = $request->file('images')->store('images', 'public');

                        // Get the file name
                        $fileName = basename($imagePath);

                        // Create ImageProduct entry
                        ImageProduct::create([
                            'idproduct' => $Product->id,
                            'image' => $fileName
                        ]);
                    }
                }
            }
            return redirect()->back()->with('success', 'Product saved successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function Advertisement()
    {
        $Advertisement = Advertisement::all();
        return view('Admin.Advertisement')
        ->with('Advertisement', $Advertisement);
    }

    public function StoreAdvertisement(Request $request)
    {
        if ($request->hasFile('images'))
        {

            if(is_array($request->file('images')))
            {
                foreach ($request->file('images') as $image) {
                    // Store image in storage
                    $imagePath = $image->store('images', 'public');

                    // Get the file name
                    $fileName = basename($imagePath);

                    // Create ImageProduct entry
                    Advertisement::create([
                        'image' => $fileName,
                        'iduser' => 1,
                    ]);
                }
            } else { // If only one image is uploaded
                // Store image in storage
                $imagePath = $request->file('images')->store('images', 'public');

                // Get the file name
                $fileName = basename($imagePath);

                // Create ImageProduct entry
                Advertisement::create([
                    'image' => $fileName,
                    'iduser' => 1,
                ]);
            }
            return redirect()->back()->with('success', 'Advertisement saved successfully.');
        }

    }

    public function welcome()
    {
        $Advertisement = Advertisement::all();
        $Category      = Category::all();
        $brand         = Brands::all();
        // product new
        $productNew    = DB::table('products')
                        ->join('categorys','categorys.id','products.idcaategory')
                        ->join('brands','brands.id','products.idbrand')
                        ->join('imagesproduct','imagesproduct.idproduct','products.id')
                        ->select('products.id','products.name','products.price','imagesproduct.image',DB::raw('brands.name as brand'),
                                DB::raw('categorys.name as category'))->groupBy('imagesproduct.image')->latest('products.created_at')->take(6)->get();

        $productTrading = DB::table('products')
                        ->join('categorys', 'categorys.id', '=', 'products.idcaategory')
                        ->join('brands', 'brands.id', '=', 'products.idbrand')
                        ->join('imagesproduct', 'imagesproduct.idproduct', '=', 'products.id')
                        ->select(
                            'products.id',
                            'products.name',
                            'products.price',
                            'imagesproduct.image',
                            DB::raw('brands.name as brand'),
                            DB::raw('categorys.name as category')
                        )
                        ->groupBy('imagesproduct.image')
                        ->orderBy('products.created_at') // Order by created_at column in ascending order
                        ->take(6)
                        ->get();

        $productBest = DB::table('products')
                    ->join('categorys', 'categorys.id', '=', 'products.idcaategory')
                    ->join('brands', 'brands.id', '=', 'products.idbrand')
                    ->join('imagesproduct', 'imagesproduct.idproduct', '=', 'products.id')
                    ->select(
                        'products.id',
                        'products.name',
                        'products.price',
                        'imagesproduct.image',
                        DB::raw('brands.name as brand'),
                        DB::raw('categorys.name as category')
                    )->whereIn('products.id',[5,9,1,3,2,8]) ->groupBy('imagesproduct.image')  ->get();

        $ProductAvailable_Offer =DB::table('products')
        ->join('categorys', 'categorys.id', '=', 'products.idcaategory')
        ->join('brands', 'brands.id', '=', 'products.idbrand')
        ->join('imagesproduct', 'imagesproduct.idproduct', '=', 'products.id')
        ->select(
            'products.id',
            'products.name',
            'products.price',
            'imagesproduct.image',
            DB::raw('brands.name as brand'),
            DB::raw('categorys.name as category')
        )->whereIn('products.id',[1,4,6,7,10,11]) ->groupBy('imagesproduct.image')  ->get();

        return view('welcome')
        ->with('Advertisement',$Advertisement)
        ->with('brand',$brand)
        ->with('productNew',$productNew)
        ->with('productTrading',$productTrading)
        ->with('productBest',$productBest)
        ->with('ProductAvailable_Offer',$ProductAvailable_Offer)
        ->with('Category',$Category);
    }

    public function ProductByCategory($id)
    {
        $Products = DB::select("select i.image,p.id,c.name as category,b.name as brand,p.price,p.name  from products p ,categorys c, brands b ,imagesproduct i
        where p.idbrand = b.id and p.idcaategory = c.id and p.id = i.idproduct and c.id = ? group by i.image",[$id]);
        $nameCategory = Category::where('id',$id)->select('name')->get();

        return view('ViewByCategory')
        ->with('Products',$Products)
        ->with('nameCategory',$nameCategory[0]->name);
    }

    public function DetailProduct($id)
    {
        $product = DB::table('products')
        ->join('categorys', 'categorys.id', '=', 'products.idcaategory')
        ->join('brands', 'brands.id', '=', 'products.idbrand')
        ->join('imagesproduct', 'imagesproduct.idproduct', '=', 'products.id')
        ->select(
            'products.id',
            'products.name',
            'products.price',
            'imagesproduct.image',
            DB::raw('brands.name as brand'),
            DB::raw('categorys.name as category')
        )->where('products.id',$id) ->groupBy('imagesproduct.image')  ->get();

        $detailProduct = Product::where('id',$id)->get();

        $category      = DB::table('products')->join('categorys', 'products.idcaategory','categorys.id')
        ->select('categorys.name')
        ->where('products.id',$id)
        ->get();

        $Brand      = DB::table('products')->join('brands', 'products.idbrand','brands.id')
        ->select('brands.name')
        ->where('products.id',$id)
        ->get();

        return view('DetailProduct')
        ->with('detailProduct',$detailProduct)
        ->with('category',$category)
        ->with('Brand',$Brand)
        ->with('idproduct',$id)
        ->with('products',$product);
    }


    public function AddCarte(Request $request)
    {

        try
        {
            $Cart = Cart::create([
                'idproduct' => $request->idproduct,
                'quantity' => $request->quantity,
            ]);
            $Cart = DB::select('select p.name,i.image,c.idproduct,p.price,c.quantity,p.price * sum(c.quantity) as total,(select sum(quantity) from carts) as quantity from carts c,products p,imagesproduct i where c.idproduct = p.id and p.id=i.idproduct group by i.idproduct');
            $total = DB::select("select sum(c.quantity) * p.price as total from carts c ,products p where p.id =c.idproduct ");
            $countCarte = DB::select("select count(*) as c from carts");
            return response()->json([
                'status'   => 200,
                'data'     => $Cart,
                'total' =>$total,
                'countCarte' =>$countCarte,
            ]);
        }
        catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getCart()
    {
        $Cart = DB::select('select p.name,i.image,c.idproduct,p.price,c.quantity,p.price * sum(c.quantity) as total,(select sum(quantity) from carts) as quantity from carts c,products p,imagesproduct i where c.idproduct = p.id and p.id=i.idproduct group by i.idproduct');
        $total = DB::select("select sum(c.quantity) * p.price as total from carts c ,products p where p.id =c.idproduct ");
        $countCarte = DB::select("select count(*) as c from carts");
        return response()->json([
            'status'   => 200,
            'data'     => $Cart,
            'total' =>$total,
            'countCarte' =>$countCarte,
        ]);
    }

    public function deleteCart(Request $request)
    {
        try {
            $carte = DB::select("delete from carts where idproduct  = ?",[$request->id]);
            return response()->json([
                'status'   => 200,
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function getFavorite()
    {
        $Favorite = DB::select("select count(*) as c from favorites");
        return response()->json([
            'status'   => 200,
            'count'   => $Favorite[0]->c,
        ]);
    }

    public function storeFavortie(Request $request)
    {
        $Favorite = Favorite::create([
            'idproduct' => $request->idproduct,
            'iduser'    => 1,
        ]);

        return response()->json([
            'status'   => 200,

        ]);
    }

    public function Favorite()
    {
        $favortie = DB::select("select p.id,p.name,i.image,p.price from products p,favorites f, imagesproduct i
         where p.id =i.idproduct and p.id =f.idproduct group by f.idproduct");

        return view('Favoirte')
        ->with("favortie",$favortie);
    }

    public function removeFavorite(Request $request)
    {
        $Favorite = Favorite::where('idproduct',$request->id)->delete();
        return response()->json([
            'status'   => 200,

        ]);
    }

    public function checkout(Request $request)
    {

        $checkCarteContentProductSelected = DB::select('select count(*) as c from carts where idproduct =?',[$request->productSelected]);
        if($checkCarteContentProductSelected[0]->c ==0)
        {
            $Cart = Cart::create([
                'idproduct' => $request->productSelected,
                'quantity' => $request->quantity,
            ]);
            $dataCheckout = DB::select("select p.id,p.name,c.quantity , c.quantity * p.price as total , p.price  from carts c ,products p where c.idproduct = p.id");
            return view('checkout')->with('data',$dataCheckout);
        }
        else
        {
            $updateProduct = DB::select("update carts set quantity = quantity + ? where idproduct = ?",[$request->quantity,$request->productSelected]);
            $dataCheckout = DB::select("select p.id,p.name,c.quantity , c.quantity * p.price as total , p.price  from carts c ,products p where c.idproduct = p.id");

            return view('checkout')->with('data',$dataCheckout);
        }

    }

    public function Payement(Request $request)
    {
        try
        {
            $Data = DB::select("select p.id,p.price, from products p, carts c where p.id = c.idproduct");

            foreach($Data as $item)
            {
                Order::create([
                     'idproduct'   => $item->id,
                      'price'   => $item->price,
                      'status'   => 'pending',
                      'iduser'   => 1,

                ]);
            }
            return redirect('/');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}
