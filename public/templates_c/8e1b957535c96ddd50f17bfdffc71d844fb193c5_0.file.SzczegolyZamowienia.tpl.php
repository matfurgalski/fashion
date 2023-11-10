<?php
/* Smarty version 4.1.0, created on 2023-05-25 21:42:09
  from 'H:\programy1\xampp\htdocs\fashion\app\views\SzczegolyZamowienia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_646fba1135dbe1_90840394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1b957535c96ddd50f17bfdffc71d844fb193c5' => 
    array (
      0 => 'H:\\programy1\\xampp\\htdocs\\fashion\\app\\views\\SzczegolyZamowienia.tpl',
      1 => 1685043689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646fba1135dbe1_90840394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_591521117646fba113512c8_82894340', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_591521117646fba113512c8_82894340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_591521117646fba113512c8_82894340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<p>
ID zamowienia:  <?php echo $_smarty_tpl->tpl_vars['idZamowienia']->value;?>

<br>
ID użytkownika: <?php echo $_smarty_tpl->tpl_vars['p']->value["idUser"];?>

<br>
Imie: <?php echo $_smarty_tpl->tpl_vars['p']->value["imie"];?>

<br>
Nazwisko: <?php echo $_smarty_tpl->tpl_vars['p']->value["nazwisko"];?>

<br>
Email: <?php echo $_smarty_tpl->tpl_vars['p']->value["email"];?>

<br>
Adres: <?php echo $_smarty_tpl->tpl_vars['p']->value["adres"];?>

<br>
Kod pocztowy: <?php echo $_smarty_tpl->tpl_vars['p']->value["kod_pocztowy"];?>

</p>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Id produktu</th>           
            <th>Nazwa</th>
            <th>Rozmiar</th>
            <th>Firma</th>
            <th>Ilosc</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["Produkty_idProdukty"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["rozmiar"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["firma"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["ilosc"];?>
</td><td></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>

<!-- 
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
zmienStatus" method="post">
        <div class="form-group row">
          <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-4">
            <input type="text"  class="form-control" id="status" placeholder="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
">
          </div>
        </div>
      
        <div class="pure-controls">
                <input type="submit" class="site-btn" value="Zmień status"/>
                <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
listaZamowien">Powrót</a>
            </div>
        <input type="hidden" name="idzamowienie" value="<?php echo $_smarty_tpl->tpl_vars['idZamowienia']->value;?>
">
      </form> -->
      <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
zmienStatus" method="post">
        

      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Status</label>
      <?php if ($_smarty_tpl->tpl_vars['status']->value == "w trakcie realizacji") {?>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" value = "1" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          W trakcie realizacji
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" value = "2" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault1">
          Zrealizowane
        </label>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['status']->value == "zrealizowane") {?>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" value = "1" id="flexRadioDefault1" >
        <label class="form-check-label" for="flexRadioDefault1">
          W trakcie realizacji
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" value = "2" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Zrealizowane
        </label>
      </div>
      <?php }?>

      <div class="pure-controls">
        <input type="submit" class="site-btn" value="Zapisz"/>
        <a class="site-btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
listaZamowien">Powrót</a>
    </div>
    
    <input type="hidden" name="idzamowienie" value="<?php echo $_smarty_tpl->tpl_vars['idZamowienia']->value;?>
">
    </form>
   
 

    <?php
}
}
/* {/block 'top'} */
}
