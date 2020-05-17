<?php
    require_once("connection.php");
    $user=$_SESSION["id"];
    $query="select * from publication where id_u = '$user' ";
    $publication=$db->query($query);
    
    

    
    
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
    <?php 
    include("./nav-footer/nav.php");
    foreach($publication as $t){ 
    ?>
    
        <form method="POST">
            <div class="card" style="width: 80%; margin-left: 10%; margin-top: 2%;">
                <div class="card-body" style="margin-top: 2%;">
                <h5 class="card-title"><?php echo $t["title"]; ?></h5>
                <p class="card-text" id="content"><?php echo $t["content"]; ?></p>
                <a href="edit.php?id=<?php echo $t["id_P"] ?>" class="edit-delete" id="edit">modifier</a>
                <a href="delete.php?id_d=<?php echo $t["id_P"] ?>" class="edit-delete" id="delete">supprimer</a>
                </div>
            </div>
        </form>
        <?php } ?>
    </section>
</body>
</html>