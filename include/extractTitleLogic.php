<title>Garage4Hackers CTF - March 2015 </title>
<?php
function get_title($contents) {
	$req_dump = print_r($_REQUEST, TRUE);
	
	$fp = fopen('/var/log/r.log', 'a') or die("can't open file");;
	fwrite($fp, $req_dump);
	fclose($fp);

 	if (preg_match('!<title>(.*?)</title>!i', $contents, $matches)) {
  		return $matches['1'];
   }else{
  	 	$_SESSION['flag'] = '1';
   }
}
 
  ?>