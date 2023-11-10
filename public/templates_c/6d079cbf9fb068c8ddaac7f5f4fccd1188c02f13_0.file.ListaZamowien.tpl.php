<?php
/* Smarty version 4.1.0, created on 2023-05-01 23:25:06
  from 'H:\programy1\xampp\htdocs\fashion\app\views\ListaZamowien.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64502e326ed608_23539271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d079cbf9fb068c8ddaac7f5f4fccd1188c02f13' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\ListaZamowien.tpl',
      1 => 1682976302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64502e326ed608_23539271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37124006564502e32658646_38746762', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_37124006564502e32658646_38746762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_37124006564502e32658646_38746762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Id zamowienia</th>
            <th>data</th>
            <th>status</th>
           
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["idzamowienie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["data"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["status"];?>
</td><td><a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
szczegolyZamowienia/<?php echo $_smarty_tpl->tpl_vars['p']->value['idzamowienie'];?>
">Szczegóły</a></td></tr>
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
