<?php
 $N = $_POST["number"];
 $myfile = file_get_contents('https://terriblytinytales.com/test.txt') or die("Unable to fetch data!");
 $arr = explode(" ",$myfile);
 $cnt=0;
 sort($arr);
 for($x=0;$x<count($arr);$x++)
 {
 	if($x==0)
 	{
 		$cnt++;
 	}
 	else 
 	{
 		if($arr[$x]!=$arr[$x-1])
 		{
 			$freq[$arr[$x-1]]=$cnt;
 			$cnt=1;
 		}
 		else
 		{
 			$cnt++;
 		}
 	}
 }
 $freq[$arr[$x-1]]=$cnt;
 arsort($freq);
 $cnt=0;
 echo "<table border='4' cellspacing='0' >
 <tr><td  colspan='5'>FREQUENCY TABLE</td></tr>
 <tr><th>WORD</th><th>FREQUENCY</th></tr>";
 foreach ($freq as $key => $value) 
 {
   $cnt++;
   if($cnt>$N)break;
   echo "<tr>";
   echo "<td>".$key."</td>";
   echo "<td>".$value."</td>";
   echo "</tr>";
 }
 echo "</table>"
?>