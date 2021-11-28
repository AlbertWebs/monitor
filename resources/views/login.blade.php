@extends('master')
@section('content')

<section class="main-container" style="min-height:530px">
    <div class="container">
       <div>
          <div class="row">
          </div>
          <div class="col-md-12">
             <!--Body content-->
             <div class="well" style="max-width: 360px; margin: auto;margin-top: 20px;">
                <h2 style="margin-top:0px;">Please sign in...</h2>
                <form class="form" method="get" id="form" action="{{url('/')}}">
                   <div class="form-group">
                      Please enter your email address to login or register.
                   </div>
                   <div class="form-group">
                      <label class="control-label" for="email">Email address:</label>
                      <input type="text" name="email" id="email" value="" class="form-control" placeholder="" />
                   </div>
                   <div class="form-group">
                    <label class="control-label" for="email">Password:</label>
                    <input type="password" name="password" id="email" value="" class="form-control" placeholder="" />
                 </div>
                   <div class="form-group">
                      <a class="btn btn-primary btn-custom" href="#" id="submitbutton" onclick="document.getElementById('form').submit();" style="width: 100%;">Continue</a>
                   </div>
                   <div class="form-group">
                      Or sign in with:
                   </div>
                   <div class="form-group">
                      <div class="row">
                         <div class="col-md-6">
                            <a href="#" class="zocial facebook">Facebook</a>
                         </div>
                         <div class="col-md-6">
                            <a href="#" class="zocial googleplus">Google</a>
                         </div>
                      </div>
                   </div>
                   
                </form>
             </div>
          </div>
       </div>
    </div>
    <br />
    </div>
 </section>

@endsection