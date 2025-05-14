@extends('layouts.main')
@section('content')
@include('categories.list')
<section class="my-5">
    <div class="container">
        <h2 class="mb-3"> </h2>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 my-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h6 class="card-title text-center">{{ $product->name }}</h6>
                        <h5 class="card-title text-center">$ {{ $product->price }}</h5>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection