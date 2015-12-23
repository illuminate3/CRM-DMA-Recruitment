@extends('master-layout')

@section('heading')
    Manage Contacts
@endsection

@section('title')

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

    <div class="row center">
        <div class="col-md-9 col-md-offset-1">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Current Customers</h3>
                </div><!-- /.box-header -->


                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px">Company Name</th>
                            <th style="width: 180px">E-mail</th>
                            <th style="width: 100px">Contact</th>
                            <th style="width: 80px"></th>
                            <th style="width: 80px"></th>
                        </tr>
                        @if(isset($contacts))
                            @foreach($contacts as $c)
                                <tr>
                                    <td>{{$c->Customer->company_name}}</td>
                                    <td class="email">{{$c['email']}}</td>
                                    <td>{{$c['contact_number']}}</td>
                                    <td><button class="btn btn-block btn-primary contactEdit">Edit</button></td>
                                    <td><button class="btn btn-block btn-danger contactDelete">Delete</button></td>


                                </tr>

                            @endforeach
                        @endif

                    </table>
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div><!-- /.box -->
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript" >

        $(document).ready(function() {


            $('.searchBtn').on('click',function(){

                var customerName = $('.searchCus').val();

                window.location = "http://localhost/CRM/public/contact/search/view?customer="+customerName;
            });

            $('.contactDelete').on('click',function(){

                var email = $(this).parent().parent().find('.email').html();


                window.location = "http://localhost/CRM/public/contact/delete?email="+email;



            });

            $('.contactEdit').on('click',function(){

                var email = $(this).parent().parent().find('.email').html();

                window.location = "http://localhost/CRM/public/contact/edit?email="+email;


            });



        } );


    </script>
@endsection