@extends('Admin.dashboard')
@section('dashboardAdmin')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-xl-12">
                                <a href="#" class="btn btn-primary mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="bx bxs-plus-square"></i> New Category
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Display Error Messages -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <table class="table table-striped" id="tableCategory">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <a  class="fa-solid fa-pen-to-square text-success fs-5 mr-3 icon_edit" value={{$item->id}}></a>
                                            <a  class="fa-solid fa-trash text-danger fs-5 mr-3 icon_tash" value={{$item->id}}></a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('StoreCategory')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Add new category" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" name="Edit_Category" id="Edit_Category" placeholder="Edit category" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="buttonEdit">Save</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        $('#tableCategory').DataTable();
        var id = 0;
        $('.icon_edit').on('click',function()
        {
            var category = $(this).closest('tr').find('td').eq(0).text();
            id = $(this).attr('value');

            $('#Edit_Category').val(category);
            $('#ModalEdit').modal('show');
        });

        $('#buttonEdit').on('click',function()
        {
            $.ajax({
                type: "post",
                url: "{{url('EditCategory')}}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Assuming you have a meta tag for CSRF token
                },
                data:
                {
                    category : $('#Edit_Category').val(),
                    id      : id
                },
                dataType: "json",
                success: function (response)
                {
                    if(response.status == 200)
                    {
                        location.reload();
                    }
                }
            });
        });

        $('.icon_tash').on('click', function()
        {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    var categoryId = $(this).attr('value'); // Store the value in a variable
                    $.ajax({
                        type: "post",
                        url: "{{url('trashCategory')}}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Assuming you have a meta tag for CSRF token
                        },
                        data: {
                            id: categoryId, // Use the variable here
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == 200) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success"
                                }).then(() => {
                                    location.reload(); // Reload after success message
                                });
                            }
                        }
                    });
                }
            });

        });
    </script>

</div>
@endsection
