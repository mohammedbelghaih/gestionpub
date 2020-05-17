<?php 
    require_once("connection.php");
    $username ="";
    $email ="";
    $pass ="";
    $insert = "insert into utilisateur(username,email,pass) values(:username,:email,:password)";
    if(isset($_POST["submit"])){
        if(empty($_POST["username"])){
            $username = "user";
        }else if(empty($_POST["email"])){
            $email ="email";
        }else{
            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                $email="is not an email";
            }
        }if(empty($_POST["password"])){
            $pass = "password";
        }else{
            try{
            $prepare=$db->prepare($insert);
            $execute=$prepare->execute([":username"=>$_POST["username"],":email"=>$_POST["email"],":password"=>$_POST["password"]]);
            if($execute){
                echo "wowowowowowowowo";
                header("location:login.php");
            }else{
                echo "wiiiiii3";
            }
        }catch(PDOException $er){
            echo $er.getMessage();
        }
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
<section class="insc">
<div class="fr">   
       <form method="POST" action="inscription.php" class="container">
        <div class="form-group">
            <label for="formGroupExampleInput" class="label">username</label>
            <span><?php echo $username ?></span>
            <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" class="label">Email</label>
          <span><?php echo $email ?></span>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="label">mot de passe</label>
          <span><?php echo $pass ?></span>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="mot se passe">
        </div>
        <center>
        <button type="submit" name="submit" class="btn btn-primary bt">S'inscrir</button>
        </center>  
    </form> 
      </div>
      </section>

</body>

</html>