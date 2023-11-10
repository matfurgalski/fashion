<?php
/* Smarty version 4.1.0, created on 2023-04-26 19:56:54
  from 'H:\programy1\xampp\htdocs\fashion\app\views\ListaProduktow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644965e6ea2470_37490931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075691a153fde1a0c5e483fe183d74ae46a7fd04' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\ListaProduktow.tpl',
      1 => 1673092506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644965e6ea2470_37490931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_645429727644965e6e99355_77045835', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_645429727644965e6e99355_77045835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_645429727644965e6e99355_77045835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    

 <p class="ex1">
    <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
dodajProdukt">Dodaj Produkt</a>
</p>
    

  
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>idProdukty</th>
            <th>nazwa</th>
            <th>rozmiar</th>
            <th>cena</th>
            <th>idTyp_odzieży</th>
            <th>firma</th>
            <th>zdjecie</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["idProdukty"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["rozmiar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["cena"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["idTyp_odziezy"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["firma"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["zdjecie"];?>
</td><td><a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
edycjaProduktow/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProdukty'];?>
">Edytuj</a>&nbsp;<a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usunProduktZListy/<?php echo $_smarty_tpl->tpl_vars['p']->value['idProdukty'];?>
">Usuń</a></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>


    <?php
}
}
/* {/block 'top'} */
}
