	@extends('app')
 

 
@section('content')
<br><br>
<div class="container">

    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">New Category</div>
        </div>
        <br><br><br>
        <div class="panel-body" >
            <form method="POST" action="{{ url('/admin/category/save')}}" class="form-horizontal" >
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label" for="name">Name</label>

                        <div class="col-md-4">
                            <input id="name" name="name" type="text" placeholder="Category name" class="form-control input-md" value="{{ old('name') }}" required="">
 
                        </div>
                         @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imageurl') }}</strong>
                                    </span>
                                @endif
                    </div>
                  
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>
 
 
                </fieldset>
 
            </form>
        </div>
        <br><br><br>
    </div>
</div>
    <br><br>
@endsection
 