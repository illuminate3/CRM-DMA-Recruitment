@extends('master-layout')
@section('heading')
    <h3>CRM Dasboard</h3>
@endsection
@section('content')

            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->

                    @if(isset($customers))
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$customers}}</h3>
                            <p>Total Customers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                        @endif
                </div><!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    @if(isset($contactCount))
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$contactCount}}<sup style="font-size: 20px"></sup></h3>
                            <p>Total Contacts</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                        @endif
                </div><!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    @if(isset($activity))
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$activity}}</h3>
                            <p>Total Activities</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                        @endif
                </div><!-- ./col -->

            </div><!-- /.row -->
            <!-- Main row -->
            <div class="row center">
                <!-- Left col -->
                <section class="col-lg-8 col-md-offset-2 connectedSortable">
                    <div class="box-body">
                        <h3>Latest Customers</h3>
                        <table class="table table-bordered">

                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Company Name</th>
                                <th style="width: 150px">Address</th>
                                <th style="width: 150px">Web</th>

                            </tr>
                            @if(isset($company))
                                @foreach($company as $c)
                                    <tr>

                                        <td class="company">{{$c['c_id']}}</td>
                                        <td>{{$c['company_name']}}</td>
                                        <td>{{$c['address']}}</td>
                                        <td>{{$c['website']}}</td>

                                    </tr>

                                @endforeach
                            @endif

                        </table>


                    </div>
    </section>
    </div>


    @endsection