<?
include "blocks/db.php";

$sql = "SELECT * FROM article";
$max = 1;

$result = $mysqli->query($sql, MYSQLI_USE_RESULT);
while ($row = $result->fetch_assoc()) {
	$arr[$max] = $row;
	$max++;
}

$result->close();

$i = 0;
$ind = array(0, 0, 0);

if ($max > 2) {
	while ($i < 3) {
		$count = rand(0, $max - 1);
		if (!in_array($count, $ind)) {
			$ind[$i] = $count;
			$i++;
		}
	}
} else {
	$ind = array(1, 2, 3);
}


printf("<div class='section_01_right'>
	<h1>Интересные статьи</h1>");

for ($index = 0; $index < 3; $index ++) {
	printf("
		<h3>%s</h3>
		<p>%s</p><a href='article.php?id=%d&page=article'>Далее</a></p>

		
		\n", $arr[ $ind[$index] ] ['title'], $arr[ $ind[$index] ]['discription'], $arr[ $ind[$index] ]['id']);
}

printf("</div>");

?>

