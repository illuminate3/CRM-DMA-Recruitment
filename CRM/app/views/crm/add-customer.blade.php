@extends('master-layout')

@section('heading')
    New Customer
@endsection

@section('title')
    Add Customers
@endsection


@section('content')

    <div class="row center">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3>Add Customer</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{URL::route('add-customer-post')}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Customer Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" {{ (Input::old('name')) ? 'value="'. Input::old('name').'"' : '' }} placeholder="ID">
                                @if($errors ->has('name'))

                                    {{ $errors->first('name', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Customer Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" {{ (Input::old('address')) ? 'value="'. Input::old('address').'"' : '' }} placeholder="Category Name">
                                @if($errors ->has('address'))

                                    {{ $errors->first('address', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Telephone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" {{ (Input::old('phone')) ? 'value="'. Input::old('phone').'"' : '' }} placeholder="cube, Ex: 4000CC">
                                @if($errors ->has('phone'))

                                    {{ $errors->first('phone', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mail" {{ (Input::old('mail')) ? 'value="'. Input::old('mail').'"' : '' }} placeholder="no of cylinders">
                                @if($errors ->has('mail'))

                                    {{ $errors->first('mail', '<small class=error>:message</small>') }}
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