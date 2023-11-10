{extends file="main.tpl"}

{block name=top}

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
                                <a href="{$conf->action_root}sklep" class="primary-btn">Kup teraz <span class="arrow_right"></span></a>
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
                                <a href="{$conf->action_root}sklep" class="primary-btn">Kup teraz <span class="arrow_right"></span></a>
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
                <form action="{$conf->action_root}newletter">
                    <input type="text" placeholder="Twój email" name="email">
                    <button type="submit"><span class="icon_mail_alt"></span></button>
                </form>
            </div>
        </div>
    </div>
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
</div>
</div>
</footer>


    {/block}