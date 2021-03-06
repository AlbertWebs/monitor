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

   </head>
   <body onload="pageLoad();">
      <div class="header-container">
         <header class="header fixed clearfix">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 ">
                     <div class="header-left clearfix">
                        <div id="logo" class="logo">
                           <a href="index.html"><img id="logo_img" src="images/logo2.svg" alt="Website Monitoring"></a>
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
                                       <li class="active"><a href="index.html">Web monitoring</a></li>
                                       <li><a href="metrics.html">Metrics</a></li>
                                       <li><a href="ssl-certificate-monitoring.html">SSL certificate monitoring</a></li>
                                       <li><a href="list/index.html">My monitors</a></li>
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
      <section class="main-container">
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
                              <li><strong>Get notified fast</strong> - monitors every minute instead of every 10 minutes</li>
                              <li>Alerts for your colleagues - multiple recipients per monitor</li>
                              <li>SSL certificate monitoring</li>
                              <li>Extended reports available</li>
                              <li>Unlimited history</li>
                              <li>Only $14.95 / year for 10 websites</li>
                           </ul>
                        </div>
                        <div id="enterpriseinfo">
                           <ul>
                              <li><strong>Get notified extremely fast</strong> - monitors every 20 seconds</li>
                              <li>WhatsApp notifications</li>
                              <li>500 yearly WhatsApp/SMS credits included</li>
                              <li>7 days full monitoring logs</li>
                              <li>All premium features</li>
                              <li>Only $99 / year for 25 websites</li>
                           </ul>
                        </div>
                        <br />
                        <form class="form-horizontal" method="post" id="form">
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
                                 <input type="text" name="email" id="email" value="" class="form-control" />
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
                              <label for="smsalert" class="col-sm-offset-4 col-sm-8"><input type="checkbox" name="smsalert" id="smsalert" onclick="updateSmspanel();"  value="1" /> &nbsp;Enable SMS alerts</label>
                           </div>
                           <div class="form-group" id="smsalertpanel">
                              <label class="col-sm-4 control-label">Mobile phone number:</label>
                              <div class="col-sm-8">
                                 <div class="col-md-2" style="padding-left:0;padding-right:0;">
                                    <select name="smsnumber_prefix" class="form-control" onchange="document.getElementById('phone_prefix').innerHTML = this.value;">
                                       <option value="">&nbsp;</option>
                                       <option value="93">Afghanistan</option>
                                       <option value="355">Albania</option>
                                       <option value="213">Algeria</option>
                                       <option value="1684">American Samoa</option>
                                       <option value="376">Andorra</option>
                                       <option value="244">Angola</option>
                                       <option value="1264">Anguilla</option>
                                       <option value="672">Antarctica</option>
                                       <option value="1268">Antigua and Barbuda</option>
                                       <option value="54">Argentina</option>
                                       <option value="374">Armenia</option>
                                       <option value="297">Aruba</option>
                                       <option value="61">Australia</option>
                                       <option value="43">Austria</option>
                                       <option value="994">Azerbaijan</option>
                                       <option value="1242">Bahamas</option>
                                       <option value="973">Bahrain</option>
                                       <option value="880">Bangladesh</option>
                                       <option value="1246">Barbados</option>
                                       <option value="375">Belarus</option>
                                       <option value="32">Belgium</option>
                                       <option value="501">Belize</option>
                                       <option value="229">Benin</option>
                                       <option value="1441">Bermuda</option>
                                       <option value="975">Bhutan</option>
                                       <option value="591">Bolivia</option>
                                       <option value="387">Bosnia and Herzegovina</option>
                                       <option value="267">Botswana</option>
                                       <option value="55">Brazil</option>
                                       <option value="1284">British Virgin Islands</option>
                                       <option value="673">Brunei</option>
                                       <option value="359">Bulgaria</option>
                                       <option value="226">Burkina Faso</option>
                                       <option value="95">Burma (Myanmar)</option>
                                       <option value="257">Burundi</option>
                                       <option value="855">Cambodia</option>
                                       <option value="237">Cameroon</option>
                                       <option value="1">Canada</option>
                                       <option value="238">Cape Verde</option>
                                       <option value="1345">Cayman Islands</option>
                                       <option value="236">Central African Republic</option>
                                       <option value="235">Chad</option>
                                       <option value="56">Chile</option>
                                       <option value="86">China</option>
                                       <option value="61">Christmas Island</option>
                                       <option value="61">Cocos (Keeling) Islands</option>
                                       <option value="57">Colombia</option>
                                       <option value="269">Comoros</option>
                                       <option value="682">Cook Islands</option>
                                       <option value="506">Costa Rica</option>
                                       <option value="385">Croatia</option>
                                       <option value="53">Cuba</option>
                                       <option value="357">Cyprus</option>
                                       <option value="420">Czech Republic</option>
                                       <option value="243">Democratic rep. Congo</option>
                                       <option value="45">Denmark</option>
                                       <option value="253">Djibouti</option>
                                       <option value="1767">Dominica</option>
                                       <option value="1809">Dominican Republic</option>
                                       <option value="593">Ecuador</option>
                                       <option value="20">Egypt</option>
                                       <option value="503">El Salvador</option>
                                       <option value="240">Equatorial Guinea</option>
                                       <option value="291">Eritrea</option>
                                       <option value="372">Estonia</option>
                                       <option value="251">Ethiopia</option>
                                       <option value="500">Falkland Islands</option>
                                       <option value="298">Faroe Islands</option>
                                       <option value="679">Fiji</option>
                                       <option value="358">Finland</option>
                                       <option value="33">France</option>
                                       <option value="689">French Polynesia</option>
                                       <option value="241">Gabon</option>
                                       <option value="220">Gambia</option>
                                       <option value="970">Gaza Strip</option>
                                       <option value="995">Georgia</option>
                                       <option value="49">Germany</option>
                                       <option value="233">Ghana</option>
                                       <option value="350">Gibraltar</option>
                                       <option value="30">Greece</option>
                                       <option value="299">Greenland</option>
                                       <option value="1473">Grenada</option>
                                       <option value="1671">Guam</option>
                                       <option value="502">Guatemala</option>
                                       <option value="224">Guinea</option>
                                       <option value="245">Guinea-Bissau</option>
                                       <option value="592">Guyana</option>
                                       <option value="509">Haiti</option>
                                       <option value="39">Holy See (Vatican City)</option>
                                       <option value="504">Honduras</option>
                                       <option value="852">Hong Kong</option>
                                       <option value="36">Hungary</option>
                                       <option value="354">Iceland</option>
                                       <option value="91">India</option>
                                       <option value="62">Indonesia</option>
                                       <option value="98">Iran</option>
                                       <option value="964">Iraq</option>
                                       <option value="353">Ireland</option>
                                       <option value="44">Isle of Man</option>
                                       <option value="972">Israel</option>
                                       <option value="39">Italy</option>
                                       <option value="225">Ivory Coast</option>
                                       <option value="1876">Jamaica</option>
                                       <option value="81">Japan</option>
                                       <option value="962">Jordan</option>
                                       <option value="7">Kazakhstan</option>
                                       <option value="254">Kenya</option>
                                       <option value="686">Kiribati</option>
                                       <option value="381">Kosovo</option>
                                       <option value="965">Kuwait</option>
                                       <option value="996">Kyrgyzstan</option>
                                       <option value="856">Laos</option>
                                       <option value="371">Latvia</option>
                                       <option value="961">Lebanon</option>
                                       <option value="266">Lesotho</option>
                                       <option value="231">Liberia</option>
                                       <option value="218">Libya</option>
                                       <option value="423">Liechtenstein</option>
                                       <option value="370">Lithuania</option>
                                       <option value="352">Luxembourg</option>
                                       <option value="853">Macau</option>
                                       <option value="389">Macedonia</option>
                                       <option value="261">Madagascar</option>
                                       <option value="265">Malawi</option>
                                       <option value="60">Malaysia</option>
                                       <option value="960">Maldives</option>
                                       <option value="223">Mali</option>
                                       <option value="356">Malta</option>
                                       <option value="692">Marshall Islands</option>
                                       <option value="222">Mauritania</option>
                                       <option value="230">Mauritius</option>
                                       <option value="262">Mayotte</option>
                                       <option value="52">Mexico</option>
                                       <option value="691">Micronesia</option>
                                       <option value="373">Moldova</option>
                                       <option value="377">Monaco</option>
                                       <option value="976">Mongolia</option>
                                       <option value="382">Montenegro</option>
                                       <option value="1664">Montserrat</option>
                                       <option value="212">Morocco</option>
                                       <option value="258">Mozambique</option>
                                       <option value="264">Namibia</option>
                                       <option value="674">Nauru</option>
                                       <option value="977">Nepal</option>
                                       <option value="31">Netherlands</option>
                                       <option value="599">Netherlands Antilles</option>
                                       <option value="687">New Caledonia</option>
                                       <option value="64">New Zealand</option>
                                       <option value="505">Nicaragua</option>
                                       <option value="227">Niger</option>
                                       <option value="234">Nigeria</option>
                                       <option value="683">Niue</option>
                                       <option value="672">Norfolk Island</option>
                                       <option value="850">North Korea</option>
                                       <option value="1670">Northern Mariana Islands</option>
                                       <option value="47">Norway</option>
                                       <option value="968">Oman</option>
                                       <option value="92">Pakistan</option>
                                       <option value="680">Palau</option>
                                       <option value="507">Panama</option>
                                       <option value="675">Papua New Guinea</option>
                                       <option value="595">Paraguay</option>
                                       <option value="51">Peru</option>
                                       <option value="63">Philippines</option>
                                       <option value="870">Pitcairn Islands</option>
                                       <option value="48">Poland</option>
                                       <option value="351">Portugal</option>
                                       <option value="1">Puerto Rico</option>
                                       <option value="974">Qatar</option>
                                       <option value="242">Republic of the Congo</option>
                                       <option value="40">Romania</option>
                                       <option value="7">Russia</option>
                                       <option value="250">Rwanda</option>
                                       <option value="590">Saint Barthelemy</option>
                                       <option value="290">Saint Helena</option>
                                       <option value="1869">Saint Kitts and Nevis</option>
                                       <option value="1758">Saint Lucia</option>
                                       <option value="1599">Saint Martin</option>
                                       <option value="508">Saint Pierre and Miquelon</option>
                                       <option value="1784">Saint Vinc. and the Gren.</option>
                                       <option value="685">Samoa</option>
                                       <option value="378">San Marino</option>
                                       <option value="239">Sao Tome and Principe</option>
                                       <option value="966">Saudi Arabia</option>
                                       <option value="221">Senegal</option>
                                       <option value="381">Serbia</option>
                                       <option value="248">Seychelles</option>
                                       <option value="232">Sierra Leone</option>
                                       <option value="65">Singapore</option>
                                       <option value="421">Slovakia</option>
                                       <option value="386">Slovenia</option>
                                       <option value="677">Solomon Islands</option>
                                       <option value="252">Somalia</option>
                                       <option value="27">South Africa</option>
                                       <option value="82">South Korea</option>
                                       <option value="34">Spain</option>
                                       <option value="94">Sri Lanka</option>
                                       <option value="249">Sudan</option>
                                       <option value="597">Suriname</option>
                                       <option value="268">Swaziland</option>
                                       <option value="46">Sweden</option>
                                       <option value="41">Switzerland</option>
                                       <option value="963">Syria</option>
                                       <option value="886">Taiwan</option>
                                       <option value="992">Tajikistan</option>
                                       <option value="255">Tanzania</option>
                                       <option value="66">Thailand</option>
                                       <option value="670">Timor-Leste</option>
                                       <option value="228">Togo</option>
                                       <option value="690">Tokelau</option>
                                       <option value="676">Tonga</option>
                                       <option value="1868">Trinidad and Tobago</option>
                                       <option value="216">Tunisia</option>
                                       <option value="90">Turkey</option>
                                       <option value="993">Turkmenistan</option>
                                       <option value="1649">Turks and Caicos Islands</option>
                                       <option value="688">Tuvalu</option>
                                       <option value="256">Uganda</option>
                                       <option value="380">Ukraine</option>
                                       <option value="971">United Arab Emirates</option>
                                       <option value="44">United Kingdom</option>
                                       <option value="1">United States</option>
                                       <option value="598">Uruguay</option>
                                       <option value="1340">US Virgin Islands</option>
                                       <option value="998">Uzbekistan</option>
                                       <option value="678">Vanuatu</option>
                                       <option value="58">Venezuela</option>
                                       <option value="84">Vietnam</option>
                                       <option value="681">Wallis and Futuna</option>
                                       <option value="970">West Bank</option>
                                       <option value="967">Yemen</option>
                                       <option value="260">Zambia</option>
                                       <option value="263">Zimbabwe</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6" style="padding-left:0;padding-right:0;">
                                    <div class="input-group">
                                       <span class="input-group-addon" id="phone_prefix"></span>
                                       <input type="text" name="smsnumber" id="smsnumber" value="" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-md-1" style="padding-left:0;padding-right:0;">
                                    <a href="#" class="btn btn-default" data-toggle="popover" data-content="Enter your mobile number, starting with your country code, then the number (no leading zero). Cost: $0.15 per SMS." title="Mobile phone number" data-trigger="hover">?</a>
                                 </div>
                                 <div class="col-md-3" style="padding-left:0;padding-right:0;">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-4 col-sm-8">
                                 <a class="btn btn-primary btn-custom" href="#" id="submitbutton" onclick="document.getElementById('form').submit();">Start monitoring my website &raquo;</a>
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
    
      <footer id="footer" class="clearfix dark">
         <div class="footer">
            <div class="container">
               <div class="footer-inner">
                  <div class="row">
                     <div class="col-lg-3">
                        <div class="footer-content">
                           <h2 class="title logo-font text-default">Website Monitoring</h2>
                           <div class="separator-2"></div>
                           <h4 class="title text-default"><i class="fa fa-wechat pr-10"></i> &copy; Website Monitoring 2020-<?php echo date('Y') ?></h4>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="footer-content">
                           <h4 class="title text-default">Legal</h4>
                           <nav class="mb-20">
                              <ul class="nav nav-pills nav-stacked list-style-icons">
                                 <li><a target="new" href="{{url('/')}}/terms-and-conditions">Terms of service</a></li>
                                 <li><a target="new" href="{{url('/')}}/privacy-policy">Privacy policy</a></li>
                                 <li><a target="new" href="{{url('/')}}/credits">Credits</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="footer-content">
                           <h4 class="title text-default">Quick Links</h4>
                           <nav class="mb-20">
                              <ul class="nav nav-pills nav-stacked list-style-icons">
                                 <li><a target="new" href="{{url('/')}}/monitoring-plans">Plans</a></li>
                                 <li><a target="new" href="https://www.designekta.com/service/website-design-website-redesign-web-development">Web Design</a></li>
                                
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="footer-content">
                           <h4 class="title text-default">Contact us</h4>
                           <nav class="mb-20">
                              <ul class="nav nav-pills nav-stacked list-style-icons">
                                <li><a target="new" href="https://kenyawebexperts.com/aff.php?aff=166">Web Hosting</a></li>
                                <li><a target="new" href="https://www.designekta.com">Website Maintenance</a></li>
                                <li><a target="new" href="https://cloudrebue.co.ke/">Bulk SMS</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
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
   </body>
</html>