<?php
/* Smarty version 4.1.0, created on 2022-04-02 15:45:23
  from 'C:\xampp\htdocs\szablon2\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624853737c5f01_46904811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49f17c4359e47fed059d55c6036881a2098747b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\szablon2\\app\\calc.html',
      1 => 1648907113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624853737c5f01_46904811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1392743721624853737b7254_93170013', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1958873978624853737b7df9_51890087', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96059324624853737b85d4_13581816', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1392743721624853737b7254_93170013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1392743721624853737b7254_93170013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="footer">
    <ul class="icons">
        <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
    </ul>
    <ul class="copyright">
        <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</section>
<?php
}
}
/* {/block 'footer'} */
/* {block 'header'} */
class Block_1958873978624853737b7df9_51890087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1958873978624853737b7df9_51890087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="header">
    <div class="inner">
        <span class="icon solid major fa-cloud"></span>
        <h1>Witaj w prostym kalkulatorze kredytowym.<br />
            Wykorzystano szablon <strong>PHOTON</strong> ze strony: <a href="http://html5up.net">HTML5 UP</a>.</h1>
        <p>Zadanie 4. Smarty</p>
        <ul class="actions special">
            <li><a href="#one" class="button scrolly">Przejdź do kalkulatora</a></li>
        </ul>
    </div>
</section>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_96059324624853737b85d4_13581816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96059324624853737b85d4_13581816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="one" class="main style1">
    <div class="container">
        <header class="major special">
            <h2>Kalkulator</h2>
        </header>

        <section>
            <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
                <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">
                        <label for="kwota">Kwota kredytu: </label>
                        <input id="id_kw" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" /><br />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="id_op">Oprocentowanie: </label>
                        <input id="id_op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
" /><br />
                    </div>
                    <div class="col-12">
                        <label for="id_cz">Czas spłaty: </label>
                        <select name="czas">
                            <option value="6m">6 miesięcy</option>
                            <option value="12m">12 miesięcy</option>
                            <option value="2r">2 lata</option>
                            <option value="3r">3 lata</option>
                            <option value="5r">5 lat</option>
                            <option value="10r">10 lat</option>
                            <option value="15r">15 lat</option>
                            <option value="20r">20 lat</option>
                            <option value="25r">25 lat</option>
                        </select>
                    </div>
                    <div>
                            <button type="submit" class="primary">Oblicz</button>
                    </div>
                </div>
            </form>
        </section>


<div class="messages">
    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
    <h4>Wystąpiły błędy: </h4>
    <ol class="err">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <?php }?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['rata']->value))) {?>
    <h4>Rata wynosi:</h4>
    <p class="res">
        <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>

    </p>
    <?php }?>
    </div>
</div>
</section>
<?php
}
}
/* {/block 'content'} */
}
