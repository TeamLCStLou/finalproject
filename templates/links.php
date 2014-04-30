<style>
table.links, td,th
{   
    border-collapse:collapse;
//    border:1px solid green;
    text-align:center;

}    

table.links
{
    width:100%;
    padding:2px 2px 2px 2px;

}
    
</style>

<div id="container" style="width:95%;margin-left:auto;margin-right:auto;">
    <table class="links">
        <tr>
            <th>Quick Links</th>
        </tr>
        <?php foreach ($result as $linkitem): ?>

            <tr>
                <td><a href="<?= $linkitem["link_href"] ?>" target="_blank"> <?= $linkitem["link_text"]?></a></td>
            </tr>

        <?php endforeach ?>
    </table>
</div>
