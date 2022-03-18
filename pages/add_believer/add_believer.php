<?php
ob_start(); ?>

<?php

ini_set('display_errors', 0);
include_once "./pages/connection1.php";


$NAME = $DATE = $PHONE = $ADDRESS = $DOB = $R_NAME = $BELIEVER = $ZONE = $RELATION = $CONTACT = $PRAYER_REQUEST = '';
$NAME_ERROR = $PHONE_ERROR  = "";

if (isset($_POST['SUBMIT'])) {


  $NAME = mysqli_real_escape_string($conn,  $_POST['NAME']);
  $DATE = $_POST['DATE'];
  $PHONE = mysqli_real_escape_string($conn, $_POST['PHONE']);
  $ADDRESS = $_POST['ADDRESS'];
  $DOB = $_POST['DOB'];
  $ZONE = $_POST['ZONE'];
  $BELIEVER = $_POST['BELIEVER'];
  $RELATION = $_POST['RELATION'];
  $R_NAME = $_POST['R_NAME'];
  $CONTACT = $_POST['CONTACT'];
  $PRAYER_REQUEST = $_POST['PRAYER_REQUEST'];


  if (!preg_match("/^[a-zA-Z ]+$/", $NAME)) {
    $NAME_ERROR = "Believer name must contain only alphabets and space";
  }
  if (!preg_match("/^[a-zA-Z ]+$/", $R_NAME)) {
    $R_NAME_ERROR = "Relation Member name must contain only alphabets and space";
  }

  if (strlen($PHONE) < 10 || strlen($PHONE) > 10) {
    $PHONE_ERROR = "Phone number must be minimum of 10 characters";
  }

  if (!($NAME_ERROR) && !($R_NAME_ERROR) && !($PHONE_ERROR)) {

    $sql = "INSERT INTO believer (NAME,DATE,PHONE,ADDRESS,DOB,ZONE,BELIEVER,RELATION,R_NAME,CONTACT,PRAYER_REQUEST)
  VALUES('$NAME','$DATE','$PHONE','$ADDRESS','$DOB','$ZONE','$BELIEVER','$RELATION','$R_NAME','$CONTACT','$PRAYER_REQUEST')";

    if (mysqli_query($conn, $sql)) {

      echo "<script>alert('Believer Inserted succesfully');</script>";
      echo ("<script>window.location.href = '/church/pages/viewBelieversCrud/index.php' </script>");
    } else {
      echo "ERROR: " . $sql . "" . mysqli_error($conn);
      echo "<script> alert('You didn't filled up the form correctly.');</script>";
      exit();
    }
  }
  mysqli_close($conn);
}
?>

<?php ob_flush(); ?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Believer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Add Believer</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 ">

          <!-- Main content -->
          <div class="container">
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">ADD NEW BELIEVER</h3>
                </div>
                <!-- /.card-header -->



                <!-- form start -->
                <form class="needs-validation" novalidate method="POST" action="" id="new_customer_creation">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">

                        <label for="NAME">NAME*</label>
                        <input type="text" class="form-control" id="NAME" name="NAME" required placeholder="">
                        <span class="text-danger"><?php if (isset($NAME_ERROR)) echo $NAME_ERROR; ?></span>
                        <div class="invalid-feedback"> Enter believer Name </div>


                      </div>
                      <div class="col-md-4">

                        <label for="DATE">DATE*</label>
                        <input type="date" class="form-control" id="DATE" name="DATE" required placeholder="">
                        <div class="invalid-feedback"> Select Date </div>

                      </div>
                      <div class="col-md-4">

                        <label for="ADDRESS">ADDRESS*</label>
                        <input type="text" class="form-control" id="ADDRESS" name="ADDRESS" required placeholder=" ">
                        <div class="invalid-feedback"> Enter Address </div>

                      </div>
                    </div><BR>
                    <!-- second row of form -->
                    <div class="row">
                      <div class="col-md-4">

                        <label for="PHONE">PHONE NO*</label>
                        <input type="text" class="form-control" max="10" id="PHONE" name="PHONE" required placeholder="">
                        <span class="text-danger"><?php if (isset($PHONE_ERROR)) echo $PHONE_ERROR; ?></span>
                        <div class="invalid-feedback"> Enter Phone Number </div>


                      </div>
                      <div class="col-md-4">

                        <label for="DOB">DATE OF BIRTH*</label>
                        <input type="date" class="form-control" id="exampleCheck1" name="DOB" placeholder="">
                        <div class="invalid-feedback"> Select date of birth </div>

                      </div>
                      <div class="col-md-4">

                        <label>ZONE*</label>
                        <select class="form-control" name="ZONE" id="ZONE" style="width: 100%;" required tabindex="-1" aria-hidden="true">
                          <option selected="selected" value="">CHOOSE ZONE</option>
                          <option value="ZONE 1">ZONE 1</option>
                          <option value="ZONE 2"> ZONE 2</option>
                          <option value="ZONE 3"> ZONE 3</option>
                          <option value="ZONE 4"> ZONE 4</option>
                          <option value="ZONE 5"> ZONE 5</option>
                        </select>
                        <div class="invalid-feedback"> Select Zone </div>
                      </div>

                    </div><BR>
                    <div class="row">

                      <div class="col-md-4">

                        <label> </label><br>

                        <!-- Default checked -->
                        <div class="custom-control custom-radio ">
                          <input type="radio" class="custom-control-input" name="BELIEVER" value="New Comer" id="defaultChecked" name="defaultExampleRadios" required>
                          <label class="custom-control-label" for="defaultChecked" style="color:blue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New Comer</label>
                        </div>

                        <!-- Default unchecked -->
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="BELIEVER" value="Church_Member" id="defaultUnchecked" name="defaultExampleRadios" required>
                          <label class="custom-control-label" for="defaultUnchecked" style="color:blue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Church Member</label>
                          <div class="invalid-feedback"> Select One </div>
                        </div>


                      </div>


                      <div class="col-md-4">

                        <label>RELATION*</label>
                        <select class="form-control" name="RELATION" id="RELATION" style="width: 100%;" required tabindex="-1" aria-hidden="true">
                          <option selected="selected" value="">CHOOSE RELATION</option>
                          <option value="FATHER OF">FATHER OF </option>
                          <option value="MOTHER OF"> MOTHER OF </option>
                          <option value="SON OF"> SON OF</option>
                          <option value="DAUGHTER OF">DAUGHTER OF </option>
                          <option value="WIFE OF"> WIFE OF</option>
                          <option value="HUSBAND OF"> HUSBAND OF </option>
                          <!-- <option  value="GRAND FATHER OF"> GRAND FATHER OF </option>
                                             <option  value="GRAND MOTHER OF"> GRAND MOTHER OF</option> -->
                        </select>
                        <div class="invalid-feedback"> Select Relation </div>
                      </div>
                      <div class="col-md-4">

                        <label for="NAME">RELATION MEMBER NAME*</label>
                        <input type="text" class="form-control" id="R_NAME" name="R_NAME" required placeholder="">
                        <span class="text-danger"><?php if (isset($R_NAME_ERROR)) echo $R_NAME_ERROR; ?></span>
                        <div class="invalid-feedback"> Enter relation Name </div>


                      </div>

                    </div><BR>

                    <div class="row">

                      <div class="col-md-4">

                        <label>TO BE CONTACTED*</label><br>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline1" value="Yes" name="CONTACT" class="custom-control-input" required>
                          <label class="custom-control-label" for="customRadioInline1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes</label>
                        </div><br>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline2" value="No" name="CONTACT" class="custom-control-input" required>
                          <label class="custom-control-label" for="customRadioInline2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No</label>
                          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="invalid-feedback"> Select One </div>
                        </div>


                      </div>


                      <div class="col-md-6">

                        <label for="customerAddress">PRAYER REQUEST*</label>
                        <textarea type="text" required class="form-control" rows="3" name="PRAYER_REQUEST" id="customerAddress"></textarea>
                        <div class="invalid-feedback">Enter request </div>
                      </div>

                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer ">
                    <div class="float-right">
                      <button type="reset" class="btn btn-danger">RESET</button>
                      <button type="submit" name="SUBMIT" class="btn btn-info addcus">ADD BELIEVER</button>
                      <!-- <button class="btn btn-success btn-block" id="SAVE" name="SAVE" type="submit">SUBMIT</button> -->

                    </div>
                  </div>
                </form>

              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.content -->
          <br>
          <br>
          <br>
        </div>
        <script src="./pages/steps.js"></script>
