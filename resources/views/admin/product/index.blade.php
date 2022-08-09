@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1> Product admin </h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">New price</th>
                <th scope="col">Stock</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->new_price}}</td>
                    <td>{{$product->getStatus()}}</td>
                    <td></td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="row">
            <div class="col">{{$products->links('')}}</div>
        </div>
    </div>

@endsection
