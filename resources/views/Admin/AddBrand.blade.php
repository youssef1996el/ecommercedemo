@extends('Admin.dashboard')
@section('dashboardAdmin')
<link rel="stylesheet" href="{{asset('Dashboard_CSS/css/imageuploadify.min.css')}}">
<script src="{{asset('Dashboard_JS/js/imageuploadify.min.js')}}"></script>
<!--start page wrapper -->
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
                        <li class="breadcrumb-item active" aria-current="page">Add new brand</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Add New brand</h5>
              <hr/>
               <div class="form-body mt-4">
                <div class="row">
                   <div class="col-lg-12">
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
                        <div class="border border-3 p-4 rounded">
                            <form action="{{ url('postbrand') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Brand Title</label>
                                    <input type="text" class="form-control" name="name" id="inputProductTitle" placeholder="Enter brand title">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Brand Images</label>
                                    <input id="image-uploadify" type="file" name="path" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary w-25 mt-3">Save Brand</button>
                                    </div>
                                </div>
                            </form>




                        </div>

                   </div>

               </div><!--end row-->
            </div>
          </div>
      </div>


    </div>
</div>
<!--end page wrapper -->
@endsection
