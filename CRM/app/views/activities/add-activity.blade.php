@extends('master-layout')

@section('heading')
    Manage Activities
@endsection

@section('title')

@endsection


@section('content')

    <div class="row left-align ">
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h4>Add Activity Details</h4>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{URL::route('activityAdd-post')}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Activity Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" {{ (Input::old('type')) ? 'value="'. Input::old('type').'"' : '' }} placeholder="ex: email , phone">
                                @if($errors ->has('type'))

                                    {{ $errors->first('type', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Activity Outcome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="outcome" {{ (Input::old('outcome')) ? 'value="'. Input::old('outcome').'"' : '' }} placeholder="outcome">
                                @if($errors ->has('outcome'))

                                    {{ $errors->first('outcome', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Sales Person Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" {{ (Input::old('name')) ? 'value="'. Input::old('name').'"' : '' }} placeholder="Person Name">
                                @if($errors ->has('name'))

                                    {{ $errors->first('name', '<small class=error>:message</small>') }}
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date" {{ (Input::old('date')) ? 'value="'. Input::old('date').'"' : '' }} placeholder="yy/mm/dd">
                                @if($errors ->has('date'))

                                    {{ $errors->first('date', '<small class=error>:message</small>') }}
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

            <img src="{{URL::asset('images/activity.png')}}">
        </div>
    </div>

@endsection

@section('script')

@endsection