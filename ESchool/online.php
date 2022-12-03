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
    <title> ELumbini Daily Online Teaching Form</title>
    <style>
        .hr1{background: linear-gradient(to right, red,green,yellow); height:5px};
    </style>
</head>
<body>
    <div class="container">
   <form class= "form-horizontal" method="POST" id="myform" action="">
       <br>
    
       
       <h5 class="text-center"><b>Lumbini College Colombo 05</b></h5> 
     <h4 class="text-center">Daily Online Data Form</h4>
     <h5 class="text-center">Complete this form each day after the online session</h5>
     <div class="hr1"></div>
     <div class="form-group"></div>
         <div class="form-group"></div>
          <div class="form-group"></div>
        <!--Date--> 
        
        <div class="form-group">
            <div class="container">
            <p>Notice:
            <br> Date: Date of teaching online <br> Reg. No.: School Registration Number </p> 
        <table class="table">
            <thead class="thead-light">
                <th>Date</th>
                <th>Reg. No.</th>
                <th>Name of the Teacher</th>
            </thead>
            <tbody>
                <tr>
                    <td><input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" /></td>
                    <td> <input type="text" class="form-control" id="regno" name="regno" ></td>
                    <td><input type="text" class="form-control" id="name" name="name" required></td>
                </tr>
            </tbody>
        </table>
       </div></div>
 
  <hr>
  <h5 class="text-center"><b><u> During School learning Time (7.30am-1.30pm)</u></b></h5> <br>
  <div class="container">
  <div class="form-group">
     <p> Notice : Use the following guidelines to fill <br> Subject : PTS (Use the name as in the timetable) <br> Grade : 7A,B,C <br> Time : (Select the time with AM or PM)<br>Attendance: Enter the number of students in the online classroom</p>
          <table class="table">
          <thead class="thead-light">
              <tr>
                  <th class="col-sm-4">Subject</th>
                  <th class="col-sm-3">Grade</th>
                  <th class="col-sm-3">Time</th>
                 
              </tr>
                </thead>
               <tbody>
                <tr>
                <td><input class="form-control" type="text" id="sub1" name="sub1" ></td>
                <td> <input class="form-control" type="text" id="grade1" name="grade1" ></td>
                <td><input class="form-control" type="time" value="07:30:00" id="time1" name="time1"></td>
              
                </tr>
              <tr>
                <td><input class="form-control" type="text" id="sub2" name="sub2" ></td>
                <td> <input class="form-control" type="text" id="grade2" name="grade2" ></td>
                <td><input class="form-control" type="time" value="07:30:00" id="time2" name="time2"></td>
              
                </tr>
                 <tr>
                <td><input class="form-control" type="text" id="sub3" name="sub3" ></td>
                <td> <input class="form-control" type="text" id="grade3" name="grade3" ></td>
                <td><input class="form-control" type="time" value="07:30:00" id="time3" name="time3"></td>
              
                </tr>
                 <tr>
                <td><input class="form-control" type="text" id="sub4" name="sub4" ></td>
                <td> <input class="form-control" type="text" id="grade4" name="grade4" ></td>
                <td><input class="form-control" type="time" value="07:30:00" id="time4" name="time4"></td>
              
                </tr>
                 <tr>
                <td><input class="form-control" type="text" id="sub5" name="sub5" ></td>
                <td> <input class="form-control" type="text" id="grade5" name="grade5" ></td>
                <td><input class="form-control" type="time" value="07:30:00" id="time5" name="time5"></td>
              
                </tr>
                 <tr>
                <td><input class="form-control" type="text" id="sub6" name="sub6" ></td>
                <td> <input class="form-control" type="text" id="grade6" name="grade6" ></td>
                <td><input class="form-control" type="time" value="07:30:00" id="time6" name="time6"></td>
              
                </tr>
                 <tr>
                <td><input class="form-control" type="text" id="sub7" name="sub7" ></td>
                <td> <input class="form-control" type="text" id="grade7" name="grade7" ></td>
                <td><input class="form-control" type="time" value="07:30:00" id="time7" name="time7"></td>
              
                </tr>
                
            </tbody>  
        
      </table>
      </div></div>
       <hr>
  <h5 class="text-center"><b><u> During Online learning Time (School Time/after 5pm) </u></b></h5> <br>
  <div class="container">
  <div class="form-group">
      <table class="table">
          <thead class="thead-light">
              <tr>
                  <th scope="col">Subject</th>
                  <th scope="col">Grade</th>
                  <th scope="col">Time</th>
                  <th scope="col">Attendance</th>
              </tr>
              </thead>
              
            <tbody>
                <tr>
               
                <td> <input class="form-control" type="text" id="subon1" name="subon1" ></td>
                 <td> <input class="form-control" type="text" id="gradeon1" name="gradeon1" ></td>
                <td><input class="form-control" type="time" value="17:00:00" id="timeon1" name="timeon1"></td>
                <td><input class="form-control" type="number" id="attendanceon1" name="attendanceon1" ></td>
                </tr>
                <tr>
                   
                    <td> <input class="form-control" type="text" id="subon2" name="subon2" ></td>
                    <td> <input class="form-control" type="text" id="gradeon2" name="gradeon2" ></td>
                <td><input class="form-control" type="time" value="17:00:00" id="timeon2" name="timeon2"></td>
                <td><input class="form-control" type="number" id="attendanceon2" name="attendanceon2" ></td>
                </tr>
                <tr>
                   
                    <td> <input class="form-control" type="text" id="subon3" name="subon3" ></td>
                    <td> <input class="form-control" type="text" id="gradeon3" name="gradeon3" ></td>
                <td><input class="form-control" type="time" value="17:00:00" id="timeon3" name="timeon3"></td>
                <td><input class="form-control" type="number" id="attendanceon3" name="attendanceon3" ></td>
                </tr> 
                <tr>
                   
                    <td> <input class="form-control" type="text" id="subon4" name="subon4" ></td>
                    <td> <input class="form-control" type="text" id="gradeon4" name="gradeon4" ></td>
                <td><input class="form-control" type="time" value="17:00:00" id="timeon4" name="timeon4"></td>
                <td><input class="form-control" type="number" id="attendanceon4" name="attendanceon4" ></td>
                </tr> 
                <tr>
                   
                    <td> <input class="form-control" type="text" id="subon5" name="subon5" ></td>
                    <td> <input class="form-control" type="text" id="gradeon5" name="gradeon5" ></td>
                <td><input class="form-control" type="time" value="17:00:00" id="timeon5" name="timeon5"></td>
                <td><input class="form-control" type="number" id="attendanceon5" name="attendanceon5" ></td>
                </tr> 
            </tbody>  
         
      </table>
</div>
  <br>
  <br>
  <button type="reset" name = "reset" value="Clear" class="btn btn-primary btn-sm" > Reset </button>
    <button type="submit" name = "submit" class="btn btn-success btn-sm">Submit</button>
<br><br><br><br>
    </form>
    </div></div>
    <?php
if(isset($_POST['submit'])){
 
  $db = mysqli_connect('localhost','lumbinis_sharangika','GRSPerera@86','lumbinis_studentlumbini')
 or die('Error connecting to MySQL server.');
 
 $date = $_POST['date'];
 $name = $_POST['name'];
 $regno = $_POST['regno'];
 $sub1 = $_POST['sub1'];
 $grade1 = $_POST['grade1'];
 $time1 = $_POST['time1'];
 $sub2 = $_POST['sub2'];
 $grade2 = $_POST['grade2'];
 $time2 = $_POST['time2'];
 $sub3 = $_POST['sub3'];
 $grade3 = $_POST['grade3'];
 $time3 = $_POST['time3'];
 $sub4 = $_POST['sub4'];
 $grade4 = $_POST['grade4'];
 $time4 = $_POST['time4'];
 $sub5 = $_POST['sub5'];
 $grade5 = $_POST['grade5'];
 $time5 = $_POST['time5'];
 $sub6 = $_POST['sub6'];
 $grade6 = $_POST['grade6'];
 $time6 = $_POST['time6'];
 $sub7 = $_POST['sub7'];
 $grade7 = $_POST['grade7'];
 $time7 = $_POST['time7'];
 $subon1 = $_POST['subon1'];
 $gradeon1 = $_POST['gradeon1'];
 $timeon1 = $_POST['timeon1'];
 $attendanceon1 = $_POST['attendanceon1'];
 $subon2 = $_POST['subon2'];
 $gradeon2 = $_POST['gradeon2'];
 $timeon2 = $_POST['timeon2'];
 $attendanceon2 = $_POST['attendanceon2'];
 $subon3 = $_POST['subon3'];
 $gradeon3 = $_POST['gradeon3'];
 $timeon3 = $_POST['timeon3'];
 $attendanceon3 = $_POST['attendanceon3'];
 $gradeon4 = $_POST['gradeon4'];
 $timeon4 = $_POST['timeon4'];
 $attendanceon4 = $_POST['attendanceon4'];
 $gradeon5 = $_POST['gradeon5'];
 $timeon5 = $_POST['timeon5'];
 $attendanceon5 = $_POST['attendanceon5'];
 
 $sql="INSERT INTO onlineteacher(date,regno,name,sub1,grade1,time1,sub2,grade2,time2,sub3,grade3,time3,sub4,grade4,time4,sub5,grade5,time5,sub6,grade6,time6,sub7,grade7,time7,subon1,gradeon1,timeon1,attendanceon1,subon2,gradeon2,timeon2,attendanceon2,subon3,gradeon3,timeon3,attendanceon3,subon4,gradeon4,timeon4,attendanceon4,subon5,gradeon5,timeon5,attendanceon5) 
 VALUES('$date','$regno','$name','$sub1','$grade1','$time1','$sub2','$grade2','$time2','$sub3','$grade3','$time3','$sub4','$grade4','$time4','$sub5','$grade5','$time5','$sub6','$grade6','$time6','$sub7','$grade7','$time7','$subon1','$gradeon1','$timeon1','$attendanceon1','$subon2','$gradeon2','$timeon2','$attendanceon2','$subon3','$gradeon3','$timeon3','$attendanceon3','$subon4','$gradeon4','$timeon4','$attendanceon4','$subon5','$gradeon5','$timeon5','$attendanceon5')";
 
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