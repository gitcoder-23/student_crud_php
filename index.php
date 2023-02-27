<?php
require 'dbcon.php';
?>






<!DOCTYPE html>
<html lang="en">
  <!-- Tut==> https://youtu.be/ExW0bYNMTlo 21: 38-->

<?php include 'head.php' ?>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">

        <div class="card-header">
          <h4>Student List <a href="student_create.php" class="btn btn-primary float-end" >Add Student</a></h4>
        </div>

        <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="text-center">Sl.No</th>
              <th class="text-center">Student Name</th>
              <th class="text-center" >Email</th>
              <th class="text-center" >Phone</th>
              <th class="text-center">Course</th>
              <th col='2' class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM `student`";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0 ) {
                foreach($query_run as $studentData) {
                  // echo $studentData['student_name'];

                  ?>
                  <tr>
                    <td class="text-center">
                      <?=$studentData['id'] ?>
                    </td>
                    <td class="text-center">
                      <?=$studentData['student_name'] ?>
                    </td>
                    <td class="text-center">
                      <?=$studentData['student_email'] ?>
                    </td>
                    <td class="text-center">
                      <?=$studentData['phone'] ?>
                    </td>

                    <td class="text-center">
                      <?=$studentData['course'] ?>
                    </td>
                    <td class="text-center">
                      <a class="btn btn-info" href="view.php">View</a> 
                      <a class="btn btn-warning" href="delete.php">Update</a>
                      <a class="btn btn-danger" href="delete.php">Delete</a>
                    </td>
                  </tr>
                  <?php


       
                }

              } else {
                echo `<h4 class="text-center">No Record Found!</h4>`;
              }
            ?>
          </tbody>
        </table>
        </div>


      </div>
    </div>
  </div>

</div>
  
</body>
</html>