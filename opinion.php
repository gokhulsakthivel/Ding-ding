<?php
      date_default_timezone_set('asia/kolkata');
      include 'comment.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/opinion.css">
    <link rel="icon" href="img/Ding-ding.png" sizes="16x16" type="image/png">
  	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:600|Roboto" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Varela+Round" rel="stylesheet">
    <title>Opinions</title>
    <style media="screen">

    </style>
  </head>
  <body>
      <section class="header">
        <h1><a href="index.php" style="text-decoration: none;
    color: white;">Ding ding</a></h1>
        <h3>Comments</h3>
      </section>
      <section class="form">
        <?php
        echo "<form method='POST' action='".setComments($conn)."'>
          <input type='hidden' name='uid' value='anonymous'>
          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
          Comment below <br><br>
          <textarea name='message'placeholder='Enter text here'></textarea><br><br>
          <button type='submit' name='commentSubmit' >Comment</button>
        </form>";

        getComments($conn);
        ?>
      </section>



  </body>
</html>
