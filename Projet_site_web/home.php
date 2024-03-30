<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div>
                            <ul>
                                  
                         <li  class="nav-item"><a href="acceuil.php" class="nav-link">Accueil</a></li>
                         <li class="nav-item"><a href="login.php" class="nav-link">Se connecter</a></li>
					<li class="nav-item"><a href="signup.php" class="nav-link">S'inscrire</a></li>
                                
                                    
                                
                            </ul>  
                        
                            
                        </div>
     <h1 class="h1">Nous vous contacterons dans votre email : <br>  <?php echo $_SESSION['name']; ?></h1>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>