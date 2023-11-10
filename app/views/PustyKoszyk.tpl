{extends file="main.tpl"}

{block name=top}


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Koszyk</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Strona Głowna</a>
                            <a href="{$conf->action_root}sklep">Sklep</a>
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
                                {foreach $data as $p}
                        {strip}
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                           
                                            <img src="{$p['zdjecie']}" width="260" height="260">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{$p["nazwa"]}</h6>
                                            <h6>rozmiar: {$p["rozmiar"]}</h6>
                                            <h5>${$p["cena"]}</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input  type="text"  value="{$p['ilosc']}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ {$p["cena"]*$p["ilosc"]}</td>
                                    
                                    <td class="cart__close"><a href="{$conf->action_url}usunProdukt/{$p['id']}"><i class="fa fa-close"></i></a></td> 
                                </tr>
                                {/strip} 
                                {/foreach}
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{$conf->action_root}sklep">Kontynuuj Zakupy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <i class="fa fa-spinner">Dodaj coś do koszyka!</i> 
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="cart__total">
                        <h6>Wartość koszyka</h6>
                        <ul>                           
                            <li>Wartość całkowita <span>$ {$smarty.session.total}</span></li>
                        </ul>
                        <a href="{$conf->action_url}zamow" class="primary-btn">Zamów</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

   
 

    

{/block}