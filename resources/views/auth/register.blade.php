@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- gender -->
                        <div class="form-group">
                          <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                {{Form::select('gender', array('male' => 'Male', 'female' => 'Female'),['class'=>'selectpicker dropup'])}}
                            </div>
                          <!-- <select class="selectpicker" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                          </select> -->
                        </div>
                        <!-- birt date -->
                        <div class="form-group" >
                           <label for="birt_date" class="col-md-4 control-label">Birtday Date</label>
                            <div class="col-md-6">
                                {{Form::date('birt_date', \Carbon\Carbon::now(),['class'=>'form-control'])}}
                            </div>
                            
                        </div>
                        <!-- university -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="university" class="col-md-4 control-label">University</label>
                            
                            <div class="col-md-6">
                                {{ Form::input('university', 'university', null,['class'=>'form-control']) }}
                            </div>

                        </div>
                        <!-- major  -->
                        <div class="form-group{{ $errors->has('major') ? ' has-error' : '' }}">
                            <label for="major" class="col-md-4 control-label">Major</label>
                            <div class="col-md-6">{{ Form::input('major', 'major', null, ['class'=>'form-control']) }}</div>
                        </div>
                        <!--  -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

