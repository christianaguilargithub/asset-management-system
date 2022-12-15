@extends('products.layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card-container{
    width:80vw;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}
.card{
    width:500px;
    height:300px;
    display:flex;
    flex-direction:row;
}
</style>

<div class="card-container">
    <div class="card">
        <img src="/image/{{ $product->image }}" style="">
        <div>
            <h1>Name</h1>
            <h1>{{ $product->name }}</h1>
            <h1>
                
            </h1>
            <p class="title">{{ $product->detail }}</p>
            <hr>
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection