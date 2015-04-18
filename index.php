<!DOCTYPE html>
<html>
<head>
<?php
function exceptions_error_handler($severity, $message, $filename, $lineno) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
}
set_error_handler('exceptions_error_handler');

session_start();
$_SESSION['flag'] = '0';
include('include/extractTitleLogic.php');
if (isset($_POST['url'])){
	try {
			$content = file_get_contents($_POST['url']); 	
		$title =	get_title($content);	
	} catch (Exception $e) {
		$p = str_replace('file_get_contents', '_', $e->getMessage());
   		echo "<center>Caught exception: " . $p . "</center>";	
  		 exit();
}
	
}

?>

</head>
<body>
<center>
	<h1>Garage4Hackers Website Title Extractor</h1>
	<form action='' method='POST'>
		<input placeholder='URL' name='url'>
		<input type='submit' value='Get URL Title'>
	</form>
 </br>
 CTF Task : Find Flag and decrypt it  :) <br>
<b>
 			<?php
 			if (isset($title)) {
 				echo is_array($title) ? '' : 'Website Title is : '.htmlspecialchars($title, ENT_QUOTES).'</br></br>';	
 			}else{
 				
 				if (isset($_SESSION['flag']) and $_SESSION['flag'] =='1') {
 					echo 'In the following code title tag is not found';
 				?>
 						<br>

 						<textarea style="width: 691px; height: 464px;">
 							<?php print htmlspecialchars($content, ENT_QUOTES); ?>
 						</textarea><br><br>
 						<?php
 					}	
 			}
 	?>
 </b>
 
  <br>
  <br>
  <br>
  <a href="https://docs.google.com/forms/d/1B16N03q2da-N3ezjc_nab3PdahWpsGEBUszamWmtW3M/viewform"><b> Register to Event </b></a></br></br>
  <img src="https://dl.dropboxusercontent.com/u/18007092/riyaz-banner-rancho.png">
  <br>
  <br>
  <br>
  <br>
   Send Flag on sandeepk.L337[at]gmail.com
  <br>
   <b> Garage4Hackers CTF Sponsored By <br> <br> <a href="http://securelayer7.net" title="penetration testing service and we are hiring"> <img src="https://securelayer7.net/img/logo.png" alt="SEcurelayer7"></a>   <a href="https://www.netsparker.com/g4h/?utm_source=g4h&utm_medium=banner&utm_campaign=scan4xsql"> <img src="http://garage4hackers.com/hitb-logo.png"></img></a></b>

</center>
</body>
</html>