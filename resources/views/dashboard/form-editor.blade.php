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
        <p class='field required half'>
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
        </p>
        <p class='field half required error'>
          <label class='label' for='login'>Reservation start</label>
          <input name="start_date" type="datetime-local" id="start-date" class="input100" value="2017-06-13T13:00">
        </p>
        <p class='field half required'>
          <label class='label' for='password'>Password</label>
          <input class='text-input' id='password' name='password' required type='password'>
        </p>
        <div class='field'>
          <label class='label'>Sport?</label>
          <ul class='checkboxes'>
            <li class='checkbox'>
              <input class='checkbox-input' id='choice-0' name='choice' type='checkbox' value='0'>
              <label class='checkbox-label' for='choice-0'>Football</label>
            </li>
            <li class='checkbox'>
              <input class='checkbox-input' id='choice-1' name='choice' type='checkbox' value='1'>
              <label class='checkbox-label' for='choice-1'>Basketball</label>
            </li>
            <li class='checkbox'>
              <input class='checkbox-input' id='choice-2' name='choice' type='checkbox' value='2'>
              <label class='checkbox-label' for='choice-2'>Volleyball</label>
            </li>
            <li class='checkbox'>
              <input class='checkbox-input' id='choice-3' name='choice' type='checkbox' value='3'>
              <label class='checkbox-label' for='choice-3'>Golf</label>
            </li>
            <li class='checkbox'>
              <input class='checkbox-input' id='choice-4' name='choice' type='checkbox' value='4'>
              <label class='checkbox-label' for='choice-4'>Swimming</label>
            </li>
          </ul>
        </div>
        <div class='field'>
          <label class='label'>Favourite JS framework</label>
          <ul class='options'>
            <li class='option'>
              <input class='option-input' id='option-0' name='option' type='radio' value='0'>
              <label class='option-label' for='option-0'>React</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-1' name='option' type='radio' value='1'>
              <label class='option-label' for='option-1'>Vue</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-2' name='option' type='radio' value='2'>
              <label class='option-label' for='option-2'>Angular</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-3' name='option' type='radio' value='3'>
              <label class='option-label' for='option-3'>Riot</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-4' name='option' type='radio' value='4'>
              <label class='option-label' for='option-4'>Polymer</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-5' name='option' type='radio' value='5'>
              <label class='option-label' for='option-5'>Ember</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-6' name='option' type='radio' value='6'>
              <label class='option-label' for='option-6'>Meteor</label>
            </li>
            <li class='option'>
              <input class='option-input' id='option-7' name='option' type='radio' value='7'>
              <label class='option-label' for='option-7'>Knockout</label>
            </li>
          </ul>
        </div>
        <p class='field'>
          <label class='label' for='about'>About</label>
          <textarea class='textarea' cols='50' id='about' name='about' rows='4'></textarea>
        </p>
        <p class='field half'>
          <label class='label' for='select'>Position</label>
          <select class='select' id='select'>
            <option selected value=''></option>
            <option value='ceo'>CEO</option>
            <option value='front-end'>Front-end developer</option>
            <option value='back-end'>Back-end developer</option>
          </select>
        </p>
        <p class='field half'>
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