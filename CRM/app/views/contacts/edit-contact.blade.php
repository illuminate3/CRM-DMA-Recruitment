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
                    <h4>Edit Customers</h4>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{URL::route('contactEdit-post')}}">
                    <div class="box-body">
                        @if(isset($contact))

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Contact Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" {{ $contact['contact_name'] ? 'value="'. $contact['contact_name'].'"' : (Input::old('name')) }} placeholder="Company Name">
                                    @if($errors ->has('name'))

                                        {{ $errors->first('name', '<small class=error>:message</small>') }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Contact E-mail</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" {{ $contact['email'] ? 'value="'. $contact['email'].'"' : (Input::old('email')) }} placeholder="Company Address">
                                    @if($errors ->has('email'))

                                        {{ $errors->first('email', '<small class=error>:message</small>') }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Contact NO.</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="number" {{ $contact['contact_number'] ? 'value="'. $contact['contact_number'].'"' : (Input::old('number')) }} placeholder="Business Registration Number">
                                    @if($errors ->has('number'))

                                        {{ $errors->first('number', '<small class=error>:message</small>') }}
                                    @endif
                                </div>
                            </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">

                        <button type="submit" class="btn btn-info pull-right">Update</button>
                    </div><!-- /.box-footer -->
                </form>

                @endif
            </div><!-- /.box -->
        </div>

        <div class="col-md-4">

            <img src="{{URL::asset('images/customer.png')}}">
        </div>
    </div>

@endsection

@section('script')



@endsection