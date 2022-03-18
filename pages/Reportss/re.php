<?php

include_once "../connection.php";

$start_date_error = '';
$end_date_error = '';

if (isset($_POST["export"])) {
  if (empty($_POST["start_date"])) {
    $start_date_error = '<label class="text-danger">Start Date is required</label>';
  } else if (empty($_POST["end_date"])) {
    $end_date_error = '<label class="text-danger">End Date is required</label>';
  } else {
    $file_name = 'Report.csv';
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Type: application/csv;");

    $file = fopen('php://output', 'w');

    $header = array("ID", "NAME", "ADDRESS", "PHONE", "ZONE", "NEW COMER/CHURCH MEMBER");

    fputcsv($file, $header);

    $query = "
  select * from believer
  WHERE DATE >= '" . $_POST["start_date"] . "'
  AND DATE <= '" . $_POST["end_date"] . "'
  ORDER BY NAME ASC
  ";
    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach ($result as $row) {

      $data = array();
      $data[] = $row["id"];
      $data[] = $row["NAME"];
      $data[] = $row["ADDRESS"];
      $data[] = $row["PHONE"];
      $data[] = $row["ZONE"];
      $data[] = $row["BELIEVER"];
      fputcsv($file, $data);
    }
  }
  fclose($file);
  exit;
}


$query = "
select * from believer
ORDER BY NAME ASC;
";

$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>

<html>

<head>
  <title>Download Report</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
    a {
      color: white;
      text-decoration: none;
    }

    a:hover {
      color: white;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container box">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2"><BR><br>
            <div class="col-sm-12">
              <CENTER><I>
                  <h3><B><U>REPORTS FILTER DOWNLOAD </U></B> </h3>
                </I></CENTER>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section><BR><br>
      <CENTER><a href="MainDashboard.php?status="><BUTTON class="btn btn-warning">BACK</a></BUTTON> </CENTER><br>
      <!-- <CENTER><BUTTON class="btn btn-block btn-secondary"></a></BUTTON>  </CENTER> -->


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title"> </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <br />
                  <div class="">
                    <br />
                    <div class="row">
                      <center>
                        <form method="post">
                          <div class="input-daterange">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">
                              <label>FROM</label>
                              <input type="text" name="start_date" class="form-control" readonly />
                              <?php echo $start_date_error; ?>
                            </div>
                            <div class="col-md-3">
                              <label>TO</label>
                              <input type="text" name="end_date" class="form-control" readonly />
                              <?php echo $end_date_error; ?>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <label>CLICK TO DOWNLOAD</label>
                            <input type="submit" name="export" value="Export" class="btn btn-danger" />
                          </div>
                        </form>
                      </center>
                    </div>
                    <br />
                    <!-- <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th> ID</th>
       <th> Name</th>
       <th>Adress</th>
       <th>Phone</th>
       <th>Zone</th>
      </tr>
     </thead>
     <tbody> -->
                    <?php
                    // foreach($result as $row)
                    // {
                    //  echo '
                    //  <tr>
                    //   <td>'.$row["id"].'</td>
                    //   <td>'.$row["NAME"].'</td>
                    //   <td>'.$row["ADDRESS"].'</td>
                    //   <td>$'.$row["PHONE"].'</td>
                    //   <td>'.$row["ZONE"].'</td>
                    //  </tr>
                    //  ';
                    // }
                    ?>
                    <!-- </tbody>
    </table> -->
                    <br />
                    <br />
                  </div>
                </div>
</body>

</html>

<script>
  $(document).ready(function() {
    $('.input-daterange').datepicker({
      todayBtn: 'linked',
      format: "yyyy-mm-dd",
      autoclose: true
    });
  });
</script>
