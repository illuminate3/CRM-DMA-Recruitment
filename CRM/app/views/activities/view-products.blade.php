<!-- general form elements -->
@extends('master-layout')

@section('heading')
    Our Products
@endsection

@section('title')
    Current Products
@endsection


@section('content')
    <div class="row">

        @if(isset($product))
            @foreach($product as $p)
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <h3 class="profile-username text-center">{{$p['name']}}</h3>
                            <p class="text-muted text-center">{{$p['id']}}</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Fuel Type</b> <a class="pull-right">{{$p['fuel_type']}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Cubic Capacity</b> <a class="pull-right">{{$p['cubic_capacity']}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Cylinders</b> <a class="pull-right">{{$p['cylinders']}}</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Details</b></a>
                            <a href="#" class="btn btn-primary btn-block"><b>Order</b></a>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
                @endforeach
                @endif
                        <!-- Profile Image -->


    </div>
@endsection

