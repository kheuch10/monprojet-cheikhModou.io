<!DOCTYPE html>
<html>
<head>
	<title>S'INSCRIRE</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div>
                            <ul>
                                <li class="nav-item"><a href="acceuil.php" class="nav-link">Accueil</a></li>
                                <li class="nav-item"><a href="login.php" class="nav-link">Se connecter</a></li>
					       <li class="nav-item"><a href="signup.php" class="nav-link">S'inscrire</a></li>
                                    
                                
                            </ul>  
                        
                            
                        </div>
     <form action="signup-check.php" method="post">
     	<h2>S'INSCRIRE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Prenom Nom</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="name"><br>
          <?php }?>

          <label>@gmail</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>M_passe</label>
     	<input type="password" 
                 name="password" 
                 placeholder="password"><br>

          <label>Conf_M_passe</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="re_password"><br>

     	<button type="submit">S'INSCRIRE</button>
          <a href="index.php" class="ca">Cliquer ici vous avez déjà un compte?</a>
     </form>
</body>
</html>