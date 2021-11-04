<?php /* Smarty version Smarty-3.1.17, created on 2021-11-04 20:35:13
         compiled from "C:\xampp\htdocs\test\AplikacjeSieciowe\app\calc.html" */ ?>
<?php /*%%SmartyHeaderCode:19009292326184318b733ca4-88990423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7578394008364e92eda19426222e265107b3924a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\AplikacjeSieciowe\\app\\calc.html',
      1 => 1636054506,
      2 => 'file',
    ),
    'cce8b66e3a192e7e8a7b6ea6579c62329f17b43c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\AplikacjeSieciowe\\templates\\main.html',
      1 => 1448148592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19009292326184318b733ca4-88990423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_6184318b826c27_45856557',
  'variables' => 
  array (
    'page_description' => 0,
    'page_title' => 0,
    'app_url' => 0,
    'hide_intro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6184318b826c27_45856557')) {function content_6184318b826c27_45856557($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"></script>

</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            <li><a href="#app_content">Idź do formularza</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
        <p class="splash-subhead">
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">



<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
            <fieldset>

                <label for="sum">Kwota kredytu</label>
                <input id="sum" type="number" step=0.01 placeholder="kwota kredytu" name="sum" value="<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
">

                <label for="years">Liczba lat</label>
                <input id="years" type="number" placeholder="liczba lat" name="years" value="<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
">

                <label for="interest">Oprocentowanie</label>
                <input id="interest" type="number" step=0.01 placeholder="oprocentowanie" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['interest']->value;?>
">

                <button type="submit" class="pure-button">Oblicz</button>
            </fieldset>
        </form>
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        
        <?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value)>0) {?>
        <h4>Wystąpiły błędy: </h4>
        <ol class="err">
            <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php } ?>
        </ol>
        <?php }?>
        <?php }?>

        
        <?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
        <?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
        <h4>Informacje: </h4>
        <ol class="inf">
            <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php } ?>
        </ol>
        <?php }?>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
        <h4>Wynik</h4>
        <p class="res">
            Kwota kredytu: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        </p>
        <?php }?>

    </div>
</div>



    </div>

    <div class="footer l-box is-center">
		<p>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora
		</p>
        <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Przemysław Kudłacik)</p>
    </div>

</div>


</body>
</html><?php }} ?>
