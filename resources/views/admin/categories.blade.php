@extends('app')
 

 
@section('content')
 <br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('/admin/category/newCategory') }}"><button class="btn btn-success">New Category</button></a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" border="1">
                    <thead>
                    <td>Name</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td><a href='/admin/category/destroy/{{$category->id}}'><button class="btn btn-danger">Del</button></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <br><br><br><br><br><br>
@endsection
 