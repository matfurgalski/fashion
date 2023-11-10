<?php
/* Smarty version 4.1.0, created on 2023-04-21 22:07:49
  from 'H:\programy1\xampp\htdocs\fashion\fashion\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6442ed15200178_66454535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '641782b2385389bb8d7168b4ce724651cddadc76' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\fashion\\app\\views\\Login.tpl',
      1 => 1673139827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6442ed15200178_66454535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14477501786442ed151f6e28_26571765', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_4069753616442ed151f94a6_06935205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
/* {/block 'messages'} */
/* {block 'top'} */
class Block_14477501786442ed151f6e28_26571765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_14477501786442ed151f6e28_26571765',
  ),
  'messages' => 
  array (
    0 => 'Block_4069753616442ed151f94a6_06935205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="checkout spad">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" >
    <div class="col-lg-8 col-md-6">

        <h6 class="checkout__title">Logowanie</h6>
        
            <div class="col-lg-6">
                <div class="checkout__input">
                    <p>Login<span>*</span></p>
                    <input id="login" type="text" placeholder="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
                </div>
            </div>
    
        

        
        <div class="col-lg-6">
        
        <div class="checkout__input">
            <p>Hasło<span>*</span></p>
            <input id="haslo" type="password" placeholder="haslo" name="haslo" value="">
        </div>
    </div>
    
        <button type="submit" class="site-btn">Zaloguj</button>
</form>
</section>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4069753616442ed151f94a6_06935205', 'messages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'top'} */
}
