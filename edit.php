<?php
    require_once("connection.php");
    if(isset($_POST["submit"])){
        $title=$_POST["title"];
        $content=$_POST["content"];
        $pub=$_GET["id"];
        $sql="update publication set title='$title', content='$content' where id_P = '$pub'";
        $prepare=$db->prepare($sql);
        $prepare->execute();
        $row=$prepare->rowCount();
        if($row>0){
            echo "waaa";
        }else{
            echo "naaa";
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
  <input type="submit" name="submit" value="modifier" class="btn btn-primary btnbtn btnbtn">
</form>
</section>
</body>
</html>