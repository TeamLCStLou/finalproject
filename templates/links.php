<style>
div#links-container
{
//    padding-top:5px;
    width:92%;
    
    height:auto;
    margin-top:5px;
    margin-bottom:10px;
    margin-left:auto;
    margin-right:auto;
    background-color:#3D5C99;
    padding-top:5px;
    padding-bottom:15px;
    padding-right:5px;
    padding-left:5px;
    border-style:solid;
    border-width:1px;
    border-color:#99C2EB;
}

table.links, td
{   
//    border-collapse:collapse;
    border:0px none;
    text-align:center;

}    

table.links
{
    width:92%;
//    padding:2px 2px 2px 2px;
}

td.links
{
    background-color:#FFFFFF;
//    border-color:#FFFFFF;
//    cellspacing:0px;
//    cellpadding:0px;
    border-width:0px;
}
    
</style>

<div id="links-container">
    <table class="links">
        <tr>
            <th style="text-align:left;"><b>Quick Links</b></th>
        </tr>
        <div>
        <?php foreach ($result as $linkitem): ?>
            <tr>
                <td class="links"><a href="<?= $linkitem["link_href"] ?>" target="_blank"> <?= $linkitem["link_text"]?></a></td>
            </tr>
        <?php endforeach ?>
        </div>
    </table>
</div>
