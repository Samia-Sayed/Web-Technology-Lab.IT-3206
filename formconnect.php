<?php
session_start();
$con = mysqli_connect("localhost","root","","register");

if(isset($_POST['save_date']))
{
    $dname = $_POST['dname'];
    $demail = $_POST['demail'];
    $dnumber = $_POST['dnumber'];
    $daddress = $_POST['daddress'];
    $mname = $_POST['mname'];
    $mexpdate = date('Y-m-d', strtotime($_POST['mexpdate']));
    $mamount = $_POST['mamount'];
    //$dob = date('Y-m-d', strtotime($_POST['dateofbirth']));

    $query = "INSERT INTO donation (dname,	demail,	dnumber,	daddress,	mname,	mexpdate,	mamount	
    ) VALUES ('$dname',	'$demail',	'$dnumber',	'$daddress',	'$mname',	'$mexpdate',	'$mamount')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Inserted";
        header("Location: form.php");
    }
    else
    {
        $_SESSION['status'] = "Data Inserting Failed";
        header("Location: form.php");
    }
}
?>