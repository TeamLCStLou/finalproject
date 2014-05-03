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

<div style="padding-top:5px;">
    <div style="width:95%;height:90%;margin-left:auto;margin-right:auto;background-color:#3D5C99;padding-top:15px;">
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
</div>
