

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- icon --}}
    <link rel="shortcut icon" href="ps-store/images/logo.png" type="image/x-icon">

    {{-- <link rel="shortcut icon" href="ps-store/Appointment/images/logo.png" sizes="16x16" type="image/x-icon"> --}}
            <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
    <link rel="shortcut icon" href="ps-store/Appointment/images/logo.png" type="image/x-icon">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/css/util.css">
	<link rel="stylesheet" type="text/css" href="ps-store/Appointment/css/main.css">
	<!--===============================================================================================-->

</head>
@extends('ps-store.MasterIndex')

<body class="is-preload">

    @section('header')
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="reservation/appointment" method="POST">
				@csrf
				<span class="contact100-form-title">
					Appointment
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first_name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last_name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				{{-- <label class="label-input100" for="email">Enter your ID *</label>
				<div class="wrap-input100 validate-input" data-validate="Valid id is required: 00000000000">
					<input id="id" class="input100" type="tel" name="id" placeholder="Eg. 00000000000">
					<span class="focus-input100"></span>
				</div> --}}

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number *</label>
				<div class="wrap-input100" data-validate="Valid email is required: +963900000000">
					<input id="phone" class="input100" type="tel" name="phone" placeholder="Eg. +1 800 000000">
					<span class="focus-input100"></span>
				</div>

                <label class="label-input100" for="phone">Enter date Appointment *</label>
				<div class="wrap-input100 validate-input" data-validate="Valid date is required:">
                    <input name="start_date" type="datetime-local" id="start-date" class="input100" value="2017-06-13T13:00">
                    <span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter end date Appointment *</label>
				<div class="wrap-input100 validate-input" data-validate="Valid date is required:">
                    <input name="start_date" type="time" id="end-date" class="input100" value="">
                    <span class="focus-input100"></span>
				</div>


                <label class="label-input100" for="phone">  Enter many devises  and Enter number of hand ps4 *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input " data-validate="Valid date is required:">
					<input class="input100 " type="number" name="number_of_devices" min="0" placeholder="many devises">
                    {{-- <input type="time"  class="input100" min="" value="00:00"/> --}}
                    <span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Valid devises is required:">
					<input class="input100 " type="number" name="number_of_handps4" min="0" placeholder="number hand ps4">
					<span class="focus-input100"></span>
				</div>




				{{-- <label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate="Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div> --}}

                {{-- <div class="col-6 col-12-medium">
                    <input type="radio" id="priority-normal" name="priority">
                    <label for="priority-normal">2 persons</label>
                </div>
                <div class="col-6 col-12-medium ">
                    <input type="radio" id="priority-high" name="priority">
                    <label for="priority-high">4 persons</label>
                </div> --}}


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('ps-store/Appointment//images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							Mada Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							+1 800 1236879
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@example.com
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="ps-store/Appointment/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="ps-store/Appointment/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="ps-store/Appointment/vendor/bootstrap/js/popper.js"></script>
	<script src="ps-store/Appointment/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="ps-store/Appointment/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script src="ps-store/Appointment/vendor/daterangepicker/moment.min.js"></script>
	<script src="ps-store/Appointment/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="ps-store/Appointment/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="ps-store/Appointment/js/js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
    @endsection
</body>

</html>
