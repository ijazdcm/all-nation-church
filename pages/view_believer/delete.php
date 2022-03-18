<?php

 include_once "../connection1.php";

	error_reporting(0);
 if(isset($_GET["id"]))
{
    $ID=$_GET['id'];

    $query="DELETE from believer WHERE ID='$ID' ";
    $data=mysqli_query($conn,$query);

    if($data)
    {

        echo "<script> alert('Believer Record deleted Successfully') </script>";
        echo ("<script>window.location.href = '/church/pages/viewBelieversCrud/index.php' </script>");
    }
    else
    {
        echo "<script>alert(' Failed to delete the Believer Record ')</script>";
    }
}
?>
