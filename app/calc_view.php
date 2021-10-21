<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Kwota kredytu: </label>
	<input id="id_sum" type="text" name="sum" /><br />
	<label for="id_op">Liczba lat: </label>
	<input id="id_years" type="text" name="years" /><br />
	<label for="id_y">Oprocentowanie: </label>
	<input id="id_interest" type="text" name="interest" /><br />
	<input type="submit" value="Oblicz" />
    sadasa
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php
echo 'Kwota kredytu: '.$sum.'<br />';
echo 'Liczba lat: '.$years.'<br />';
echo 'Oprocentowanie: '.$interest.'% <br />';
echo '<br />';
echo 'Miesięczna rata do spłaty: '.$result;
?>
</div>
<?php } ?>

</body>
</html>