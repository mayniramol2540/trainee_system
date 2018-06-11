@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <h1>regis ---success</h1></div>
                <div class="panel-body"><strong>USER--Photo</strong></div>
            	<div class="panel-body">
                	<div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <div class="form-control">{{ Auth::user()->name }}</div>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <div class="form-control">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                	</div>
         		</div>
        	</div>
    	</div>
	</div>
</div>
@endsection
