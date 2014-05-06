<style>
table.links, td
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
    <div style="width:92%;height:90%;margin-left:auto;margin-right:auto;background-color:#3D5C99;padding-top:5px;padding-bottom:15px;padding-right:5px;padding-left:5px;margin-bottom:10px;border-style:solid;border-width:1px;border-color:#99C2EB;">
        <table class="links">
            <tr>
                <th style="text-align:left;"><b>Quick Links</b></th>
            </tr>
            <?php foreach ($result as $linkitem): ?>

                <tr style="background-color:#FFFFFF;">
                    <td><a href="<?= $linkitem["link_href"] ?>" target="_blank"> <?= $linkitem["link_text"]?></a></td>
                </tr>

            <?php endforeach ?>
        </table>
    </div>
</div>
