<!-- general form elements -->
@extends('master-layout')

@section('heading')
    Our Activities
@endsection

@section('title')
    Current Activities
@endsection


@section('content')


    <div class="row right-align">

        <div class="col-md-4 col-md-offset-8">
            <div class="input-group">
                <input id="search" type="text" class="form-control searchCus" placeholder="Company Name">
                <div class="input-group-btn">
                    <button  type="button" class="btn searchBtn btn-primary btn-flat">Search</button>
                </div><!-- /btn-group -->
            </div>
        </div>

        <div>
            <hr>

        </div>

    </div>




    <div class="row">

        @if(isset($activity))
            @foreach($activity as $a)
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow">
                            <div class="widget-user-image">
                                <img class="img-circle" src="{{URL::asset('images/acti.jpg')}}" alt="User Avatar">
                            </div><!-- /.widget-user-image -->
                            <h3 class="widget-user-username activityID">{{$a['activity_id']}}</h3>

                            <h3 class="widget-user-username cName">{{$a['company_name']}}</h3>
                            <h5 class="widget-user-desc">{{$a['outcome']}}</h5>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="#">Type <span class="pull-right badge bg-blue">{{$a['type']}}</span></a></li>
                                <li><a href="#">Sales Person <span class="pull-right badge bg-aqua">{{$a['sales_p_name']}}</span></a></li>
                                <li><a href="#">Date <span class="pull-right badge bg-green">{{$a['date']}}</span></a></li>
                            </ul>
                            <button class="btn btn-block btn-primary activityEdit">Edit</button>
                            <button class="btn btn-block btn-danger activityDelete">Delete</button>
                        </div>
                    </div><!-- /.widget-user -->
                </div>
                @endforeach
                @endif
                        <!-- Profile Image -->


    </div>
@endsection

@section('script')

    <script type="text/javascript" >

        $(document).ready(function() {


            $('.searchBtn').on('click',function(){

                var customerName = $('.searchCus').val();

                window.location = "http://localhost/CRM/public/activity/view/search?customer="+customerName;
            });

            $('.activityDelete').on('click',function(){

                var activity = $(this).parent().parent().find('.activityID').html();


                window.location = "http://localhost/CRM/public/activity/delete?activity="+activity;



            });

            $('.activityEdit').on('click',function(){

                var activity = $(this).parent().parent().find('.activityID').html();

                window.location = "http://localhost/CRM/public/activity/edit?activity="+activity;


            });



        } );


    </script>


    @endsection

