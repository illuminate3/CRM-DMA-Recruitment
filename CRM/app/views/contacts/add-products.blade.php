@extends('master-layout')

@section('heading')
    New Products
@endsection

@section('title')
    Add Products
@endsection


@section('content')

<div class="row center">
    <div class="col-md-10 col-md-offset-1">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3>Add Product</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{URL::route('add-products-post')}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Category ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id" {{ (Input::old('id')) ? 'value="'. Input::old('id').'"' : '' }} placeholder="ID">
                            @if($errors ->has('id'))

                                {{ $errors->first('id', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" {{ (Input::old('name')) ? 'value="'. Input::old('name').'"' : '' }} placeholder="Category Name">
                            @if($errors ->has('name'))

                                {{ $errors->first('name', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Fuel Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fuel" {{ (Input::old('fuel')) ? 'value="'. Input::old('fuel').'"' : '' }} placeholder="Fuel type, Ex: petrol">
                            @if($errors ->has('fuel'))

                                {{ $errors->first('fuel', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Cubic Capacity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cube" {{ (Input::old('cube')) ? 'value="'. Input::old('cube').'"' : '' }} placeholder="cube, Ex: 4000CC">
                            @if($errors ->has('cube'))

                                {{ $errors->first('cube', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Cylinders</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cylinder" {{ (Input::old('cylinder')) ? 'value="'. Input::old('cylinder').'"' : '' }} placeholder="no of cylinders">
                            @if($errors ->has('cylinder'))

                                {{ $errors->first('cylinder', '<small class=error>:message</small>') }}
                            @endif
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right">Add</button>
                </div><!-- /.box-footer -->
            </form>
        </div><!-- /.box -->
    </div>

</div>

@endsection