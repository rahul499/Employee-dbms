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

.tablee{
  border: 4px #2b2b2b solid;
width: 80%;
max-width: 2500px;
min-width: 500px;
 border-style:solid; 
 border-collapse:collapse;
}
td, th {
border: 4px #2b2b2b solid;
padding:12px;
}

.text-dark{
  background-color: #fde9d9;
}

#submit {
 background-color: #bbb;
 padding: .5em;
 -moz-border-radius: 5px;
 -webkit-border-radius: 5px;
 border-radius: 6px;
 color: #fff;
 font-family: 'Oswald';
 font-size: 20px;
 text-decoration: none;
 border: none;
}
#submit:hover {
 border: none;
 background: orange;
 box-shadow: 0px 0px 1px #777;
}
</style>

<link rel="stylesheet" href="css/index.css">

</head>
<body>

  <div class="header">
  <h1>ADMIN PANEL</h1>
</div>

<div class="list">
<ul><br>
 <center>  <a href="insertemployee.php" ><button id="submit" style=" width: 250px; margin-right: 80px;">Add</button></a> 
        <a href="login.php" ><button id="submit" name="logout" style=" width: 250px; margin-right: 50px;">Logout</button></a>
  </center>
  <br>
</ul>
</div>



<div class="container">
  <br><br>
  <div class="col-lg-12"><br>
    <div class="row">
  <center><h2 class="col-lg-6" style="font-size: 40px;">Displaying Records</h2></center>  
        
    </div><br>
    <center>
    <table class ="tablee" >
      <tr class="text-dark">
      <b>  <th>ID</th>
        <th>Name</th>
        <th>Birth Date</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Address</th>
        <th>Salary</th>
        <th>Qualification</th>
        <th>Job Profile</th>
        <th>Date of Join</th>
        <th>View</th></b>
      </tr>
   </center>
      
      <?php

while ($res = mysqli_fetch_array($query)) {
?>
<center>
      <tr>
       <h5> <th width="5%"><?php echo $res['emp_id'] ?></th>
        <th width="14%"><?php echo $res['emp_name'] ?></th>
        <th width="16%" ><?php echo $res['emp_birthdate'] ?></th>
        <th><?php echo $res['emp_mobile'] ?></th>
        <th width="16%"><?php echo $res['email'] ?></th>
        <th width="12%" ><?php echo $res['emp_address'] ?></th>
        <th><?php echo $res['emp_salary'] ?></th>
        <th><?php echo $res['emp_qualification'] ?></th>
        <th width="12%" ><?php echo $res['emp_job'] ?></th>
        <th width="15%" ><?php echo $res['emp_joindate'] ?></th>
        <th><a  href="update.php?id=<?php echo $res['emp_id']; ?>" class="text-white"><button id="submit">View</button></a></th></h5>
      </tr>
    </center>
<?php }
?>

    </table>
  </div>
</div>
</body>
</html>
