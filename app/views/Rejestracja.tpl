

{extends file="main.tpl"}

{block name=top}
<section class="checkout spad">
    <form action="{$conf->action_root}rejestracja" >
    <div class="col-lg-8 col-md-6">
    
        <h6 class="checkout__title">Rejestracja</h6>
        
        <div class="col-lg-6">
                <div class="checkout__input">
                    <p>Login<span>*</span></p>
                    <input id="login" type="text" placeholder="login" name="login" value="{$form->login}">
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
            <input id="email" type="text" placeholder="email" name="email" value="{$form->email}">
        </div>
    </div>

    <div class="col-lg-6">
        <div class="checkout__input">
            <p>Imię<span>*</span></p>
            <input id="imie" type="text" placeholder="imie" name="imie" value="{$form->imie}">
        </div>  
</div>

<div class="col-lg-6">
    <div class="checkout__input">
        <p>Nazwisko<span>*</span></p>
        <input id="nazwisko" type="text" placeholder="nazwisko" name="nazwisko" value="{$form->nazwisko}">
    </div>
</div>

<div class="col-lg-6">
    <div class="checkout__input">
        <p>Adres<span>*</span></p>
        <input id="adres" type="text" placeholder="adres" name="adres" value="{$form->adres}">
    </div>
</div>

<div class="col-lg-6">
    <div class="checkout__input">
        <p>Kod pocztowy<span>*</span></p>
        <input id="kod_pocztowy" type="text" placeholder="kod_pocztowy" name="kod_pocztowy" value="{$form->kod_pocztowy}">
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





{block name=messages}


{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}
{/block}


