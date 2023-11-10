<?php
/* Smarty version 4.1.0, created on 2023-05-01 21:32:28
  from 'H:\programy1\xampp\htdocs\fashion\app\views\PotwierdzenieZamowienia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645013cc5315c5_22492208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab86f86bbd3b1ac692336d1cd6d1aea0c6aa3b2d' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\PotwierdzenieZamowienia.tpl',
      1 => 1673037894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645013cc5315c5_22492208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_402392150645013cc52eff5_02280151', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_402392150645013cc52eff5_02280151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_402392150645013cc52eff5_02280151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="product__details__text">
    <h4>Zamówienie potwierdzone...</h4>
</div>  

<div class="col-lg-7 col-md-6 col-sm-6">
    <div class="continue__btn update__btn">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep"><i class="fa fa-spinner"></i> Kontynuuj Zakupy</a>
    </div>
</div>
<?php
}
}
/* {/block 'top'} */
}
