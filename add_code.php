<?php 
session_start();
require 'dbcon.php';

if(isset($_POST['save_student'])) 
{
  $student_name = mysqli_real_escape_string($con, $_POST['student_name']);
  $email = mysqli_real_escape_string($con, $_POST['student_email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $course = mysqli_real_escape_string($con, $_POST['course']);

  $query = "INSERT INTO student (student_name, email, phone, course) VALUES ('$student_name', '$email', '$phone', '$course')";
  // echo($query);
  $query_run = mysqli_query($con, $query);
  // echo($query_run);

  if($query_run) {

    // for print start
    // $data = mysql_fetch_assoc($query_run);
    // echo $data[0];
    // for print end
    $_SESSION['message'] = "Student Created Success!!";
    header("Location: student_create.php");
    exit(0);
  } else {
    $_SESSION['message'] = "Student Not Created!";
    header("Location: student_create.php");
    exit(0);
  }
}

?>