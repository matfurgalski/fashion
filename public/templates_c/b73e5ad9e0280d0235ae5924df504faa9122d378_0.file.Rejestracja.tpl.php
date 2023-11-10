<?php
/* Smarty version 4.1.0, created on 2023-05-01 21:22:16
  from 'H:\programy1\xampp\htdocs\fashion\app\views\Rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64501168b7f8c7_35557854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73e5ad9e0280d0235ae5924df504faa9122d378' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\Rejestracja.tpl',
      1 => 1682968828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64501168b7f8c7_35557854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32413714564501168b747c9_83953471', 'top');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_104790966964501168b78157_99210296 extends Smarty_Internal_Block
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
class Block_32413714564501168b747c9_83953471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_32413714564501168b747c9_83953471',
  ),
  'messages' => 
  array (
    0 => 'Block_104790966964501168b78157_99210296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="checkout spad">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracja" >
    <div class="col-lg-8 col-md-6">
    
        <h6 class="checkout__title">Rejestracja</h6>
        
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

    <div class="col-lg-6">
        
        <div class="checkout__input">
            <p>Powtórz hasło<span>*</span></p>
            <input id="haslo2" type="password" placeholder="haslo" name="haslo2" value="">
        </div>
    </div>

    <div class="col-lg-6">
        <div class="checkout__input">
            <p>E-mail<span>*</span></p>
            <input id="email" type="text" placeholder="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
        </div>
    </div>

    <div class="col-lg-6">
        <div class="checkout__input">
            <p>Imię<span>*</span></p>
            <input id="imie" type="text" placeholder="imie" name="imie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
">
        </div>  
</div>

<div class="col-lg-6">
    <div class="checkout__input">
        <p>Nazwisko<span>*</span></p>
        <input id="nazwisko" type="text" placeholder="nazwisko" name="nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
">
    </div>
</div>

<div class="col-lg-6">
    <div class="checkout__input">
        <p>Adres<span>*</span></p>
        <input id="adres" type="text" placeholder="adres" name="adres" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->adres;?>
">
    </div>
</div>

<div class="col-lg-6">
    <div class="checkout__input">
        <p>Kod pocztowy<span>*</span></p>
        <input id="kod_pocztowy" type="text" placeholder="kod_pocztowy" name="kod_pocztowy" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kod_pocztowy;?>
">
    </div>
</div>

<div class="form-check">
  
    <input class="form-check-input" type="checkbox" value="1" name = "regulamin" id="regulamin"  >
     
    <label class="form-check-label" for="regulamin">
      Akceptacja regulaminu
    </label><span>*</span>
  </div>
    
        <button type="submit" class="site-btn">Zarejestruj</button>
</form>
</section>        





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104790966964501168b78157_99210296', 'messages', $this->tplIndex);
?>

<?php
}
}
/* {/block 'top'} */
}
