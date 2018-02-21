@extends('admin.layout')

@section('content')

@include('admin.partials.header-content')

    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-sign-out"></i> Register Page</div>
        
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                    <label for="idimg" class="col-md-4 control-label">Avatar's Profile</label>
                    <div class="col-md-6">

                        <label for="avatar">                                    
                            <img id="idimg" src="images/uploads/avatars/default.png" style="width:120px;height:120px; float:left; margin-bottom:15px; margin-right:25px;" class="img-thumbnail" />                                    
                        </label>
                        <input style="display:none;" id="avatar" type="file" name="avatar" value="">
                        @if ($errors->has('avatar'))
                            <?php $error = $errors->first('avatar'); ?>
                            {{ session()->flash('error', "$error") }}
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                        @if ($errors->has('name'))
                            <?php $error = $errors->first('name'); ?>
                            {{ session()->flash('error', "$error") }}
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <?php $email = $errors->first('email'); ?>
                            {{ session()->flash('error', "$email") }}
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <?php $password = $errors->first('password'); ?>
                            {{ session()->flash('error', "$password") }}
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Register
                        </button>
                        <!-- <small class="pull-right">
                            <a href="{{ url('/') }}" class="btn btn-sm btn-default pull-right">Back</a>
                        </small> -->
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

