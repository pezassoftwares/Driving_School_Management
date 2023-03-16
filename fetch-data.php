<?php include 'db.php' ?>
<?php 
    $query ="SELECT firstname,lastname FROM queryrequest";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $student_name= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
<?php 
    $query ="SELECT firstname,lastname FROM instructors";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $instructor_name= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
<?php 
    $query ="SELECT modelname FROM carmodels";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $model_name= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>


