<!DOCTYPE html>
<html>
<head>
	<title>SE CONNECTER</title>
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
     <form action="login.php" method="post">
     	<h2>SE CONNECTER</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>@gmail</label>
     	<input type="text" name="uname" placeholder="@gmail"><br>

     	<label>M_passe</label>
     	<input type="password" name="password" placeholder="M_passe"><br>

     	<button type="submit">se connecter</button>
          <a href="signup.php" class="ca">Créer un compte</a>
     </form>
</body>
</html>