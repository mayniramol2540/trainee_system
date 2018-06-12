@extends('layouts.app')
   <style>
            body{
                background-color: gray;
                background-image: url('bg.jpg');
            }
           .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }
            .links > a {
                color: #000;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-top: 5%;
                margin-bottom: 50px;
                color: black;
            }
            img {
                 width: 200px;
                 height: 200px;
                }
          
   </style>
@section('content')
<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Welcome You...[]</h1>
      <p class="lead text-muted">Time :<br> <?php echo date("d-m-Y H:i:s");?></p>
      <p>
        <a href="#" class="btn btn-primary">Main</a>
        <a href="#" class="btn btn-secondary">action</a>
    </p>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <img data-src="holder.js/100px280?theme=thumb"
                 alt="Thumbnail [100%x280]" style="height: 280px; width: 100%; display: block;"
                  src="{{url('user.png')}}" data-holder-rendered="true">
                <p class="card-text">Profile.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <img data-src="holder.js/100px280?theme=thumb" 
                alt="Thumbnail [100%x280]" style="height: 280px; width: 100%; display: block;" 
                src="{{url('ch.png')}}" data-holder-rendered="true">
                <p class="card-text">Checkin-checkout</p>
            </div>
        </div> 
        <div class="col-lg-4">
            <div class="card">
                <img data-src="holder.js/100px280?theme=thumb" 
                alt="Thumbnail [100%x280]" style="height: 280px; width: 100%; display: block;"
                 src="{{url('todo.png')}}" data-holder-rendered="true">
                <p class="card-text">Task list</p>
            </div>
        </div>
    </div>                  
</div>      
@endsection
