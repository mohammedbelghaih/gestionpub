<?php 
    session_start();
    require_once("connection.php");
    try{
    if(isset($_POST["submit"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $select= "select * from utilisateur where username= '$username' and pass= '$password'";
        $prepare=$db->prepare($select);
        $prepare->execute();
        $validate=$prepare->rowCount();
        $query=$db->query($select);
        if($validate>0){
            foreach($query as $user){
                $_SESSION["id"]=$user["id_U"];
            }
            header("location:home.php");
        }else{
            echo "Error";
        }   
    }
}catch(PDOExcption $e){
    echo $e->getMessage();
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
    <section class="cont">
    <div class="frm">
    <form method="POST" class="container">
    <div class="form-group">
        <label for="exampleInputEmail1" class="label">username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
        </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <center>
    <button type="submit" name="submit" class="btn btn-primary btnb">Se connecter</button>
    <div><a href="inscription.php">inscrivez vous!</a></div>
    </center>
    
    </form>
</div>
</section>


</body>
</html>