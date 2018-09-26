<?php
$conn= mysqli_connect('localhost','root','','comment');
if (!$conn) {
  die("connection failed".mysqli_connect_error());
}




function setComments($conn){
      if(isset($_POST['commentSubmit'])){
          $uid=$_POST['uid'];
          $date=$_POST['date'];
          $message=$_POST['message'];

          $sql = "INSERT INTO comment (uid, date, message) VALUES ('$uid', '$date', '$message')";
          $result = mysqli_query($conn,$sql);


      }
}

function getComments($conn){
  $sql = "SELECT * FROM comment";
  $result = mysqli_query($conn,$sql);
  while($row = $result->fetch_assoc()){
    echo"<div class='comment-box'>";
    echo $row['uid']."<br>";
    echo $row['date']."<br>";
      echo nl2br($row['message']);
      echo "</div>";
  }

}



 ?>
