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
                    <h4>Edit Activities</h4>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{URL::route('activityEdit-post')}}">
                    <div class="box-body">
                        @if(isset($activity))

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Activity type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type" {{ $activity['type'] ? 'value="'. $activity['type'].'"' : (Input::old('type')) }} placeholder="EX: email , phone">
                                    @if($errors ->has('type'))

                                        {{ $errors->first('type', '<small class=error>:message</small>') }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Activity Outcome</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="outcome" {{  $activity['outcome'] ? 'value="'.  $activity['outcome'].'"' : (Input::old('outcome')) }} placeholder="Outcome">
                                    @if($errors ->has('outcome'))

                                        {{ $errors->first('outcome', '<small class=error>:message</small>') }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Sales Person Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" {{ $activity['sales_p_name'] ? 'value="'. $activity['sales_p_name'].'"' : (Input::old('name')) }} placeholder="Sales Person">
                                    @if($errors ->has('name'))

                                        {{ $errors->first('name', '<small class=error>:message</small>') }}
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" {{ $activity['date'] ? 'value="'. $activity['date'].'"' : (Input::old('date')) }} placeholder="Sales Person">
                                    @if($errors ->has('date'))

                                        {{ $errors->first('date', '<small class=error>:message</small>') }}
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

            <img src="{{URL::asset('images/activity.png')}}">
        </div>
    </div>

@endsection

@section('script')



@endsection