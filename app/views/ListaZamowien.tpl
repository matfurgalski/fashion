{extends file="main.tpl"}

{block name=top}


    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Id zamowienia</th>
            <th>data</th>
            <th>status</th>
           
        </tr>
    </thead>
    <tbody>
    {foreach $data as $p}
    {strip}
        <tr>
            <td>{$p["idzamowienie"]}</td>
            <td>{$p["data"]}</td>
            <td>{$p["status"]}</td>
           
            <td>
                <a class="site-btn" href="{$conf->action_url}szczegolyZamowienia/{$p['idzamowienie']}">Szczegóły</a>
             
            </td>
        </tr>
    {/strip}
    {/foreach}
    </tbody>
    </table>


    {/block}