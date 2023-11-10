<?php
/* Smarty version 4.1.0, created on 2023-05-20 09:01:33
  from 'H:\programy1\xampp\htdocs\fashion\app\views\SklepWomen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6468704d429319_16081866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4056774a17ce3fd45a173a3c69c9d585ff05fc40' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\SklepWomen.tpl',
      1 => 1684566088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6468704d429319_16081866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5312495726468704d41eb11_42467987', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_5312495726468704d41eb11_42467987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_5312495726468704d41eb11_42467987',
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
                        <h4>Sklep</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Strona Główna</a>
                            <span>Sklep</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">              
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                    
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Kategorie</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklep">Wszystko </a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklepMen">Mężczyźni </a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklepWomen">Kobiety </a></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
sklepKids">Dzieci </a></li>
                                                    
          
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                  
                    </div>
                    <div class="row">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                        <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?php echo $_smarty_tpl->tpl_vars['p']->value['zdjecie'];?>
"></div><div class="product__item__text"><h6><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa"];?>
</h6><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
koszykAdd/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProdukty'];?>
" class="add-cart">+ Add To Cart</a><h5>$<?php echo $_smarty_tpl->tpl_vars['p']->value["cena"];?>
</h5><h5><?php echo $_smarty_tpl->tpl_vars['p']->value["typ"];?>
</h5></div></div></div> 
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                   
                    </div>            
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <?php
}
}
/* {/block 'top'} */
}
