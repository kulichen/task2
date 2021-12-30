<html>
  <head>
    <meta charset="utf-8">
  <title>2lab</title>
 </head>
 <body>
	<?php 
		$temp;
		$i = 0;
		$j = 1;
		$buf = new SimpleXMLElement('test_xml', NULL, true);
		foreach($buf -> question as $qu) {
			$i += 1;
			$temp = $qu -> name;
			$temp =  mb_strtoupper(mb_substr($temp, 0,1)).mb_substr($temp, 1);
			echo $i."."." ".$temp.nl2br("\n");
			$j = 1;
			foreach($qu ->answer as $ans) {
				$temp = $ans;
				$temp = ltrim(rtrim($temp));
				$temp = preg_replace('/ {2}/',' ',$temp);
				$temp = mb_strtoupper(mb_substr($temp, 0,1)).mb_substr($temp, 1);
				$temp = htmlspecialchars($temp);	
				echo "&nbsp&nbsp&nbsp&nbsp".$i.".".$j." ".$temp.nl2br("\n");
				$j += 1;
			}		
		}	
	?>
 </body>
</html>