<?php
/* Smarty version 4.1.0, created on 2023-05-19 23:02:52
  from 'H:\programy1\xampp\htdocs\fashion\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6467e3fc8eedb0_31785238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a779befd7d20631e24a7d19ebde6388f9d75b444' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\templates\\main.tpl',
      1 => 1684530169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6467e3fc8eedb0_31785238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" type="text/css">

</head>

<body>
 
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
	                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a>
                                 <?php if ((isset($_SESSION['success']))) {?>
                                    <div class="">
                                    <p>Witaj <?php echo $_SESSION['success'];?>
</p>
                                    </div>
                                <?php }?>  
                                <?php } else { ?>	
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracjaShow">Rejestracja</a>
                                <?php }?>            
            </div>          
        </div>
        <div class="offcanvas__nav__option">
            <nav class="header__menu mobile-menu">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
koszyk">Koszyk</a>
            </nav >
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
koszyk"><img src="img/icon/cart.png" alt=""> <span></span></a>
            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
            <?php if ((isset($_SESSION['total']))) {?>
            <div class="price">$<?php echo $_SESSION['total'];?>
</div>
            <?php } else { ?>
            <div class="price">$0.00</div>
            <?php }?>
            <?php }?>
        </div>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        
                    </div>
                    
                    <div class="col-lg-6 col-md-5">                       
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
	                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a>
                                 <?php if ((isset($_SESSION['success']))) {?>
                                    <div class="">
                                    <p>Witaj <?php echo $_SESSION['success'];?>
</p>
                                    </div>
                                <?php }?>  
                                <?php } else { ?>	
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracjaShow">Rejestracja</a>
                                <?php }?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Strona Główna</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep">Sklep</a></li>

                            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['conf']->value->roles['admin'])) == 1) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
listaUzytkownikow">Lista Kont</a></li>
                            <?php }?>
                            <?php }?>

                            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['conf']->value->roles['pracownik'])) == 1) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
listaProduktow">Lista Produktów</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
listaZamowien">Lista Zamowień</a></li>
                            <?php }?>
                            <?php }?>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
						 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
koszyk">Koszyk</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
koszyk"><img src="img/icon/cart.png" alt=""> <span></span></a>
                        <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                        <?php if ((isset($_SESSION['total']))) {?>
                        <div class="price">$<?php echo $_SESSION['total'];?>
</div>
                        <?php } else { ?>
                        <div class="price">$0.00</div>
                        <?php }?>
                        <?php }?>

                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    
    
    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11489693186467e3fc8eda37_11383987', 'top');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10912036346467e3fc8ee010_81006388', 'bottom');
?>



    <!-- Js Plugins -->
    <?php echo '<script'; ?>
 src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.nice-select.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.countdown.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.slicknav.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/mixitup.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'top'} */
class Block_11489693186467e3fc8eda37_11383987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_11489693186467e3fc8eda37_11383987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_10912036346467e3fc8ee010_81006388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_10912036346467e3fc8ee010_81006388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
