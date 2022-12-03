
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
     <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">  </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <link href="css/layout.css" rel="stylesheet" type="text/css"/>
    <title> ELumbini Admin Supervision</title>
    <style>
        .hr1{background: linear-gradient(to right, red,green,yellow); height:5px};
    </style>
</head>
<body>
    <div class="container">
   <form class= "form-horizontal" method="POST" id="myform" action="">
       <br>
    
       
       <h5 class="text-center"><b>Lumbini College Colombo 05</b></h5> 
     <h4 class="text-center">Completion of Zoom Supervision Form</h4>
     <h5 class="text-center">Complete this form during every supervision session</h5>
     <div class="hr1"></div>
     <div class="form-group"></div>
         <div class="form-group"></div>
          <div class="form-group"></div>
        <!--Date--> 
        <div class="form-group"> 
        
        <label for="date" class="control-label col-sm-2">Date of supervision:</label>
        <div class = "col-sm-1">&nbsp;</div>
        <div class="col-sm-2">
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" />
      </div>
      <div class = "col-sm-1">&nbsp;</div>
        <!--Name-->
    
        <label for="name" class="control-label col-sm-2">Name:</label> 
    
        <div class = "col-sm-1">&nbsp;</div>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="name" name="name"  required>
    </div>
  </div>
  <hr>
  <h5 class="text-center"><b><u>Supervision Class Details</u></b></h5> <br>
  <div class="form-group">
      <label for="time" class="control-label col-sm-2">Time:(06:00 PM)</label>
       
       <div class="col-sm-2">
       <input class="form-control" type="time" value="16:00:00" id="time" name="time" required>
       </div>
       <label for="grade" class="control-label col-sm-2">Grade:</label>
       <div class="col-sm-2">
           <input class="form-control" type="text" id="grade" name="grade" required>
       </div>
       <label for="attendance" class="control-label col-sm-2">No. of Attendance</label>
       <div class="col-sm-1">
           <input class="form-control" type="number" id="attendance" name="attendance" required>
       </div>
  </div>
  <div class="form-group">
      <label for="subject" class="control-label col-sm-2">Subject/Unit:</label>
      <div class="col-sm-2">
          <input class="form-control" type="text" id="subject" name="subject" required>
      </div>
      <label for="teacher" class="control-label col-sm-2">Suject Teacher:</label>
      <div class="col-sm-4">
          <input class="form-control" type="text" id="teacher" name="teacher" required>
      </div>
  </div>
  <div class="form-group">
      <label for="instructions" class="control-label col-sm-3">Strength and areas of growth:</label>
      <div class="col-sm-9">
      <textarea class="form-control" id="instructions" rows="3" name="instructions"></textarea>
      </div>
  </div>
  <br>
  <br>
  <button type="reset" name = "reset" value="Clear" class="btn btn-primary btn-sm" > Reset </button>
    <button type="submit" name = "submit" class="btn btn-success btn-sm">Submit</button>
<br><br><br><br>
    </form>
    </div>
    <?php
if(isset($_POST['submit'])){
 
  $db = mysqli_connect('localhost','lumbinis_sharangika','GRSPerera@86','lumbinis_studentlumbini')
 or die('Error connecting to MySQL server.');
 
 $date = $_POST['date'];
 $name = $_POST['name'];
 $time = $_POST['time'];
 $grade = $_POST['grade'];
 $attendance = $_POST['attendance'];
 $subject = $_POST['subject'];
 $teacher = $_POST['teacher'];
 $instructions = $_POST['instructions'];
 
 $sql="INSERT INTO zsupform(date,name,time,grade,attendance,subject,teacher,instructions) VALUES('$date','$name','$time','$grade','$attendance','$subject','$teacher','$instructions')";
 
if(mysqli_query($db, $sql)){
    echo "<br> <br> <br>"; 
  ?> 
  <script language="javascript">
    alert("Record inserted successfully");
    document.getElementById('myform').reset();
</script>
<?php
}
else{
       echo "<br> <br> <br>"; 
    echo "ERROR: Could not able to submit. Please try again.   " . mysqli_error($db);
}
     mysqli_close($db);
}

?>

</body>
</html>