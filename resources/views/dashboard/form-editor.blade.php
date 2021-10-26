<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="regform/style.css">
  <!-- Bootstrap Core CSS -->
  <link href="dashboard/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="dashboard/css/helper.css" rel="stylesheet">
  <link href="dashboard/css/style.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

</head>

<body>

  @extends('dashboard/dashboard-master')
  @section('body')
  <!-- Page wrapper  -->
  <div class="page-wrapper">

    <div class="form-black">

      <form action='' class='form required '>
        @csrf
        {{-- <p class='field required half'>
          <label class='label required' for='name'>First name</label>
          <input class='text-input' id='name' name='fname' required type='text' value=''>
        </p>
        <p class='field required half'>
          <label class='label required' for='name'>Last name</label>
          <input class='text-input' id='name' name='lname' required type='text' value=''>
        </p>
        <p class='field required half'>
          <label class='label' for='email'>E-mail</label>
          <input class='text-input' id='email' name='email' required type='email'>
        </p>
        <p class='field required half'>
          <label class='label' for='phone'>Phone</label>
          <input class='text-input' id='phone' name='phone' type='phone'>
        </p> --}}
        <p class='field half required error'>
          <label class='label' for='Reservation_start'>Reservation start</label>
          <input name="Reservation_start" type="datetime-local" id="Reservation_start" class="input100" value="{{$Res_find->Reservation_start}}">
        </p>
        <p class='field half required error'>
          <label class='label' for='Reservation_end'>Reservation End</label>
          <input name="Reservation_end" type="datetime-local" id="Reservation_end" class="input100" value="{{$Res_find->Reservation_end}}">
          {{-- <input name="Reservation_end" type="time" id="Reservation_end" class="input100" value="{{$Res_find->Reservation_end}}"> --}}
        </p>
        
        <p class='field required half'>
          <label class='label' for='number_of_devices'>Enter many devises</label>
          <input class='text-input' id='number_of_devices' name='number_of_devices' type='number' value="{{$Res_find->number_of_devices}}">
        </p>
        
        <p class='field required half'>
          <label class='label' for='number_of_gamepad'>Enter number of hand ps4</label>
          <input class='text-input' id='number_of_gamepad' name='number_of_gamepad' type='number' value="{{$Res_find->number_of_gamepad}}">
        </p>





        <p class='field '>
          <input class='button' type='submit' value='Send'>
        </p>
      </form>
    </div>
  </div>

  <script src="regform/main.js"></script>
  <!-- All Jquery -->
  <script src="dashboard/js/lib/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="dashboard/js/lib/bootstrap/js/popper.min.js"></script>
  <script src="dashboard/js/lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="dashboard/js/jquery.slimscroll.js"></script>
  <!--Menu sidebar -->
  <script src="dashboard/js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <!--Custom JavaScript -->
  <script src="dashboard/js/custom.min.js"></script>


  <script src="dashboard/js/lib/datatables/datatables.min.js"></script>
  <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
  <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
  <script src="dashboard/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script src="dashboard/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script src="dashboard/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
  <script src="dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
  <script src="dashboard/js/lib/datatables/datatables-init.js"></script>

  @endsection

</body>

</html>