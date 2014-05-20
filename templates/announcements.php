<style>

div#announcements-container
{
//    padding-top:5px;
    width:92%;
    
    height:auto;
    min-height: 50px;
    max-height: 250px;
    margin-top:5px;
    margin-bottom:10px;
    margin-left:auto;
    margin-right:auto;
    background-color:#003366;
    opacity:0.75;
    padding-top:5px;
    padding-bottom:15px;
    padding-right:5px;
    padding-left:5px;
    border-style:solid;
    border-width:1px;
    border-color:#99C2EB;
    overflow-y:auto;
}

table.announcements
{
    width:100%;
    padding:2px 2px 2px 2px;
}

td.announcements,th.announcements 
{
    background-color: #ADD6FF;
    border-color:#5C748D;
    cellspacing:5px;
    padding:0px 5px 0px 5px;
    margin-left:10px;
    border-width:0px;
    font-family: 'Oswald', sans-serif;
    text-align:left;
}
    
th.announcements 
{
    border:1px solid;
    border-color:white;
    background-color:#002447;
    color:white;
    font-size: x-large;
    text-align:center;
}

span.message
{
    margin-left:10px;
}

span.timestamp
{
    font-size: small;
    font-variant:small-caps;
    color:#003300;
    font-style:italic;
}

    
</style>

<?php 
    // Only print if there are announcements
    if($announcement_result):
?>
<div id="announcements-container">
    <table class="announcements">
        <tr>
            <th class="announcements"><b>Announcements</b></th>
        </tr>
        <div>
        <?php foreach ($announcement_result as $announcement_item): ?>
            <tr>
                <td class="announcements"> <span class="timestamp">(posted: <?= $announcement_item["created_on"]?>)</span> <span class="message"><?= $announcement_item["message"]?> </span></td>
            </tr>
        <?php endforeach ?>
        
        <?php if($_SESSION["admin"] == 1): ?>
            
            <tr><td class="announcements"><a href="../public/add_announcement.php"> Add </a> | <a href="../public/update_announcements.php"> Update </a></td></tr>

        <?php endif; ?>

        </div>
    </table>
    
    
</div>
<?php
     endif;
?>

