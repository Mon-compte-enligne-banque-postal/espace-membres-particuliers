<?php
session_start();

@$user=$_POST["number"];
@$pass=$_POST["pass"];
@$valider=$_POST["submit"];

if(isset($valider)){

 if($user=="123" && $pass=="123"){
 $_SESSION["autoriser"]="oui";
 header("location:Solde.php");
 }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Connexion - Mon compte BNP la banque d'un monde qui change</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
		<link href="https://www.fonts.com/font/yellow-design-studio/veneer-clean" />

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
<link rel="stylesheet" type="text/css" href="Style.css"/>

<script type="text/javascript" src="Java.js"></script>

	</head>
	<body>
	<div class="body">
	<center><img src="https://i.ibb.co/dtTDxJH/6254794-E-E1-E9-4574-A671-6342-F53-F0987-removebg-preview.png"/></center>
<center>

<form method="post" action="">

<label>Votre identifiant</label><br />
<input type="tel" name="name" maxlength="10" required/>
<br /><br />
<label>Votre code personnel</label><br />
<input type="tel" name="name" maxlength="6" required/>
<br /><br />
<button>Valider -></button>
</form>

<a href="#">identifiant oublié ?</a><br />
<a href="#">code personnel oublié ?</a><br /><br />
</center>
<div class="info">
<p style="color:darkblue;font-weight:700">nos conseils de securité</p>
<p>LCL ne vous sollicitera jamais (que ce soit par mail, par SMS ou par téléphone) pour vous demander de communiquer de quelque manière que ce soit vos mots de passe, codes confidentiels ou codes à usage unique reçus par SMS.</p>
</div>
<br /><br /><br /><br />
</div>


	</body>
</html>