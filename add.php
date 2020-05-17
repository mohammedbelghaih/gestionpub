<?php
    require_once("connection.php");
    $insertP="insert into publication(title,content,id_u) values(:title, :content, :id_u)";
    if(isset($_POST["submit"])){
        $prepare=$db->prepare($insertP);
        $execute=$prepare->execute([":title"=>$_POST["title"],":content"=>$_POST["content"],":id_u"=>$_SESSION["id"]]);
        if($execute){
            echo "weeee";
        }else{
            echo "noooo";
        }
    }
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
    <?php include("./nav-footer/nav.php") ?>
<form method="POST" class="add-edit">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="label1">Titre</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Titre de publication">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="label1">Publication</label>
    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input type="submit" name="submit" value="publier" class="btn btn-primary btnbtn">
</form>
</section>
</body>
</html>