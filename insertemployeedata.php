<?php
    
    include 'conn.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $qualification = $_POST['qualification'];
    $job = $_POST['job'];
    $joindate = $_POST['joindate'];

 $query = " insert into emp_data (id, name, dob, mobile, address, salary, qualification, job, joindate)
 values ('$id', $name', '$dob', '$mobile', '$address', '$salary', '$qualification', '$job', '$joindate') ";

    mysqli_query($con, $query);

    header('location:insertemployee.php');

?>
