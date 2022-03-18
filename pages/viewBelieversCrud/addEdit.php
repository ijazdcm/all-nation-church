<?php

// Start session
session_start();

$postData = $userData = array();

// Get session data
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';

// Get status message from session
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}

// Get posted data from session
if(!empty($sessData['postData'])){
    $postData = $sessData['postData'];
    unset($_SESSION['sessData']['postData']);
}

// Get user data
if(!empty($_GET['id'])){
    include 'DB.class.php';
    $db = new DB();
    $conditions['where'] = array(
        'id' => $_GET['id'],
    );
    $conditions['return_type'] = 'single';
    $userData = $db->getRows('believer', $conditions);
}

// Pre-filled data
$userData = !empty($postData)?$postData:$userData;

// Define action
$actionLabel = !empty($_GET['id'])?'Edit':'Add';

?>

<!-- Display status message -->
<?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
<div class="alert alert-success"><?php echo $statusMsg; ?></div>
<?php }elseif(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
<div class="alert alert-danger"><?php echo $statusMsg; ?></div>
<?php } ?>

<!-- Add/Edit form -->
<div class="panel panel-default">
    <div class="panel-heading"><?php echo $actionLabel; ?> User <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
    <div class="panel-body">
        <form method="post" action="userAction.php" class="form">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="NAME" value="<?php echo !empty($userData['NAME'])?$userData['NAME']:''; ?>">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="DATE" value="<?php echo !empty($userData['DATE'])?$userData['DATE']:''; ?>">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="PHONE" value="<?php echo !empty($userData['PHONE'])?$userData['PHONE']:''; ?>">
            </div>
             <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="ADDRESS" value="<?php echo !empty($userData['ADDRESS'])?$userData['ADDRESS']:''; ?>">
            </div>
            <div class="form-group">
                <label>Date of birth</label>
                <input type="date" class="form-control" name="DOB" value="<?php echo !empty($userData['DOB'])?$userData['DOB']:''; ?>">
            </div>
            <div class="form-group">
                <label>Zone</label>
                 <select class="form-control" name="ZONE" id="ZONE" style="width: 100%;" required value="<?php echo !empty($userData['ZONE'])?$userData['ZONE']:''; ?>"
                                        tabindex="-1" aria-hidden="true">
                                        <option selected="selected" value="">CHOOSE ZONE</option>
                                         <option  value="ZONE 1">ZONE 1</option>
                                          <option value="ZONE 2"> ZONE 2</option>
                                           <option  value="ZONE 3"> ZONE 3</option>
                                            <option  value="ZONE 4"> ZONE 4</option>
                                             <option  value="ZONE 5"> ZONE 5</option>
                                    </select>
            </div>
             <div class="form-group">
                <label>To Be Contacted ?</label>
                <!-- <input type="text" class="form-control" name="name" value="<?php echo !empty($userData['CONTACT'])?$userData['CONTACT']:''; ?>"> -->
    <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" value ="Yes" name="CONTACT" class="custom-control-input" value="<?php echo !empty($userData['CONTACT'])?$userData['CONTACT']:''; ?>" required>
  <label class="custom-control-label" for="customRadioInline1">Yes</label>
  </div><br>
  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2"   value ="No" name="CONTACT" class="custom-control-input"  value="<?php echo !empty($userData['CONTACT'])?$userData['CONTACT']:''; ?>" required>
  <label class="custom-control-label" for="customRadioInline2">No</label>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="invalid-feedback">  Select One    </div>
  </div>


              </div>
            <div class="form-group">
                <label>Email</label>
                <!-- <input type="text" class="form-control" name="email" value="<?php echo !empty($userData['email'])?$userData['email']:''; ?>"> -->
           <textarea type="text"  required class="form-control" rows="3"   value="<?php echo !empty($userData['PRAYER_REQUEST'])?$userData['PRAYER_REQUEST']:''; ?>" name="PRAYER_REQUEST" id="customerAddress"></textarea>
                                   <div class="invalid-feedback">Enter request </div>
              </div>


            <input type="hidden" name="id" value="<?php echo !empty($userData['id'])?$userData['id']:''; ?>">
            <input type="submit" name="userSubmit" class="btn btn-success" value="SUBMIT"/>
        </form>
    </div>
</div>

