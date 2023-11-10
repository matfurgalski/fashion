<?php
/* Smarty version 4.1.0, created on 2023-05-19 23:01:14
  from 'H:\programy1\xampp\htdocs\fashion\app\views\EdycjaProduktow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6467e39ab98a04_61983653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac35a0e2b6477b4ce71a2ecb4e0d2ea0c0f7366d' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\EdycjaProduktow.tpl',
      1 => 1684530066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6467e39ab98a04_61983653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4837601856467e39aa5bf30_02957792', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_4837601856467e39aa5bf30_02957792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_4837601856467e39aa5bf30_02957792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
zapiszProdukty" method="post">
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Nazwa</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" id="nazwa" placeholder="Nazwa" name="nazwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa;?>
">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Rozmiar</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="rozmiar" placeholder="Rozmiar" name="rozmiar" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rozmiar;?>
">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Cena</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="cena" placeholder="Cena" name="cena" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">idTyp_odzieży</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="idTyp_odziezy" name="idTyp_odziezy" placeholder="idTyp_odzieży" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idTyp_odziezy;?>
">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Firma</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="firma" placeholder="Firma" name="firma" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->firma;?>
">
      </div>
    </div>
    <div class="form-group row">
      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Zdjęcie</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="zdjecie" placeholder="Zdjęcie" name="zdjecie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->zdjecie;?>
">
      </div>
    </div>
    <div class="pure-controls">
			<input type="submit" class="site-btn" value="Zapisz"/>
			<!-- <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
listaProduktow">Powrót</a> -->
		</div>
    <input type="hidden" name="idProdukty" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idProdukty;?>
">
  </form>
  

  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>




<?php
}
}
/* {/block 'top'} */
}
