<?php 
if ($_SERVER['SERVER_ADDR'] != $_SERVER['REMOTE_ADDR']){
	// "The feeling that conversations and any data (whiteboard included) are encrypted without having to mess around with complicated options and setup is a massive plus. It's very very easy to use." - zorgalicious 
	// //  You Found key! w00t!! :)
 // Decrypt Blowfish following code and send CTF Flag to following email 
//   49FE06DB9909C6FC6AE11D44F12CD39F659690A388F660A13709CDFA7F06A0E9343E9058EADB9A4CE9AE4F2BC2585768
// Submit to sandeepk.L337@gmail.com



  ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('title1.php'); ?>
</head>
<body>

<center><h1>
<br>500 Internal Server Error</h1></center>
</body>
</html>
  <?php 

  exit; //just for good measure
}else{
?>
<!DOCTYPE html>
<html>
<head>
<?php include('title2.php'); // LOL I know title1 and title2 code sux :P  ?>
	
</head>
<body>
<center><h1>Welcome to 0day World </h1></center>
</body>
</html>

<?php	
}
?>

