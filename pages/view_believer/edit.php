
<?php

include_once "../connection.php";

//getting id from url
if (isset($_GET['id'])) {
    $ID = $_GET['id'];

    $sql6 = 'SELECT * FROM `believer` WHERE ID=:ID LIMIT 1 ';

    $stmt = $conn->prepare($sql6);
    $stmt->bindParam('ID', $ID);

    $stmt->execute();

    $single_customer_details_fecthed = $stmt->fetchAll(PDO::FETCH_ASSOC);


}
 foreach (
        $single_customer_details_fecthed
        as $sno => $single_customer_details
    ) { ?>




  <?php include "../layout1.php";?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Believer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">View Believer / Edit Believer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title"> EDIT BELIEVER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


  <!-- form start -->
                <form  class="needs-validation" novalidate  method="POST" action=""  id="new_customer_creation">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">

                                    <label for="NAME">NAME*</label>
                                    <input type="text" class="form-control" id="NAME" name="NAME" required
                                    value="<?php echo $single_customer_details['NAME']; ?>"
                                        placeholder="">
                                          <span class="text-danger"><?php if (isset($NAME_ERROR)) echo $NAME_ERROR; ?></span>
                                         <div class="invalid-feedback">  Enter believer Name    </div>

                            </div>
                            <div class="col-md-4">

                                    <label for="DATE">DATE*</label>
                                    <input type="date" class="form-control" id="DATE" name="DATE" required
                                    value="<?php echo $single_customer_details['DATE']; ?>"
                                        placeholder="">
                                         <div class="invalid-feedback"> Select Date     </div>

                            </div>
                            <div class="col-md-4">

                                    <label for="ADDRESS">ADDRESS*</label>
                                    <input type="text" class="form-control" id="ADDRESS" name="ADDRESS" required
                                    value="<?php echo $single_customer_details['ADDRESS']; ?>"
                                        placeholder=" ">
                                         <div class="invalid-feedback">    Enter Address  </div>

                            </div>
                        </div><BR>
                        <!-- second row of form -->
                        <div class="row">
                            <div class="col-md-4">

                                    <label for="PHONE">PHONE NO*</label>
                                    <input type="text" class="form-control" max="10" id="PHONE" name="PHONE" required
                                    value="<?php echo $single_customer_details['PHONE']; ?>"
                                        placeholder="">
                                          <span class="text-danger"><?php if(isset($PHONE_ERROR)) echo $PHONE_ERROR; ?></span>
                                         <div class="invalid-feedback">   Enter Phone Number   </div>


                            </div>
                            <div class="col-md-4">

                                    <label for="DOB">DATE OF BIRTH*</label>
                                    <input type="date" class="form-control" id="DOB" name="DOB" required
                                    value="<?php echo $single_customer_details['DOB']; ?>"
                                        placeholder="">
                                         <div class="invalid-feedback">  Select date of birth    </div>
 <div class="form-check">
    <input type="checkbox" name="DOB" <?php if($single_customer_details['DOB'] == "0000-00-00") { echo "checked"; }?> value="NIL" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">NIL</label>
  </div>
                            </div>
                            <div class="col-md-4">

                                    <label>ZONE*</label>
                                    <select class="form-control" name="ZONE" id="ZONE" style="width: 100%;" required
                                        tabindex="-1" aria-hidden="true">
                                        <option selected="selected" value="">CHOOSE ZONE</option>
                                         <option  value="ZONE 1" <?php if($single_customer_details['ZONE']=="ZONE 1") echo 'selected="selected"'; ?>>ZONE 1</option>
                                          <option value="ZONE 2" <?php if($single_customer_details['ZONE']=="ZONE 2") echo 'selected="selected"'; ?>> ZONE 2</option>
                                           <option  value="ZONE 3" <?php if($single_customer_details['ZONE']=="ZONE 3") echo 'selected="selected"'; ?>> ZONE 3</option>
                                            <option  value="ZONE 4" <?php if($single_customer_details['ZONE']=="ZONE 4") echo 'selected="selected"'; ?>> ZONE 4</option>
                                             <option  value="ZONE 5" <?php if($single_customer_details['ZONE']=="ZONE 5") echo 'selected="selected"'; ?>> ZONE 5</option>
                                    </select>
                                     <div class="invalid-feedback"> Select Zone  </div>
                                </div>

                        </div><BR>
                        <div class="row">

                            <div class="col-md-4">

                                    <label  ></label><br>
<!-- Default checked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input"  id="defaultChecked"<?php if($single_customer_details['BELIEVER'] == "New Comer") { echo "checked"; }?>  value ="New Comer" name="BELIEVER" name="defaultExampleRadios"   required>
  <label class="custom-control-label" for="defaultChecked"  style="color:blue;">New Comer</label>
</div>

<!-- Default unchecked -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="defaultUnchecked"<?php if($single_customer_details['BELIEVER'] == "Church_Member") { echo "checked"; }?>  value ="Church_Member"  name="BELIEVER" name="defaultExampleRadios"  required>
  <label class="custom-control-label" for="defaultUnchecked"  style="color:blue;">Church Member</label>
<div class="invalid-feedback">  Select One    </div>
</div>



          </div>


                                <div class="col-md-4">

                                    <label>RELATION*</label>
                                    <select class="form-control" name="RELATION" id="RELATION" style="width: 100%;" required
                                        tabindex="-1" aria-hidden="true">
                                      <option selected="selected" value="">CHOOSE RELATION</option>
                                         <option  value="FATHER OF" <?php if($single_customer_details['RELATION']=="FATHER OF") echo 'selected="selected"'; ?>>FATHER OF</option>
                                          <option value="MOTHER OF" <?php if($single_customer_details['RELATION']=="MOTHER OF") echo 'selected="selected"'; ?>> MOTHER OF </option>
                                           <option  value="SON OF" <?php if($single_customer_details['RELATION']=="SON OF") echo 'selected="selected"'; ?>> SON OF</option>
                                            <option  value="DAUGHTER OF" <?php if($single_customer_details['RELATION']=="DAUGHTER OF") echo 'selected="selected"'; ?>>DAUGHTER OF </option>
                                             <option  value="WIFE OF" <?php if($single_customer_details['RELATION']=="WIFE OF") echo 'selected="selected"'; ?>> WIFE OF</option>
                                             <option  value="HUSBAND OF" <?php if($single_customer_details['RELATION']=="HUSBAND OF") echo 'selected="selected"'; ?>> HUSBAND OF</option>
                                              <option  value="GRAND FATHER OF" <?php if($single_customer_details['RELATION']=="GRAND FATHER OF") echo 'selected="selected"'; ?>> GRAND FATHER OF</option>
                                             <option  value="GRAND MOTHER OF" <?php if($single_customer_details['RELATION']=="GRAND MOTHER OF") echo 'selected="selected"'; ?>> GRAND MOTHER OF</option>
                                    </select>
                                     <div class="invalid-feedback"> Select Relation </div>
                                </div>
                                  <div class="col-md-4">

                                    <label for="NAME">RELATION MEMBER NAME*</label>
                                    <input type="text" class="form-control" id="R_NAME" name="R_NAME" required
                                    value="<?php echo $single_customer_details['R_NAME']; ?>"
                                        placeholder="">
                                          <span class="text-danger"><?php if (isset($R_NAME_ERROR)) echo $R_NAME_ERROR; ?></span>
                                         <div class="invalid-feedback">  Enter relation member Name    </div>

                            </div>

                        </div><BR>
                        <div class="row">

    <div class="col-md-4">

                            <label  >TO BE CONTACTED*</label><br>
  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" <?php if($single_customer_details['CONTACT'] == "Yes") { echo "checked"; }?> name="CONTACT"  value ="Yes"  class="custom-control-input" required>
  <label class="custom-control-label" for="customRadioInline1">Yes</label>
  </div><br>
  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2"<?php if($single_customer_details['CONTACT'] == "No") { echo "checked"; }?> name="CONTACT"    value ="No"  class="custom-control-input" required>
  <label class="custom-control-label" for="customRadioInline2">No</label>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="invalid-feedback">  Select One    </div>
  </div>


                            </div>

                        <div class="col-md-6">

                                    <label for="customerAddress">PRAYER REQUEST*</label>
                                    <textarea type="text"
                                    required class="form-control" rows="3" name="PRAYER_REQUEST" id="customerAddress"><?php echo $single_customer_details['PRAYER_REQUEST']; ?></textarea>
                                   <div class="invalid-feedback">Enter request</div>
                                </div>

                        </div>

                        <!-- /.card-body -->
                        <!-- <div class=" card-footer float-right row pull-right">

                                                <div class="col-md-4"> -->
                        <div class="card-footer ">
                            <div class="float-right">
                                <!-- <a href="edit.php?id=<?php echo $single_customer_details['id']; ?>">
                                <button type="submit" name="UPDATE" class="btn btn-danger">UPDATE</button></a> -->
                                <!-- <button class="btn btn-success btn-block" id="SAVE" name="SAVE" type="submit">SUBMIT</button> -->
                                    <a href="edit.php?id=<?php echo $single_customer_details['id']; ?>">
       <button type="submit"  name="UPDATE" class="btn btn-sm btn-success customerViewModel" name="view">
                      UPDATE
                      </button></a>

                            </div></div>
                        </div>
                </form>

  <?php } ?>


  <?php
  include_once "edit2.php";
  include "../layout2.php";?>





