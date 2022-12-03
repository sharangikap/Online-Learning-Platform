<?php
$con=new mysqli('localhost','lumbinis_sharangika','GRSPerera@86','lumbinis_studentlumbini');
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}

if( isset($_POST['search']) ){
    $date = mysqli_real_escape_string($con, htmlspecialchars($_POST['date']));
    $sql = "SELECT * FROM zsupform WHERE date ='$date'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Supervision Report</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<br>
<h3 class="text-center">Lumbini College Colombo 05</h3>
<hr>
<div style="text-align:center"> 
<form action="" method="POST">
    <div class="form-group">
        <label for="date" class="control-label col-sm-3">Date of supervision:</label>
        <div class="col-sm-3">
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" /></div>
        <div class="col-sm-3">
            <div class="col-sm-1">&nbsp;</div>
      <input type="submit" value="Search" name="search" class="btn btn-sm btn-primary">
    </div>
   </div>
</form>
</div>
<br><br>
<h2 class="text-center">Zoom Supervision Report</h2>
<table class="table table-striped table-responsive center">
<tr>
<th>Name</th>
<th>Time</th>
<th>Grade</th>
<th>Teacher</th>
<th>Subject</th>
<th>Attendance</th>
<th>Instructions</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td><?php echo $row['grade']; ?></td>
    <td><?php echo $row['teacher']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td><?php echo $row['attendance']; ?></td>
    <td><?php echo $row['instructions']; ?></td>
    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>