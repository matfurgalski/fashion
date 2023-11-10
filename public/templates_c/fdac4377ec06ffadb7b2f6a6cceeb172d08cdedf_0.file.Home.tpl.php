<?php
/* Smarty version 4.1.0, created on 2023-05-19 22:10:25
  from 'H:\programy1\xampp\htdocs\fashion\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6467d7b1a1c032_30530111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdac4377ec06ffadb7b2f6a6cceeb172d08cdedf' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\Home.tpl',
      1 => 1684527024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6467d7b1a1c032_30530111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16859920946467d7b1a12684_95775738', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'messages'} */
class Block_836880406467d7b1a15188_34324655 extends Smarty_Internal_Block
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
class Block_16859920946467d7b1a12684_95775738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_16859920946467d7b1a12684_95775738',
  ),
  'messages' => 
  array (
    0 => 'Block_836880406467d7b1a15188_34324655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Letnia Kolekcja</h6>
                                <h2>Jesienno - Zimowa Kolekcja 2030</h2>
                                <p>Specjalistyczna marka tworząca luksusowe niezbędniki. Etycznie wykonane z niezachwianym zaangażowaniem w wyjątkową jakość.</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep" class="primary-btn">Kup teraz <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Letnia Kolekcja</h6>
                                <h2>Jesienno - Zimowa Kolekcja 2030</h2>
                                <p>Specjalistyczna marka tworząca luksusowe niezbędniki. Etycznie wykonane z niezachwianym zaangażowaniem w wyjątkową jakość.</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep" class="primary-btn">Kup teraz <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <footer class="footer">
        <div class="container">
            <div class="row">
    <div class="col-lg-6 offset-lg-3 col-md-6 col-sm-6">
        <div class="footer__widget">
            <h6>NewLetter</h6>
            <div class="footer__newslatter">
                <p>Zapisz się do Newlettera!</p>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newletter">
                    <input type="text" placeholder="Twój email" name="email">
                    <button type="submit"><span class="icon_mail_alt"></span></button>
                </form>
            </div>
        </div>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_836880406467d7b1a15188_34324655', 'messages', $this->tplIndex);
?>

</div>
</div>
</footer>


    <?php
}
}
/* {/block 'top'} */
}
