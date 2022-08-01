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
<body>
<?php include "header.php"?>
    <?php require "config/db.php" ?>
      <div class="mt-5 container blogs">
      <div class="d-flex flex-wrap">

      <?php 
      $psection =  $_GET['section'];
      $query="SELECT id, title, text, section, create_date, img_path FROM articles WHERE section='$psection'";
      $articles = mysqli_query($connection, $query);
      ?>

      <?php 
      while($art = mysqli_fetch_assoc($articles))
      {
       ?>
       <div class="card col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $art['section']; ?></strong>
                <h3 class="mb-0"><?php echo $art['title']; ?></h3>
                <div class="mb-1 text-muted"><?php echo $art['create_date']; ?></div>
                <p class="card-text mb-auto"><?php echo mb_substr($art['text'], 0, 80, 'utf-8').'...';  ?></p>
                <a href="article.php?id=<?php echo $art['id'] ?>" class="stretched-link">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <!--<img class="bd-placeholder-img" src="img"<?php echo $art['img'];?> width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>--> 
                <img src="img/<?php echo $art['img_path'];?>" style="object-fit:cover;"  width="200" height="250" alt="">
        </img>
      
              </div>
            </div>
          </div>
       <?php 
       }
       ?>
      </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>