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
                                                <input type="text" name="email" class="form-control required @error('email') is-invalid @enderror" placeholder="sample@example.com">
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
