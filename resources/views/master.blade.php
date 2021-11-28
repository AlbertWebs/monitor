<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Website Monitoring - free quality website monitoring</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
      <meta property="og:image" content="" />


      <script>
         function updateTxt() {
         	if (document.getElementById('notifytype2').checked) {
         		document.getElementById('requiredtext').style.display = 'block';
         	}
         	else {
         		document.getElementById('requiredtext').style.display = 'none';
         	}
         }
         function pageLoad() {
         	updateTxt();	document.getElementById('url').focus();}
      </script>


      @include('favicon')

      <link href="{{asset('theme/includes/css/style.css')}}" rel="stylesheet" media="screen">
    
     
 
      <script>
         function updateSmspanel() {
         	if (document.getElementById('smsalert').checked) {
         		document.getElementById('smsalertpanel').style.display = 'block';
         	}
         	else {
         		document.getElementById('smsalertpanel').style.display = 'none';
         	}
         }
      </script>
      <style>
        .zocial {
            width: 100%;
        }
        </style>

   </head>
   <body onload="pageLoad();">
      <div class="header-container">
         <header class="header fixed clearfix">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 ">
                     <div class="header-left clearfix">
                        <div id="logo" class="logo">
                           <a href="{{url('/')}}"><img id="logo_img" src="{{asset('theme/images/logo2.svg')}}" alt="Website Monitoring"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="header-right clearfix">
                        <div class="main-navigation  animated with-dropdown-buttons">
                           <nav class="navbar navbar-default">
                              <div class="container-fluid">
                                 <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                 </div>
                                 <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav ">
                                       <li class="active"><a href="{{url('/')}}">Web monitoring</a></li>
                                       {{-- <li><a href="metrics.html">Metrics</a></li>
                                       <li><a href="ssl-certificate-monitoring.html">SSL certificate monitoring</a></li> --}}
                                       <li><a href="{{url('/')}}/login">My monitors</a></li>
                                    </ul>
                                    <!-- header buttons -->
                                    <div class="header-dropdown-buttons">
                                    </div>
                                    <!-- header buttons end-->
                                 </div>
                              </div>
                           </nav>
                           <!-- navbar end -->
                        </div>
                        <!-- main-navigation end -->
                     </div>
                     <!-- header-right end -->
                  </div>
               </div>
            </div>
         </header>
         <!-- header end -->
      </div>
     
      @yield('content')
    
     @include('footer')

      <script src="{{asset('theme/ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
      <script src="{{asset('theme/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script>
         $("a[data-toggle=popover]")
             .popover({
         		container: 'body'
         	});
      </script>
      <script src="includes/js/jstz.min.js"></script>
      <script>
         $("#premiuminfo").hide();
         $("#enterpriseinfo").hide();
         $("#discountcodepanel").hide();
         
         $("#freemon").click(function() {
         $(this).addClass('active');
         $('#premiummon').removeClass('active');
         $('#enterprisemon').removeClass('active');
         
         $("#freeinfo").show();
         $("#premiuminfo").hide();
         $("#enterpriseinfo").hide();
         
         $("#pricePremium").hide();
         $("#priceEnterprise").hide();
         
         $("#premiumfield").val(0);
         $("#enterprisefield").val(0);
         $("#discountcodepanel").hide();
         });
         
         $("#premiummon").click(function() {
         $('#freemon').removeClass('active');
         $(this).addClass('active');
         $('#enterprisemon').removeClass('active');
         
         $("#freeinfo").hide();
         $("#premiuminfo").show();
         $("#enterpriseinfo").hide();
         
         $("#pricePremium").show();
         $("#priceEnterprise").hide();
         
         $("#premiumfield").val(1);
         $("#enterprisefield").val(0);
         $("#discountcodepanel").show();
         });
         
         $("#enterprisemon").click(function() {
           $('#freemon').removeClass('active');
           $('#premiummon').removeClass('active');
           $(this).addClass('active');
         
           $("#freeinfo").hide();
           $("#premiuminfo").hide();
           $("#enterpriseinfo").show();
         
           $("#pricePremium").hide();
           $("#priceEnterprise").show();
         
           $("#premiumfield").val(0);
           $("#enterprisefield").val(1);
           $("#discountcodepanel").show();
         });
         
         $(function() {
           $("form input").keypress(function (e) {
               if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
                   $('#submitbutton').click();
                   return false;
               } else {
                   return true;
               }
           });
         });

         
         
         var timezone = jstz.determine();
         if ($("#timezone").val()=='') $("#timezone").val(timezone.name());
         updateSmspanel();
      </script>
      <script>$('#email').focus();</script>
      <link rel="stylesheet" type="text/css" href="{{asset('theme/includes/zocial/css/zocial.min.css')}}" />
   </body>
</html>