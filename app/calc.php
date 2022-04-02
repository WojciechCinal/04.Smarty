<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
$form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
$form['czas'] = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
}

function validate(&$form,&$infos,&$msgs,&$hide_intro){

	if ( ! (isset($form['kwota']) && isset($form['oprocentowanie']) ))	return false;	

	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';


	if ( $form['kwota'] == "") $msgs [] = 'Nie podano kwoty kredytu!';
	if ( $form['oprocentowanie'] == "") $msgs [] = 'Nie podano oprocentowania!';
	
	if ( count($msgs)==0 ) {
		
		if (! is_numeric( $form['kwota'] )) $msgs [] = 'Kwota kredytu nie jest liczbą!';
		if (! is_numeric( $form['oprocentowanie'] )) $msgs [] = 'Oprocentowanie nie jest liczbą!';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	

function process(&$form,&$infos,&$msgs,&$rata){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
        
	$form['kwota'] = floatval($form['kwota']);
	$form['oprocentowanie'] = floatval($form['oprocentowanie']);
        

	$opr = $form['oprocentowanie']/100;

	switch ($form['czas']) {
		case '6m' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/6;
			break;
		case '12m' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/12;
			break;
		case '2r' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/24;
			break;
		case '3r' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/(12*3);
			break;
		case '5r' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/(12*5);
			break;
		case '10r' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/(12*10);
			break;
		case '15r' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/(12*15);
			break;
		case '20r' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/(12*20);
			break;
		case '25r' :
			$kw_calkowita = $form['kwota'] + ($form['kwota'] *$opr);
			$rata = $kw_calkowita/(12*25);
			break;

	}
}


$form = null;
$infos = array();
$messages = array();
$rata = null;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$rata);
}



$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);


$smarty->assign('form',$form);
$smarty->assign('rata',$rata);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);


$smarty->display(_ROOT_PATH.'/app/calc.html');