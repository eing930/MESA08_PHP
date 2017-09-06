
<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<TITLE>練習ex04_03</TITLE>
</HEAD>
<BODY>
<?php
echo "<table border='1'>";
for($x=1;$x<=9;$x++)
{
echo "<tr>";
	//       	if($x %  2)
	//       		echo "<tr bgcolor='yellow'>";
	//       	else
		//       		echo "<tr bgcolor='white'>";
		 
		for($y=1;$y<=9;$y++)
		{
		if($x % 2){
		if($y % 2)
			echo "<td bgcolor='yellow'>";
			else
				echo "<td bgcolor='purple'>";
			}
			if(!($x % 2)){
			if($y % 2)
      				echo "<td bgcolor='gray'>";
      				else
      					echo "<td bgcolor='cyan'>";
    		}
      							echo "$x X $y"."<br>";
      		echo "</td>";
      				}
}
	?>
	
	   </BODY> 
</HTML>
	