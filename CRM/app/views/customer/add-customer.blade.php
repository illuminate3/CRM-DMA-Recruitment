@extends('master-layout')

@section('heading')
   Manage Customers
@endsection

@section('title')

@endsection


@section('content')

    <div class="row left-align ">
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h4>Add Customers</h4>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{URL::route('customer-add-post')}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Company Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" {{ (Input::old('name')) ? 'value="'. Input::old('name').'"' : '' }} placeholder="Company Name">
                                @if($errors ->has('name'))

                                    {{ $errors->first('name', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" {{ (Input::old('address')) ? 'value="'. Input::old('address').'"' : '' }} placeholder="Company Address">
                                @if($errors ->has('address'))

                                    {{ $errors->first('address', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Registration Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" {{ (Input::old('number')) ? 'value="'. Input::old('number').'"' : '' }} placeholder="Business Registration Number">
                                @if($errors ->has('number'))

                                    {{ $errors->first('number', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Web Site</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="web" {{ (Input::old('web')) ? 'value="'. Input::old('web').'"' : '' }} placeholder="Web - Ex: www.google.com">
                                @if($errors ->has('web'))

                                    {{ $errors->first('web', '<small class=error>:message</small>') }}
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

        <div class="col-md-4">

        <img src="{{URL::asset('images/customer.png')}}">
        </div>
    </div>

@endsection