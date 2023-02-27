<?php 
session_start();
?>





<!doctype html>
<html lang="en">
<?php include 'head.php' ?>

  <body>
  <div class="container mt-5">

  <!-- Alert Message -->

 <?php include('alert_message.php'); ?>
  <!-- Alert End -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Add <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
          </div>

          <div class="card-body">
            <form action="./add_code.php" method="POST">
              <div class="mb-3">
                <label>Student Name</label>
                <input type="text" name="student_name" class="form-control" required />
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="student_email" class="form-control" required />
              </div>
              <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required />
              </div>
              <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course" class="form-control" required />
              </div>
              <div class="mb-3">
                <input type="submit" name="save_student" class="btn btn-primary" value="Save Student" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>


  
  </body>
</html>