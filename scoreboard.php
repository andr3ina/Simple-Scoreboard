<?php 
	$dbh = "localhost";
	$dbu = "dbuser";
	$dbp = "dbpassword";
	$db = "dbname";
	$mysqli = new mysqli($dbh,$dbu,$dbp,$db);
	$mysqli->set_charset("utf8");

$query = "SELECT * FROM scores LIMIT 8";
$result = $mysqli->query($query);
echo '<ul>';
while($row = $result->fetch_array())
{

?>

<li class="gamescore">
	<!-- 2013-09-07 03:00:31 UTC -->
 <a class="gameLink" href="#">

    <span class="date"><?=$row['date']?></span><br>

    <span class="team boom"><span class="name"><?=$row['aname']?></span><span class="score"><?=$row['away_score']?></span></span><br>

    <span class="team"><span class="name"><?=$row['hname']?></span><span class="score"><?=$row['home_score']?></span></span><br>

  </a>  

</li>


<?php
}
$result->close();

/* close connection */
$mysqli->close();
?>
</ul>