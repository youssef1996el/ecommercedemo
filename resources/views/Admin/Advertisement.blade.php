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
                        <li class="breadcrumb-item active" aria-current="page">Advetisement</li>
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
                                    <i class="bx bxs-plus-square"></i> New Advetisement
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">

            @foreach ($Advertisement as $item)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/images/' . $item->image) }}" class="card-img-top" alt="...">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{route('store.advertisement')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Advertisement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="mb-3">
                                <div class="imageuploadify well">
                                    <div class="imageuploadify-overlay">
                                        <i class="fa fa-picture-o"></i>
                                    </div>
                                    <div class="imageuploadify-images-list text-center">
                                        <i class="bx bxs-cloud-upload"></i>
                                        <span class="imageuploadify-message">Drag&amp;Drop Your File(s)Here To Upload</span>
                                        <input type="file" name="images[]" id="upload-input" class="btn btn-default" style="background: white; color: rgb(58, 160, 255);" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .imageuploadify {
border: 2px dashed #d2d2d2;
position: relative;
min-height: 250px;
min-width: 250px;
max-width: 1000px;
margin: auto;
display: flex;
padding: 0;
flex-direction: column;
text-align: center;
background-color: #fff;
color: #007bff;
}

.imageuploadify .imageuploadify-images-list i {
display: block;
font-size: 7em;
text-align: center;
margin-top: .5em;
padding-bottom: 12px;
}
.imageuploadify .imageuploadify-images-list button.btn-default {
display: block;
color: #007bff;
border-color: #007bff;
border-radius: 1em;
margin: 25px auto;
width: 100%;
max-width: 500px;
}
</style>
@endsection
