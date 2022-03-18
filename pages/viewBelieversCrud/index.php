<?php include_once "../connection.php";

//  Fetching the Believer table data

$sql = 'SELECT * FROM `believer` ';
$stmt = $conn->prepare($sql);
$stmt->execute();
$believer_view_list_fecthed = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sno = 1;

foreach ($believer_view_list_fecthed
  as $sno => $believer_view_list)
?>


<?php

// Start session
session_start();

// Get session data
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';

// Get status message from session
if (!empty($sessData['status']['msg'])) {
  $statusMsg = $sessData['status']['msg'];
  $statusMsgType = $sessData['status']['type'];
  unset($_SESSION['sessData']['status']);
}

// Load pagination class
require_once 'Pagination.class.php';

// Load and initialize database class
require_once 'DB.class.php';
$db = new DB();

// Page offset and limit
$perPageLimit = 10;
$offset = !empty($_GET['page']) ? (($_GET['page'] - 1) * $perPageLimit) : 0;

// Get search keyword
$searchKeyword = !empty($_GET['sq']) ? $_GET['sq'] : '';
$searchStr = !empty($searchKeyword) ? '?sq=' . $searchKeyword : '';

// Search DB query
$searchArr = '';
if (!empty($searchKeyword)) {
  $searchArr = array(
    'NAME' => $searchKeyword,
    'PHONE' => $searchKeyword,
    'ZONE' => $searchKeyword
  );
}

// Get count of the believer
$con = array(
  'like_or' => $searchArr,
  'return_type' => 'count'
);
$rowCount = $db->getRows('believer', $con);

// Initialize pagination class
$pagConfig = array(
  'baseURL' => 'index.php' . $searchStr,
  'totalRows' => $rowCount,
  'perPage' => $perPageLimit
);
$pagination = new Pagination($pagConfig);

// Get believer from database
$con = array(
  'like_or' => $searchArr,
  'start' => $offset,
  'limit' => $perPageLimit,
  'order_by' => 'NAME ASC',

);
$believer = $db->getRows('believer', $con);

?>

<!-- Display status message -->
<?php if (!empty($statusMsg) && ($statusMsgType == 'success')) { ?>
  <div class="alert alert-success"><?php echo $statusMsg; ?></div>
<?php } elseif (!empty($statusMsg) && ($statusMsgType == 'error')) { ?>
  <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
<?php } ?>

<?php include "../layout1.php"; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>View New Comer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">View New Comer</li>
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
              <h3 class="card-title"> NEW COMER DETAILS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <!-- <div class="container  "> -->
                  <form class="form-inline" method="post" action="../view_believer/generate_pdf.php">
                    <button type="submit" id="pdf" name="generate_pdf" class="btn btn-secondary "><i class="far fa-file-pdf"></i>&nbsp;&nbsp;
                      Generate PDF</button>

                  </form>
                  <br>
                  </fieldset>
                  <!-- </div> -->

                  <form>
                    <div class="input-group">
                      <input type="text" name="sq" class="form-control  me-2" placeholder="Search by keyword..." value="<?php echo $searchKeyword; ?>">
                      <div class="input-group-btn">
                        <button class=" btn btn-outline-secondary" type="submit">
                          <i class="glyphicon glyphicon-search"></i>SEARCH
                        </button>
                      </div>
                    </div>
                  </form>
                </div>

              </nav>


              <div class="row">
                <div class="col-md-3 search-panel">
                  <!-- Search form -->


                  <!-- Add link -->

                  <!-- <span class="justify-content-end pull-right">
            <a href="addEdit.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> New User</a>
        </span> -->
                </div>

                <!-- Data list table -->
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <!-- <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th> -->

                      <th>S.No</th>
                      <!-- <th>B.ID</th> -->
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Relation</th>
                      <th>Zone</th>
                      <th>Request</th>
                      <th>Edit</th>
                      <th>Delete</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    if (!empty($believer)) {
                      $count = 0;
                      foreach ($believer as $user) {
                        if ($user["BELIEVER"] == "New Comer") {
                          $count++;
                    ?>
                          <tr>
                            <td><?php echo $count; ?></td>
                            <!-- <td><?php echo $user['id']; ?></td> -->
                            <td><?php echo $user['NAME']; ?></td>
                            <td><?php echo $user['PHONE']; ?></td>
                            <td><?php echo $user['R_NAME']; ?></td>
                            <td><?php echo $user['ZONE']; ?></td>
                            <td><?php echo $user['PRAYER_REQUEST']; ?></td>
                            <!-- <a href="addEdit.php?id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-edit"></a>
                    <a href="userAction.php?action_type=delete&id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a> -->

                            <td>

                              <?php echo '<a href=pages/view_believer/edit.php?id=' .
                                $user['id'] .
                                '>
          <CENTER><button type="button" class="btn btn-sm btn-warning customerViewModel " name="ID"  id=' .
                                $user['id'] .
                                '>
            EDIT
            </button></a>'; ?>

                            </td>
                            <td>
                            <?php echo ' <a href=pages/view_believer/delete.php?id=' .
                              $user['id'] .
                              '>
            <button type="button" class="btn btn-sm btn-danger"  id=' .
                              $user['id'] .
                              ' >
            DELETE
            </button></a>';
                          } ?>
                            </td>
                          </tr>

                        <?php }
                    } else { ?>
                        <tr>
                          <td colspan="5">No user(s) found......</td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
                <div class="justify-content-end">
                  <!-- Display pagination links -->
                  <?php echo $pagination->createLinks(); ?>
                </div>
              </div>
              <?php include "../layout2.php"; ?>
