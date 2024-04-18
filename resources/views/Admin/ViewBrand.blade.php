@extends('Admin.dashboard')
@section('dashboardAdmin')
<div class="page-wrapper">
    <div class="page-content">


        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
            @foreach ($brands as $item)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/images/' . $item->patch) }}" class="card-img-top" alt="Brand Image">
                        <div class="card-body">
                            <h6 class="card-title cursor-pointer text-center text-uppercase">{{ $item->name }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>




    </div>
</div>

<div class="overlay toggle-icon"></div>

</div>
@endsection
