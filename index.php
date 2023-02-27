<!DOCTYPE html>
<html lang="en">
  <!-- Tut==> https://youtu.be/ExW0bYNMTlo 17: 52-->

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
              <th class="text-center" >Phone</th>
              <th class="text-center">Course</th>
              <th col='2' class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td class="text-center">1</td>
              <td class="text-center">1</td>
              <td class="text-center">1</td>
              <td class="text-center">
                <a class="btn btn-info" href="view.php">View</a> 
                <a class="btn btn-warning" href="delete.php">Update</a>
                <a class="btn btn-danger" href="delete.php">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
        </div>


      </div>
    </div>
  </div>

</div>
  
</body>
</html>