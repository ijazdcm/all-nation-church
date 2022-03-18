
<?php
include_once "../connection1.php";

$NAME = $DATE = $PHONE = $ADDRESS = $DOB = $BELIEVER= $ZONE= $RELATION =$R_NAME  = $CONTACT= $PRAYER_REQUEST = '';
$NAME_ERROR = $PHONE_ERROR  = "";

if (isset($_POST['UPDATE'])) {

    // $ID = $_GET['ID'];
    $NAME = mysqli_real_escape_string($conn,  $_POST['NAME']);
    $DATE = $_POST['DATE'];
    $PHONE = mysqli_real_escape_string($conn, $_POST['PHONE']);
    $ADDRESS = $_POST['ADDRESS'];
    $DOB = $_POST['DOB'];
    $BELIEVER = $_POST['BELIEVER'];
    $RELATION = $_POST['RELATION'];
    $R_NAME = $_POST['R_NAME'];
    $ZONE = $_POST['ZONE'];
    $CONTACT = $_POST['CONTACT'];
    $PRAYER_REQUEST = $_POST['PRAYER_REQUEST'];



     if (!preg_match("/^[a-zA-Z ]+$/", $NAME)) {
        $NAME_ERROR = "Believer name must contain only alphabets and space";
    }
      if (!preg_match("/^[a-zA-Z ]+$/", $R_NAME)) {
        $R_NAME_ERROR = "Relation Member name must contain only alphabets and space";
    }

    if (strlen($PHONE)<10 || strlen($PHONE)>10 ) {
        $PHONE_ERROR = "Phone number must be minimum of 10 characters";
    }
     if (!($NAME_ERROR) && !($R_NAME_ERROR) && !($PHONE_ERROR)) {


        $query =
            "UPDATE believer SET
      NAME='" .
            $NAME .
            "',
      DATE='" .
            $DATE .
            "',
      PHONE='" .
            $PHONE .
            "',
      ADDRESS='" .
            $ADDRESS .
            "',
      DOB ='" .
            $DOB .
            "',
      ZONE='" .
            $ZONE .
            "',
      BELIEVER='" .
            $BELIEVER .
            "',
      RELATION='" .
            $RELATION .
            "',
      R_NAME='" .
            $R_NAME .
            "',
      CONTACT='" .
            $CONTACT .
            "',
      PRAYER_REQUEST='" .
            $PRAYER_REQUEST .
            "'
      where id='" .
            $ID .
            "' ";

        if(mysqli_query($conn, $query)){
            echo "<script>alert('Believer Updated succesfully');</script>";
             echo ("<script>window.location.href = '/church/pages/viewBelieversCrud/index.php' </script>");
        } else {
            echo 'ERROR: ' . $query . '' . mysqli_error($conn);
            echo "<script> alert('You didnt filled up the form correctly.');</script>";
            exit();
        }

  }
    mysqli_close($conn);
}
?>
