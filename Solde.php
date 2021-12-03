<?php
session_start();
if(@$_SESSION["autoriser"]!="oui"){
header("location:index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mon compte BNP la banque d'un monde qui change</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<script src='https://kit.fontawesome.com/618007f65e.js' crossorigin='anonymous'></script>

		
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="Style1.css"/>

<script type="text/javascript" src="Java1.js"></script>

	</head>
	<body onload="alert()">
	<div class="bar-logo">
	<img src="https://logos-marques.com/wp-content/uploads/2020/12/BNP-Paribas-logo.png" class="logo">
	</div>
	<div class="space">
	<p style="padding:17px;">Bienvenue Dans Votre Espace</p>
	</div>
	<div align="right">
	<a class="link" href="Deco.php"><i class='fas fa-power-off' style='font-size:15px;color:red'></i> &nbsp Deconnexion</a>
	</div>
	
	
	<div class="solde">
	<h1>Bonjour Mlle Martine Lefervre </h1>
	
	<p style="background-color:#ebf0fc;color:#6a6b6e;width:120px;border-radius:2px;padding:2px;"><i class='fas fa-map-marker-alt' style='font-size:14px;color:sky;'></i> Cassablanca-Maroc &nbsp &nbsp<i class="fas fa-star" style='font-size:14px;color:gold;'></i><i class="fas fa-star" style='font-size:14px;color:gold;'></i><i class="fas fa-star" style='font-size:14px;color:gold;'></i></p>


<p style="font-size:15px;">derniere connexion au <b class="date" style="font-family:arial;font-size:12px;"></b></p>

<hr/>

<p style="background-color:#ebf0fc;width:170px;border-radius:2px;padding:2px;color:#6a6b6e">votre gestionnaire:<b style="color:blue">mr Ali Saïd</b></p>

<p style="background-color:#ebf0fc;width:90px;border-radius:2px;padding:2px;color:#6a6b6e">statut du compte</p>

<p class="blink">
	Votre Compte Est Bloquée
	</p>
	
	<p style="font-size:18px;font-weight:700">Solde:<b style="color:green">3.500.000,00€</b></p>
	<marquee><p style="font-size:15px;">Frais de deblocage: <b style="color:red;">85.000,00€</b></p></marquee>
	
	</div>
	<center>
	<button  onclick="alert()" class="T"><i class='fas fa-credit-card' style='font-size:14px;color:blue'></i> COMPTES</button>
	<button onclick="alert()" class="T"><i class='fas fa-money-check' style='font-size:14px;color:red'></i> MES CARTES</button>
	<button  onclick="alert()" class="T"><i class='fas fa-wrench' style='font-size:16px;color:purple'></i> SERVICES</button>
	<button  onclick="alert()" class="T"><i class='fas fa-chart-pie' style='font-size:14px;color:orange'></i> PRETS</button>
	<button  onclick="alert()" class="T"><i class='fas fa-exchange-alt' style='font-size:14px;color:red'></i> VIREMENTS</button>
	</center>
	<h6 style="color:gray;margin-left:40px;font-size:15px;">Comptes et Contrats / Mes Comptes</h6>

<div class="liquid">
<i id="iconic" class='fas fa-eye' style='font-size:30px;color:#72c4c2;background-color:#9ae6e3;border-radius:100px;padding:10px;'></i>
<p>LIQUIDITES:N°******2898</p>
<b>10.517,23 €</b>
</div>

<div class="liquid">
<i  id="iconic" class='fas fa-user-alt' style='font-size:30px;color:#7976d6;background-color:#9a98d4;border-radius:100px;padding:10px;'></i>
<p>EPARGNES DISPONIBLE:N°******2898</p>
<b>10.517,23 €</b>
</div>

<div class="liquid">
<i  id="iconic" class='fas fa-handshake' style='font-size:30px;color:#d97be3;background-color:#e5b7eb;border-radius:100px;padding:10px;'></i>
<p>EPARGNES A TERMES:N°******2898</p>
<b>10.517,23 €</b>
</div>

<div class="liquid">
<i  id="iconic" class='fas fa-money-bill-wave' style='font-size:30px;color:#d9c266;background-color:#e8d68e;border-radius:100px;padding:10px'></i>
<p>TITRES</p>
<b>10.517,23 €</b>
</div>


<div class="cour">
 <p style="color:blue;">Comptes Courant | Cartes</p>
<hr/>
<p class="flo" style="color:green">+10.000€</p>
<p>******72782</p>
<p>Comptes courant</br>Mlle MARTINE LEFERVRE</p>
</div>

<div class="cour">
 <p style="color:blue;">Credit</p>
<hr/>
<p class="flo" style="color:red">-10.000€</p>
<p>******2 2782</p>
<p>Credit Auto</p>
</div>

<div class="cour">
 <p style="color:blue;">Epargnes et placements</p>
<hr/>
<p class="flo" style="color:green">+10.000€</p>
<p>******2 2782</p>
<p>Livret epargne</br>Mlle MARTINE LEFERVRE</p>
</div>

<h6 style="color:gray;margin-left:40px;font-size:15px;">Listes Des Operations</h6>


	<div class="list">
	<table rules=none id="tableau">
	<tr>
	<td>Date</td>
		<td>Description</td>
			<td style="text-align:right;">Amount</td>
<td>credit</td>
	</tr>
	
	<tr>
	<td>27/03/2020</td>
		<td>Cotisation</td>
		<td>-370€</td>
			<td style="color:red;text-align:right;">-370€</td>
	</tr>
	
	<tr>
	<td>19/03/2020</td>
		<td>Facture N°28</td>
		<td>-200€</td>
			<td style="color:red;text-align:right;">-200€</td>
	</tr>
	
	<tr>
	<td>27/04/2019</td>
<td>CARREFOUR CAISSE N°</td>
<td>-150€</td>
<td style="color:red;;text-align:right;">-150€</td>
	</tr>
	
	<tr>
	<td>12/02/2019</td>
		<td>Reglement facture N°627</td>
		<td>-100€</td>
			<td style="color:red;text-align:right;">-100€</td>
	</tr>
	
	<tr>
	<td>05/02/2019</td>
		<td>Frais carte Visa</td>
		<td>-300€</td>
			<td style="color:red;text-align:right;">-300€</td>
	</tr>

	</table>
	</div>
	
<h6 style="color:gray;margin-left:40px;font-size:15px;">Votre Gestionnaire</h6>
	
	<div class="info">
	<img src="https://i.ibb.co/X3YHvk5/5-EE63243-CE3-B-4-A7-A-81-F4-C8-A3-C00-C5-A54.jpg"/>
	<h2>Mr Ali Saïd</h2>
	<p>la banque d'un monde qui change</p>
	<p>payouts : 45€</p>
	</div>
	
	</body>
</html>