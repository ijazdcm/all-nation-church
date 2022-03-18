  <?php include "../layout1.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reports</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active"> Reports / Report Filter</li>
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
                <h3 class="card-title"> REPORTS FILTER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-1">
                    <div class="card-header">
                        <!-- <h4>How to Filter or Find or Get data (records) between TWO DATES in PHP</h4> -->
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr >
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>ADDRESS</th>
                                    <th>PHONE</th>
                                    <th>ZONE</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                               include_once "../connection1.php";

                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];



                                    $query = "select * from believer WHERE DATE BETWEEN '$from_date' AND '$to_date' ";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                          if($row["BELIEVER"]=="New Comer"){
                                            ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['NAME']; ?></td>
                                                <td><?= $row['ADDRESS']; ?></td>
                                                <td><?= $row['PHONE']; ?></td>
                                                <td><?= $row['ZONE']; ?></td>
                                            </tr>
                                  <?php          }else{ ?>

<tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['NAME']; ?>&nbsp; <img src="../img/blue.png" style="height:15px; width:15px;" /></td>
                                                <td><?= $row['ADDRESS']; ?></td>
                                                <td><?= $row['PHONE']; ?></td>
                                                <td><?= $row['ZONE']; ?></td>
                                            </tr>


                                <?php  }


                                        }
                                    }
                                    else
                                    {
                                        echo " <tr>
                                 <td colspan='5'><b><center>...No Order Found...</center></b></td>
                                            </tr>";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

  <?php include "../layout2.php";?>
