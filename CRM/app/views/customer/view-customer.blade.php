<!-- general form elements -->
@extends('master-layout')

@section('heading')
    Manage Customers
@endsection

@section('title')
    Current Customers
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

        @if(isset($customers))
            @foreach($customers as $c)
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="{{URL::asset('/images/customer.gif')}}" alt="User profile picture">

                            <h3 class="profile-username text-center company">{{$c['company_name']}}</h3>
                            <p class="text-muted text-center">{{$c['address']}}</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Registration Number</b><a class="pull-right">{{$c['b_reg_number']}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Web Site</b> <a class="pull-right">{{$c['website']}}</a>
                                </li>

                            </ul>

                            <a href="#" class="btn btn-primary btn-block editBtn"><b>Edit</b></a>
                            <a href="#" class="btn btn-primary btn-block deleteBtn"><b>Delete</b></a>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
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

                    window.location = "http://localhost/CRM/public/customer/search?customer="+customerName;
            });

            $('.editBtn').on('click',function(){

                var company = $(this).parent().find('.company').html();

                window.location = "http://localhost/CRM/public/customer/edit?company="+company;


            });

            $('.deleteBtn').on('click',function(){

                var company = $(this).parent().find('.company').html();


                window.location = "http://localhost/CRM/public/customer/delete?company="+company;


            })

        } );



    </script>




    @endsection

