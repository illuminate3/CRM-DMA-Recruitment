<!-- general form elements -->
@extends('master-layout')

@section('heading')
    Our Customers
@endsection

@section('title')
    Current Customers
@endsection


@section('content')
    <div class="row">

            @if(isset($customer))
                @foreach($customer as $c)
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <h3 class="profile-username text-center">{{$c['c_name']}}</h3>
                            <p class="text-muted text-center">{{$c['c_id']}}</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Address</b> <a class="pull-right">{{$c['c_address']}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Telephone</b> <a class="pull-right">{{$c['c_phone']}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>E-mail</b> <a class="pull-right">{{$c['c_email']}}</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>View Profile</b></a>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
        </div><!-- /.col -->
                    @endforeach
                            @endif
            <!-- Profile Image -->


    </div>
@endsection

