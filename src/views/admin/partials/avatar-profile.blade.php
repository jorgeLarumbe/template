@extends('admin.layout')

@section('content')

@include('admin.partials.header-content')

    <div class="panel panel-default">
        <div class="panel-heading">. : : AdminLTE 2.4.3 : : .</div>
        <div class="panel-body">

            <div class="container">
                <div class="row" style="margin-top: 20px;margin-bottom: 10px;">
                    <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                        <img id="idimg" src="images/uploads/avatars/{{ $user->avatar }}" style="width:120px;height:120px; float:left; margin-bottom:15px; margin-right:25px;" class="img-thumbnail">
                        <h3>{{ $user->name }}'s Profile</h3>
                        <form enctype="multipart/form-data" action="avatar-profile" method="POST">
                            {{ csrf_field() }}
                            <label for="">Update Profile Image</label><br>
                            <label for="avatar" class="btn btn-sm btn-default" style="margin-bottom:5px;">Select Avatar</label>
                            <input style="display:none;" id="avatar" type="file" name="avatar" value="">
                            <input type="submit" class="btn btn-sm btn-success" style="margin-bottom:5px;">
                        </form>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

@endsection

