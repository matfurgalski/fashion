{extends file="main.tpl"}

{block name=top}
{foreach $data2 as $p}
<p>
ID zamowienia:  {$idZamowienia}
<br>
ID użytkownika: {$p["idUser"]}
<br>
Imie: {$p["imie"]}
<br>
Nazwisko: {$p["nazwisko"]}
<br>
Email: {$p["email"]}
<br>
Adres: {$p["adres"]}
<br>
Kod pocztowy: {$p["kod_pocztowy"]}
</p>
{/foreach}


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
    {foreach $data as $p}
    {strip}
        <tr>
            <td>{$p["Produkty_idProdukty"]}</td>            
            <td>{$p["nazwa"]}</td>
            <td>{$p["rozmiar"]}</td>
            <td>{$p["firma"]}</td>
            <td>{$p["ilosc"]}</td>
            <td>
               
             
            </td>
        </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>

<!-- 
    <form action="{$conf->action_root}zmienStatus" method="post">
        <div class="form-group row">
          <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Status</label>
          <div class="col-sm-4">
            <input type="text"  class="form-control" id="status" placeholder="status" name="status" value="{$status}">
          </div>
        </div>
      
        <div class="pure-controls">
                <input type="submit" class="site-btn" value="Zmień status"/>
                <a class="site-btn" href="{$conf->action_root}listaZamowien">Powrót</a>
            </div>
        <input type="hidden" name="idzamowienie" value="{$idZamowienia}">
      </form> -->
      <form action="{$conf->action_root}zmienStatus" method="post">
        

      <label for="inlineFormInputName2" class="col-sm-2 col-form-label">Status</label>
      {if $status == "w trakcie realizacji"}
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
      {/if}

      {if $status == "zrealizowane"}

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
      {/if}

      <div class="pure-controls">
        <input type="submit" class="site-btn" value="Zapisz"/>
        <a class="site-btn" href="{$conf->action_root}listaZamowien">Powrót</a>
    </div>
    
    <input type="hidden" name="idzamowienie" value="{$idZamowienia}">
    </form>
   
 

    {/block}