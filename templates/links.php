<style>
table.links, td,th
{   
    border-collapse:collapse;
    border:1px solid green;
    text-align:center;
}    

table.links
{
    width:100%;
}
    
</style>

<div id="container" style="width:95%">
    <table class="links">
        <tr>
            <th>Quick Links</th>
        </tr>
        <?php foreach ($result as $linkitem): ?>

            <tr>
                <td><a href="<?= $linkitem["link_href"] ?>" </a><?= $linkitem["link_text"]?></td>
            </tr>

        <?php endforeach ?>
    </table>
</div>
