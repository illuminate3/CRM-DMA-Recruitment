@extends('master-layout')

@section('heading')
   Manage Contacts
@endsection

@section('title')

@endsection


@section('content')

    <div class="row left-align ">
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h4>Add Contact Details</h4>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{URL::route('getAddContactDetails-post')}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Contact Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" {{ (Input::old('name')) ? 'value="'. Input::old('name').'"' : '' }} placeholder="Company Name">
                                @if($errors ->has('name'))

                                    {{ $errors->first('name', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Contact E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" {{ (Input::old('email')) ? 'value="'. Input::old('email').'"' : '' }} placeholder="Company E--mail">
                                @if($errors ->has('email'))

                                    {{ $errors->first('email', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Contact NO.</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" {{ (Input::old('number')) ? 'value="'. Input::old('number').'"' : '' }} placeholder="contact NO:">
                                @if($errors ->has('number'))

                                    {{ $errors->first('number', '<small class=error>:message</small>') }}
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

        <img src="{{URL::asset('images/contact.png')}}">
        </div>
    </div>

@endsection