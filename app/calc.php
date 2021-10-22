<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER

// Skrypt zostanie przerwany, gdy użytkownik jest niezalogowany

include _ROOT_PATH.'/app/security/check.php';

// 1. Pobranie parametrów

function getParams(&$sum, &$years, &$interest){
	$sum = isset($_REQUEST['sum']) ? $_REQUEST['sum'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

// 2. Walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$sum,&$years,&$interest,&$messages){
	if(! (isset($sum) && isset($years) && isset($interest))) {
		return false;
	}

    if($sum == '') {
        $messages[] = 'Nie podano kwoty kredytu';
    }
    if($years == '') {
        $messages[] = 'Nie podano liczby lat do spłaty';
    }
    if($interest == '') {
        $messages[] = 'Nie podano oprocentowania';
    }

	//nie ma sensu walidować dalej gdy brak parametrów
	if(count($messages) != 0) return false;

        if(! is_numeric( $sum )) {
            $messages[] = 'Pierwsza wartość nie jest liczbą całkowitą';
        }
        if(! is_numeric( $years )) {
            $messages[] = 'Druga wartość nie jest liczbą całkowitą';
        }
        if(! is_numeric( $interest )) {
            $messages[] = 'Trzecia wartość nie jest liczbą całkowitą';
        }

	if (count ( $messages ) != 0) return false;
	else return true;
}

// 3. Wykonanie zadania

function process(&$sum,&$years,&$interest,&$messages,&$result){
	global $role;

    $sum = intval($sum);
    $years = intval($years);
    $interest = floatval($interest / 100);

    if($role == 'admin') {
        $result = ($sum * $interest + $sum) / ($years * 12);
    } else {
        $messages[] = 'Tylko administrator może wykonać obliczenia';
    }
}

// Definicja zmiennych kontrolera

$sum = null;
$years = null;
$interest = null;
$result = null;
$messages = array();

// - pobieranie parametrów
// - sprawdzenie czy nie ma błędów
// - wykonanie zadania
getParams($sum,$years,$interest);
if(validate($sum,$years,$interest,$messages)) {
	process($sum,$years,$interest,$messages,$result);
}

include 'calc_view.php';