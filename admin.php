<?php

include 'conn.php';

$sql = " SELECT * FROM emp_data ";

$query = mysqli_query($con, $sql);

$nums = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html>
<head>
  <title> Admin Panel</title>

<style>
.header {
padding: 50px;
font-size: 50px;
text-align: center;
background: black;
background-image: url('images/12.jpg');
background-repeat: no-repeat;
background-size: cover;
border:5px solid black;
}
</style>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" href="css/index.css">

</head>
<body>

  <div class="header">
  <h1>ADMIN PANEL</h1>
</div>

<div class="list">
<ul><br>
 <center>  <a href="insertemployee.php" class="col-lg-3"><button class="btn btn-success col-lg-3">Add</button></a> 
        <a href="logout.php" class="col-lg-3"><button class="btn btn-success col-lg-3" name="logout">Logout</button></a>
  </center>
  <br>
</ul>
</div>



<div class="container">
  <br><br>
  <div class="col-lg-12"><br>
    <div class="row">
    <h2 class="col-lg-6">Displaying Records</h2>
        
    </div><br>
    <table class="table table-stripped table-hover table-bordered" style="border: 10px;">
      <tr class="text-dark">
        <th><h5>ID</h5></th>
        <th><h5>Name</h5></th>
        <th><h5>Birth Date</h5></th>
        <th><h5>Mobile</h5></th>
        <th><h5>Address</h5></th>
        <th><h5>Salary</h5></th>
        <th><h5>Qualification</h5></th>
        <th><h5>Job Profile</h5></th>
        <th><h5>Date of Join</h5></th>
        <th><h5>View</h5></th>
      </tr>

      
      <?php

while ($res = mysqli_fetch_array($query)) {
?>
<center>
      <tr>
        <th width="5%"><?php echo $res['emp_id'] ?></th>
        <th width="14%"><?php echo $res['emp_name'] ?></th>
        <th width="16%" ><?php echo $res['emp_birthdate'] ?></th>
        <th><?php echo $res['emp_mobile'] ?></th>
        <th width="12%" ><?php echo $res['emp_address'] ?></th>
        <th><?php echo $res['emp_salary'] ?></th>
        <th><?php echo $res['emp_qualification'] ?></th>
        <th width="12%" ><?php echo $res['emp_job'] ?></th>
        <th width="15%" ><?php echo $res['emp_joindate'] ?></th>
        <th><a  href="update.php?id=<?php echo $res['emp_id']; ?>" class="text-white"><button class="btn btn-success">View</button></a></th>
      </tr>
    </center>
<?php }
?>

    </table>
  </div>
</div>
</body>
</html>