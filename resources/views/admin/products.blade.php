@extends('app')
 

 
@section('content')
 <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('/admin/product/new') }}"><button class="btn btn-success">New Product</button></a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" border="1">
                    <thead>
                    <td>Name</td>
                    <td>description</td>
                    <td>Image</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Genre</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td><a href="/images/{{$product->imageurl}}"><img src="/images/{{$product->imageurl}}" width="100" height="100" border="0"  /></a></td>
                            <td>{{$product->price}} DT</td>
                            <td>{{$product->quantity}} </td>
                            <td>{{$product->genre}} </td>


                            <td><a href='/admin/product/destroy/{{$product->id}}'><button class="btn btn-danger">Del</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <br><br><br><br><br><br>
@endsection
 