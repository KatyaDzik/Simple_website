<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>News</title>
</head>
<body style="font-family: var(--bs-body-font-family);">
    <?php include 'header.php'; ?>
    <?php require "config/db.php" ?>

    <div class="mt-5 container blogs" >
      <?php 
      $pid = (int) $_GET['id'];
      $query="SELECT id, title, text, section, create_date, img_path FROM articles WHERE id='$pid'";
      $articles = mysqli_query($connection, $query);
      ?>

      <?php 
      while($art = mysqli_fetch_assoc($articles))
      {
       ?>
        <div style="position:relative;">
        <img style="position:relative; top: 0; filter: brightness(.6);" src="img/<?php echo $art['img_path'];?>" style="object-fit:cover;"  width="100%" height="100%" alt="">
        <h1 style="position:absolute;
         top:50%;
         transform: translate(0, -50%); 
         left: 10px; 
         color:#e5e5e5"}><?php echo $art['title']?></h1>
        </div>
        <p style="font-size:20px; margin:20px 0 100px 0"><?php echo nl2br($art['text'])?></p>
    
       <?php 
       }
       ?>
      
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>