<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enroll_number = $_POST['enroll_number'];
    $date_of_admission = $_POST['date_of_admission'];

    //Database connection
    
    
    $conn = new mysqli('localhost' , 'root', '' ,'e_classe_db');

if ($conn->connect_error) {
  die('Connection failed: '. $conn  ->connect_error);
}else{
  $stmt = $conn ->prepare("INSERT INTO students(name, email, phone, enroll_number, date_of_admission) VALUES(?, ?, ?, ?, ?)");
  $stmt->bind_param("ssiis",$name, $email, $phone, $enroll_number, $date_of_admission );
  $stmt->execute();
  echo "Reg successfully";
  $stmt->close();
  $conn->close();
}
#Delete 
if (isset($_POST['delete'])){
  $id =$_POST['delete'];

  $dQuery ="DELETE FROM students WHERE id =?";
  $stmt = $conn-> prepare($dQuery);
  $stmt->bind_param('i', $id);
  if($stmt->execute()){
    $_SESSION['msg']= "succses";

  }
  $stmt->close();
  $conn->close();
  header("location: student.php");
}



?>