@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6"><img src="/img/profile-image/{{$blog->image}}"></div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>
                    <div class="panel-body ">
                        <label for="name" class="col-md-2 control-label">Name : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->name == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->name}}</p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <label for="email" class="col-md-2 control-label">Email Address : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->email == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->email}}</p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <label for="id_card" class="col-md-2 control-label">ID Card : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->id_card == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->id_card}}</p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <label for="gender" class="col-md-2 control-label">Gender : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->gender == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->gender}}</p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <label for="birt_date" class="col-md-2 control-label">Birtday Date : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->birt_date == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->birt_date}}</p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <label for="university" class="col-md-2 control-label">University : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->university == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->university}}</p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <label for="faculty" class="col-md-2 control-label">Faculty : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->faculty == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->faculty}}</p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <label for="major" class="col-md-2 control-label">Major : </label>
                        <div class="col-md-6">
                            <?php if (Auth::user()->major == null) { ?>
                                <p>-</p>
                            <?php } else { ?>
                                <p>{{$blog->major}}</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
