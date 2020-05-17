<?php
    require_once("connection.php");
    $sql=("select * from publication");
    $publications=$db->query($sql);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <section class="ez">
    <?php include("./nav-footer/nav.php"); ?>
    
<div class="row">
    <?php
    foreach($publications as $p){
?>
    <div class="col-sm-6">
        <div class="card carte"  >
        <div class="card-body" >
            <h5 class="card-title"><?php echo $p["title"] ?></h5>
            <p class="card-text cart-text"><?php echo $p["content"] ?></p>
            <a href="single-blog.php?id_B=<?php echo $p["id_P"] ?>" class="card-link">Lire la suite</a>
        </div>
        </div>
    </div>
    <?php } ?>
</div>
</section>
</body>
</html>