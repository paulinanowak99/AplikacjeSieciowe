<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// 1. pobranie parametrów

$sum = $_REQUEST ['sum'];
$years = $_REQUEST ['years'];
$interest = $_REQUEST ['interest'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

if ( ! (isset($sum) && isset($years) && isset($interest))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $sum == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $years == "") {
	$messages [] = 'Nie podano liczby lat do spłaty';
}
if ( $interest == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	if (! is_numeric( $sum )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $years )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric( $interest )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}

}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) {
	$sum = intval($sum);
	$years = intval($years);
	$interest = floatval($interest / 100);
	
	//wykonanie operacji
	$result = ($sum * $interest + $sum) / ($years * 12);
}

// 4. Wywołanie widoku z przekazaniem zmiennych

include 'calc_view.php';