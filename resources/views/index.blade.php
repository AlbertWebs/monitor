@extends('master')
@section('content')

<section class="main-container" style="min-height:530px">
    <div class="container">
       <div>
          <div class="row">
             <div class="col-md-2">
             </div>
             <div class="col-md-8">
                <!--Body content-->
                <br />
                <div class="btn-group" data-toggle="buttons-radio">
                   <button class="btn btn-primary btn-lg btn-big btn-custom active" id="freemon" data-toggle="button">Free monitoring</button>
                   <button class="btn btn-primary btn-lg btn-big btn-custom" id="premiummon" data-toggle="button">Premium monitoring</button>
                   <button class="btn btn-primary btn-lg btn-big btn-custom" id="enterprisemon" data-toggle="button">Professional monitoring</button>
                </div>
                <br />
                <div class="well">
                   <div id="freeinfo">
                      <ul>
                         <li>WebsiteMonitoring sends a free alert when your website is down</li>
                      </ul>
                   </div>
                   <div id="premiuminfo">
                      <ul>
                         <li><strong>Get notified fast</strong> - monitors every 5 minuts instead of every 10 minutes</li>
                         <li>5 websites and 1 metric</li>
                         <li>5 minute interval</li><li>All free features</li>
                         <li>Multiple recipients per monitor</li>
                         <li>SSL certificate monitoring</li>
                      </ul>
                   </div>
                   <div id="enterpriseinfo">
                      <ul>
                         <li><strong>Get notified extremely fast</strong> - monitors every 60 seconds</li>
                         <li>10 websites or metrics</li>
                         <li>All premium features</li>
                         <li>100 SMS credits</li>
                         <li>Website Support</li>
                         <li>Domain Reputation Management</li>
                         <li>Free annual SSL Certificate</li>
                      </ul>
                   </div>
                   <br />
                   <form class="form-horizontal" method="post" id="form" autocomplete="off">
                      <input type="hidden" name="action" value="go" />
                      <input type="hidden" name="premium" id="premiumfield" value="0" />
                      <input type="hidden" name="enterprise" id="enterprisefield" value="0" />
                      <input type="hidden" name="timezone" id="timezone" value="" />
                      <div class="form-group">
                         <label class="col-sm-4 control-label" for="url">Website URL:</label>
                         <div class="col-sm-8">
                            <input type="text" name="url" id="url" value="" class="form-control" placeholder="www.example.com or https://example.com" />
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-sm-4 control-label" for="email">Email address for notification:</label>
                         <div class="col-sm-8">
                            <input type="email" autocomplete="off" name="user_id" id="email" value="" class="form-control" placeholder="hello@example.com" />
                         </div>
                      </div>
                      <div class="form-group">
                         <label class="col-sm-4 control-label">Notify me:</label>
                         <div class="col-sm-8">
                            <div class="radio">
                               <label>
                               <input type="radio" name="notifytype" id="notifytype1" onclick="updateTxt();"  checked="checked" value="1" />When the site is offline
                               </label>
                            </div>
                            <div class="radio">
                               <label>
                               <input type="radio" name="notifytype" id="notifytype2" onclick="updateTxt();"  value="2" />When the site does not contain a specific text
                               </label>
                            </div>
                         </div>
                      </div>
                      <div class="form-group" id="requiredtext">
                         <label class="col-sm-4 control-label" for="text">Required text:</label>
                         <div class="col-sm-8">
                            <input type="text" name="text" id="text" value="" class="form-control" />
                         </div>
                      </div>
                    
                      <div class="form-group">
                         <div class="col-sm-offset-4 col-sm-8">
                            <a class="btn btn-primary btn-custom" href="#" id="submitbutton" onclick="document.getElementById('form').submit();">Start monitoring my website</a>
                         </div>
                      </div>
                      <input type="submit" style="display:none;" /> 
                   </form>
                </div>
                <br />
             
             </div>
             <div class="col-md-2"></div>
          </div>
       </div>
       <br />
    </div>
</section>

@endsection