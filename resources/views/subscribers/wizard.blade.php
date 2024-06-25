<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="African Pharmaceutical Review | Subscribers To Our Updates">
    <meta name="author" content="Ansonika">
    <title>African Pharmaceutical Review | Subscribers To Our Updates</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

 <!-- BASE CSS -->
 <link href="{{asset('subscribers/css/bootstrap.min.css')}}" rel="stylesheet">
 <link href="{{asset('subscribers/css/menu.css')}}" rel="stylesheet">
 <link href="{{asset('subscribers/css/style.css')}}" rel="stylesheet">
 <link href="{{asset('subscribers/css/vendors.css')}}" rel="stylesheet">

 <!-- YOUR CUSTOM CSS -->
 <link href="{{asset('subscribers/css/custom.css')}}" rel="stylesheet">

 <!-- MODERNIZR MENU -->
 <script src="{{asset('subscribers/js/modernizr.js')}}"></script>

	<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-11097556-8']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </li>
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="{{url('/')}}" id="logo"><img  src="{{asset('subscribers/img/aprlogo.png')}}" alt="" ></a>

					<div id="social">
						<ul>
							<li><a href="https://web.facebook.com/profile.php?id=100094284684632"><i class="bi bi-facebook"></i></a></li>
							<li><a href="https://x.com/af_pharmareview?t=woS7D9KoJmv_eJ3kBEoE3Q&s=08"><i class="bi bi-twitter-x"></i></a></li>
							<li><a href="https://youtube.com/@AfricanPharmaceuticalReview?si=IG1Wb0Z_YIi_bufM"><i class="bi bi-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/company/african-pharmaceutical-review/about/?viewAsMember=true"><i class="bi bi-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img  src="{{asset('subscribers/img/issue.png')}}" alt="" class="img-fluid banner-img"></figure>
						<h2>Subscribe for FREE to our #1 issue</h2>
						<p>
							By subscribing, you gain access to EXCLUSIVE content; articles, opinion pieces, latest insights,
                            cutting-edge information from seasoned industry experts and much more. You will also be
                            informed about crucial industry events that are poised to shape the world of pharmaceuticals
                            and biotechnology. Join our community today!
						</p>
						<!-- <a href="#" class="btn_1 rounded" target="_parent">

						</a> -->
						<a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
					</div>
					<div class="copy">© 2024 African Pharmaceutical Review</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container" class="my-auto">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form id="wrappeds" action="{{route('post-subscription')}}" method="POST">
                            @csrf
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">

                                <div class="step">
                                    <h3 class="main_question"><strong>1/3</strong>Your Contact Details</h3>
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="form-group">
                                                <input type="text" value="{{Auth::User()->email}}" readonly name="email" class="form-control required @error('email') is-invalid @enderror" placeholder="sample@example.com">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">

                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control required @error('address') is-invalid @enderror" placeholder="Address">
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                                        <style>
                                            .iti {
                                                position: relative;
                                                display: inline-block;
                                                width: 100%;
                                            }
                                        </style>


                                      <div class="col-lg-12">
                                        <div class="form-group">
                                            <input   type="tel" name="phone" class="form-control required @error('phone') is-invalid @enderror" placeholder="Phone Number"  id="phone" >

                                        </div>
                                      </div>

                                      <script>
                                        const phoneInputField = document.querySelector("#phone");
                                        const phoneInput = window.intlTelInput(phoneInputField, {
                                          utilsScript:
                                            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                                        });
                                      </script>

                                    </div>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
                                    {{--  --}}
                                    <script>
                                        // $('.iti__country').click(function(e) {
                                        $(document).on("click tap touchstart", ".iti__country", function(e){
                                        //    console.log(e.target.innerHTML);
                                        //    alert(e.target.innerHTML)
                                           e.preventDefault();
                                           var country = $(this).find('.iti__country-name').text();
                                           var code = $(this).find('.iti__dial-code').text();
                                           // alert(code)
                                           $("#countrys").val(country);
                                           $("#code").val(code);
                                        });



                                        $('.iti__country').on('tap', function(e){
                                           e.preventDefault();
                                           var country = $(this).find('.iti__country-name').text();
                                           var code = $(this).find('.iti__dial-code').text();
                                           // alert(code)
                                           $("#countrys").val(country);
                                           $("#code").val(code);
                                        });


                                    </script>

                                    {{--  --}}

                                    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
                                    <style>
                                        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
                                            width: 100%;
                                        }
                                    </style> --}}

                                    <input   type="hidden" name="country_code" class="form-control  @error('country') is-invalid @enderror" placeholder="Your Country Code"  id="code" >


                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input   type="text" name="country" class="form-control required @error('country') is-invalid @enderror" placeholder="Your Country"  id="countrys" >

                                        </div>
                                    </div>


                                    {{-- <div class="form-group">
										<div class="styled-select clearfix" style="width:100%">
											<select style="width:100%" class="wide required selectpicker" data-show-subtext="false" data-live-search="true"  name="country">
												<option value="" readonly>Your Country</option>
												<option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
											</select>
										</div>
									</div> --}}





                                    <div class="form-group">
										<input type="text" name="state" class="form-control required" placeholder="City/County/State">
									</div>
                                </div>


								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>Areas of Interest</h3>
                                    <div class="form-group">
										<div class="styled-select clearfix">
											<select onchange="showDiv(this)" class="wide  selectpicker" data-show-subtext="true" data-live-search="true"  name="Job_function">
												<option value="" readonly>Job Title</option>
												<option value="Consultant">Consultant</option>
                                                <option value="Pharmacist">Pharmacist</option>
                                                <option value="Medical Doctor">Medical Doctor</option>
                                                <option value="dentist">Dentist</option>
                                                <option value="nurse">Nurse</option>

                                                <option value="Professor">Professor</option>
                                                <option value="Supply Chain Manager">Supply Chain Manager</option>
                                                <option value="QA/QC manager">QA/QC manager</option>

                                                <option value="Marketing Manager">Marketing Manager</option>
                                                <option value="Sales representative">Sales representative</option>
                                                <option value="Procurement">Procurement</option>
                                                <option value="Other">Other</option>
											</select>
                                            {{--  --}}


                                            {{--  --}}
										</div>
									</div>
                                    <div class="form-group"  id="hidden_div">
                                        <label>Specify Job Title</label>
                                        <input type="text" name="other_Job_function" class="form-control" placeholder="Specify">
                                    </div>
                                    <script type="text/javascript">
                                        function showDiv(select){
                                           if(select.value=="Other"){
                                            document.getElementById('hidden_div').style.display = "block";
                                           } else{
                                            document.getElementById('hidden_div').style.display = "none";
                                           }
                                        }
                                    </script>
                                    <div class="form-group">
                                        <label>Name Of Organization</label>
                                        <input type="text" name="organization" class="form-control required" placeholder="Organization">
                                    </div>
                                    <div class="row">
                                        <label>Areas of Interest</label>
                                        <div class="form-group">
                                            <label class="container_check version_2">Select All
                                                <input type="checkbox" name="areas_of_interest" onClick="selectAll(this,'areas_of_interest')" class="selectall" onchange="getVals(this, 'areas_of_interest');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <script language="JavaScript">
                                            // $('.selectall').click(function() {
                                            //     if ($(this).is(':checked')) {
                                            //         $('div input').attr('checked', true);
                                            //     } else {
                                            //         $('div input').attr('checked', false);
                                            //     }
                                            // });

                                            function selectAll(source) {
                                                checkboxes = document.getElementsByName('areas_of_interest[]');
                                                for(var i in checkboxes)
                                                    checkboxes[i].checked = source.checked;
                                            }
                                        </script>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="container_check version_2">Microbiology
                                                    <input type="checkbox" name="areas_of_interest[]" value="Microbiology" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2"> Analytical Techniques
                                                    <input type="checkbox" name="areas_of_interest[]" value="Analytical Techniques" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Drug Delivery
                                                    <input type="checkbox" name="areas_of_interest[]" value="Drug Delivery" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Formulation Development
                                                    <input type="checkbox" name="areas_of_interest[]" value="Formulation Development" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Bioprocessing
                                                    <input type="checkbox" name="areas_of_interest[]" value="Bioprocessing" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            {{--  --}}
                                            <div class="form-group">
                                                <label class="container_check version_2">Manufacturing,
                                                    <input type="checkbox" name="areas_of_interest[]" value="Manufacturing" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2"> Quality Assurance /Quality Control,
                                                    <input type="checkbox" name="areas_of_interest[]" value="Quality Assurance /Quality Control," class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="container_check version_2">Biopharma
                                                    <input type="checkbox" name="areas_of_interest[]" value="Biopharma" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Packaging and Labelling
                                                    <input type="checkbox" name="areas_of_interest[]" value="Formulation Development" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Regulatory Affairs
                                                    <input type="checkbox" name="areas_of_interest[]" value="Regulatory Affairs" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Health Supply Chain Management
                                                    <input type="checkbox" name="areas_of_interest[]" value="Health Supply Chain Management" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Artificial Intelligence
                                                    <input type="checkbox" name="areas_of_interest[]" value="Artificial Intelligence" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Other
                                                    <input id="show" type="checkbox" name="others_areas_of_interest[]" value="Other" class="" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            {{--  --}}
                                            <div class="form-group"  id="box">
                                                <label>Specify Area of Interest</label>
                                                <input type="text" name="other_areas_of_interest" class="form-control" placeholder="Specify">
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </div>

                                    {{--  --}}
                                    <script>
                                        const checkbox = document.getElementById('show');

                                        const box = document.getElementById('box');

                                        checkbox.addEventListener('click', function handleClick() {
                                        if (checkbox.checked) {
                                            box.style.display = 'block';
                                        } else {
                                            box.style.display = 'none';
                                        }
                                        });
                                    </script>
                                    {{--  --}}
								</div>
								<!-- /step-->

                                <!-- /step-->
								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Subscription Options</h3>
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="container_check version_2">Select All
                                                        <input type="checkbox" name="subscription_options" onClick="selectAlls(this,'subscription_options')" class="selectall" onchange="getVals(this, 'subscription_options');">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <script language="JavaScript">
                                                    function selectAlls(source) {
                                                        checkboxes = document.getElementsByName('subscription_options[]');
                                                        for(var i in checkboxes)
                                                            checkboxes[i].checked = source.checked;
                                                    }
                                                </script>
                                                <div class="form-group">
                                                    <label class="container_check version_2">Digital version of the African Pharmaceutical Review (published quarterly)
                                                        <input type="checkbox" name="subscription_options[]" value="Digital version of the African Pharmaceutical Review" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="container_check version_2"> Newsletter
                                                        <input type="checkbox" name="subscription_options[]" value="Analytical Techniques" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="container_check version_2">Third party (application notes, product development and updates from partners)
                                                        <input type="checkbox" name="subscription_options[]" value="Drug Delivery" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="container_check version_2">Webinar notifications
                                                        <input type="checkbox" name="subscription_options[]" value="Webinar notifications" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="container_check version_2">Printed Version of Magazine
                                                        <input type="checkbox" name="subscription_options[]" value="Printed Version of Magazine" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="container_check version_2">Event notifications
                                                        <input type="checkbox" name="subscription_options[]" value="Event notifications" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>


                                            </div>
                                            {{--  --}}

                                        </div>
                                    </div>


                                    <div class="form-group terms">
										<label class="container_check">I accept African Pharmaceutical Review's <a target="new" href="{{url('/')}}/terms-and-conditions" >Terms & Conditions and Privacy Policy </a>
											<input type="checkbox" name="terms" value="Yes" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
                                    {{--  --}}
								</div>
								<!-- /step-->


								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								<button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	{{-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> --}}
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    <p>Now Lets do the lorem ipsum for Pharvers</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('subscribers/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('subscribers/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('subscribers/js/velocity.min.js')}}"></script>
	<script src="{{asset('subscribers/js/functions.js')}}"></script>

	<!-- Wizard script -->
	<script src="{{asset('subscribers/js/survey_func.js')}}"></script>

</body>

</html>
