<?php
require_once dirname(__FILE__) . '/../config.php';

// Smarty
require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

// 1. Pobranie parametrów

function getParams(&$sum, &$years, &$interest)
{
    $sum = isset($_REQUEST['sum']) ? $_REQUEST['sum'] : null;
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
}

// 2. Walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$sum, &$years, &$interest, &$messages, &$infos, &$hide_intro)
{
    if (!(isset($sum) && isset($years) && isset($interest))) {
        return false;
    }

    $hide_intro = true;

    $infos [] = 'Przekazano parametry.';

    if ($sum == '') {
        $messages[] = 'Nie podano kwoty kredytu';
    }
    if ($years == '') {
        $messages[] = 'Nie podano liczby lat do spłaty';
    }
    if ($interest == '') {
        $messages[] = 'Nie podano oprocentowania';
    }

    //nie ma sensu walidować dalej gdy brak parametrów
    if (count($messages) != 0) return false;

    if (!is_numeric($sum)) {
        $messages[] = 'Pierwsza wartość nie jest liczbą';
    }
    if (!is_numeric($years)) {
        $messages[] = 'Druga wartość nie jest liczbą całkowitą';
    }
    if (!is_numeric($interest)) {
        $messages[] = 'Trzecia wartość nie jest liczbą';
    }

    if (count($messages) != 0) return false;
    else return true;
}

// 3. Wykonanie zadania

function process(&$sum, &$years, &$interest, &$messages, &$infos, &$result)
{

    $sum = intval($sum);
    $years = intval($years);
    $interest = floatval($interest);

    $result = ($sum * ($interest / 100) + $sum) / ($years * 12);
}

// Definicja zmiennych kontrolera

$sum = null;
$years = null;
$interest = null;
$result = null;
$messages = array();
$infos = array();
$hide_intro = false;

// - pobieranie parametrów
// - sprawdzenie czy nie ma błędów
// - wykonanie zadania
getParams($sum, $years, $interest);
if (validate($sum, $years, $interest,$messages,$infos, $hide_intro)) {
    process($sum, $years, $interest, $messages, $infos, $result);
}

// Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('sum', $sum);
$smarty->assign('years', $years);
$smarty->assign('interest', $interest);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');