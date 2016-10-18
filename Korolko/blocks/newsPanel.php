<?

$sql = "SELECT * FROM news";
$max = 1;

$result = $mysqli->query($sql, MYSQLI_USE_RESULT);

while ($row = $result->fetch_assoc()) {
	$arr[$max] = $row;
	$max++;
}

$result->close();

$i = 1;
printf("<div class='section_01_right'>
	<h1>Новости сайта</h1>");
while ( ($i < $max) & ($i <= 3)  ) {
	printf("
		<h3>%s</h3>
		<p>%s</p><a href='article.php?id=%d&page=news'>Далее</a>		
		\n<br><br>", $arr[ $max - $i ] ['title'], $arr[ $max - $i ]['discription'], $arr[ $max - $i ]['id']);

	$i++;
}

printf("<br></div>");

?>

