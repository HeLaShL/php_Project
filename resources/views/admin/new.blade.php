	@extends('app')
 

 
@section('content')
<div class="main">
<div class="shop_top">
<div class="container">

    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">New Product</div>
        </div>
        <div class="panel-body" >
        <div class="container">
            <form method="POST" action="{{ url('/admin/product/save')}}" class="form-horizontal" enctype="multipart/form-data" role="form">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="name">Name</label>

                        <div class="col-md-6">
                            <input id="name" name="name" type="text" placeholder="Product name" class="form-control input-md" required="" value="{{ old('name') }}">
 
                        </div>
                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="textarea">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="textarea" name="description" value="{{ old('description') }}"></textarea>
                        </div>
                         @if ($errors->has('Description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Description') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="price">Price</label>
                        <div class="col-md-6">
                            <input id="price" name="price" type="text" placeholder="Product price" class="form-control input-md" value="{{ old('price') }}" required>
 
                        </div>
                         @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                    </div>
                      <div class="form-group{{ $errors->has('categorie_id') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="price">Category</label>
                            <div class="col-md-6">
                            <select id="categorie_id" name="categorie_id" class="form-control">
                             @foreach ($categories as $category)
                            <option value="{{$category->id}} ">{{$category->name}} </option>
                            @endforeach
                            </select><br>
                            </div>
                             @if ($errors->has('categorie_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categorie_id') }}</strong>
                                    </span>
                                @endif
                    </div>
                      <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="genre">Genre</label>
                        <div class="col-md-6">
                            <select id="genre" name="genre" class="form-control" >
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            </select><br>
 
                        </div>
                         @if ($errors->has('genre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif
                    </div>
                     <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="quantity">Quantity</label>
                        <div class="col-md-6">
                            <input id="quantity" name="quantity" type="text" placeholder="Product quantity" class="form-control input-md" value="{{ old('quantity') }}" required>

                          <br>
 
                        </div>
                         @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group{{ $errors->has('imageurl') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="imageurl">Image URL</label>
                        <div class="col-md-6">

                            <input id="imageurl" name="imageurl" type="file"  class="form-control input-md" value="{{ old('imageurl') }}"  accept=".jpeg,.png,.jpg,.gif,.svg">
 
                        </div>
                         @if ($errors->has('imageurl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imageurl') }}</strong>
                                    </span>
                                @endif
                    </div>
                  
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-6">
                            <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>
 
                </fieldset>
 
            </form>
        </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
 