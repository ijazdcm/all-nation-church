<?php

// Start session
session_start();

// Load and initialize database class
require_once 'DB.class.php';

$db = new DB();

$tblName = 'believer';

// Set default redirect url
$redirectURL = 'index.php';

if(isset($_POST['userSubmit'])){

    // Get submitted data
    $NAME   = $_POST['NAME'];
    $DATE  = $_POST['DATE'];
    $PHONE  = $_POST['PHONE'];
     $ADDRESS  = $_POST['ADDRESS'];
      $DOB  = $_POST['DOB'];
       $ZONE  = $_POST['ZONE'];
        $CONTACT  = $_POST['CONTACT'];
         $PRAYER_REQUEST  = $_POST['PRAYER_REQUEST'];

         $id     = $_POST['id'];

    // Submitted user data
    $userData = array(
        'NAME'  => $NAME,
        'DATE' => $DATE,
        'PHONE' => $PHONE,
        'ADDRESS'  => $ADDRESS,
        'DOB' => $DOB,
        'ZONE' => $ZONE,
        'CONTACT'  => $CONTACT,
        'PRAYER_REQUEST' => $PRAYER_REQUEST

    );

    // Store submitted data into session
    $sessData['postData'] = $userData;
    $sessData['postData']['id'] = $id;

    // ID query string
    $idStr = !empty($id)?'?id='.$id:'';

    // If the data is not empty
    if(!empty($NAME) && !empty($DATE) && !empty($PHONE) && !empty($ADDRESS) && !empty($DOB) && !empty($ZONE) && !empty($CONTACT) && !empty($PRAYER_REQUEST)){

            if(!empty($id)){
                // Update data
                $condition = array('id' => $id);
                $update = $db->update($tblName, $userData, $condition);

                if($update){
                    $sessData['postData'] = '';
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg']  = 'User data has been updated successfully.';
                }else{
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg']  = 'Some problem occurred, please try again.';

                    // Set redirect url
                    $redirectURL = 'addEdit.php'.$idStr;
                }
            }else{
                // Insert data
                $insert = $db->insert($tblName, $userData);

                if($insert){
                    $sessData['postData'] = '';
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg']  = 'User data has been added successfully.';
                }else{

                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg']  = 'Some problem occurred, please try again.';

                    // Set redirect url
                    $redirectURL = 'addEdit.php';
                }
            }

    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg']  = 'All fields are mandatory, please fill all the fields.';

        // Set redirect url
        $redirectURL = 'addEdit.php'.$idStr;
    }

    // Store status into the session
    $_SESSION['sessData'] = $sessData;
}elseif(($_REQUEST['action_type'] == 'delete') && !empty($_GET['id'])){
    // Delete data
    $condition = array('id' => $_GET['id']);
    $delete = $db->delete($tblName, $condition);
    if($delete){
        $sessData['status']['type'] = 'success';
        $sessData['status']['msg']  = 'User data has been deleted successfully.';
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg']  = 'Some problem occurred, please try again.';
    }

    // Store status into the session
    $_SESSION['sessData'] = $sessData;
}

// Redirect the user
header("Location: ".$redirectURL);
exit();
?>
