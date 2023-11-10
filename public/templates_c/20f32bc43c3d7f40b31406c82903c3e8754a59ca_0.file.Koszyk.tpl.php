<?php
/* Smarty version 4.1.0, created on 2023-05-19 22:15:04
  from 'H:\programy1\xampp\htdocs\fashion\app\views\Koszyk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6467d8c892ea04_37908958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20f32bc43c3d7f40b31406c82903c3e8754a59ca' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\Koszyk.tpl',
      1 => 1684527293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6467d8c892ea04_37908958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7721295116467d8c8925949_33496464', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_7721295116467d8c8925949_33496464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_7721295116467d8c8925949_33496464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Koszyk</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Strona Głowna</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep">Sklep</a>
                            <span>Koszyk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Produkt</th>
                                    <th>Ilość</th>
                                    <th>Łącznie</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                        <tr><td class="product__cart__item"><div class="product__cart__item__pic"><img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['zdjecie'];?>
" width="260" height="260"></div><div class="product__cart__item__text"><h6><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa"];?>
</h6><h6>rozmiar: <?php echo $_smarty_tpl->tpl_vars['p']->value["rozmiar"];?>
</h6><h5>$<?php echo $_smarty_tpl->tpl_vars['p']->value["cena"];?>
</h5></div></td><td class="quantity__item"><div class="quantity"><div class="pro-qty-2"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['ilosc'];?>
"></div></div></td><td class="cart__price">$ <?php echo $_smarty_tpl->tpl_vars['p']->value["cena"]*$_smarty_tpl->tpl_vars['p']->value["ilosc"];?>
</td><td class="cart__close"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usunProdukt/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><i class="fa fa-close"></i></a></td></tr> 
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep">Kontynuuj Zakupy</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__total">
                        <h6>Wartość koszyka</h6>
                        <ul>                           
                            <li>Wartość całkowita <span>$ <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></li>
                        </ul>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
zamow" class="primary-btn">Zamów</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

   
 

    

<?php
}
}
/* {/block 'top'} */
}
