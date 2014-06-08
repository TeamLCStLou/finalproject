<style>

.prog-stat-table
{
    display: table-row;
    z-index:1;
}

.prog-stat-menubox
{
    display: table-data; 
    vertical-align: middle;
   
    width:180px;
    height: 35px;  
    
    border-top-style:dotted;
    border-top-color:white;
    border-top-width:thin;
    background-color:#8A0000;
//    background-color: red;    
}

div.prog-stat-img
{
    margin-right:5px;
    display: table-cell;
    vertical-align: middle;
    height: 30px;
    width:40px;
}

img.prog-stat-img
{
    max-height:100%;
}

div.prog-stat-txt
{
    padding-left:10px;
    display: table-cell;
    vertical-align: middle;
    height: 30px;
}

.prog-stat-menubox:hover 
{ 
    background-color: #2C426E;
    color:white;     
}


</style>

<div tabindex="0"  class="onclick-menu" style="width:40px;height:40px;">
    <?php if($status_item["pset"] !== $i): ?>     
        <img class="prog-rate" src="./images/icons/not-started.svg" title="Not Started" alt="Not Started"/>
    <?php else: ?>
        <img class="prog-rate" src="<?= $status_item["img_link"]; ?>" title="<?= $status_item["status"]; ?>" alt="<?= $status_item["status"]; ?>"/>


    <?php 
        if($array_int + 1 < count($prog_stat_result)):
            $array_int++;
        endif;
    endif; ?>                

    <ul class="onclick-menu-content">
    <?php foreach ($prog_stat_menu as $menu_item): ?>
<!--        <li><button onclick="alert('<?= $menu_item["status"] . "-" . $i; ?>')">
--> 
       <li><button>

           <div class="prog-stat-table">
<!--              <a onclick="SubmitProgStatus(<?= $menu_item["status_code"]; ?>, )"><div class="prog-stat-menubox" > 
-->
              <a href="<?= "./save_prog_status.php?PSET=" . $i . "&STATUS=" . $menu_item["status"] ?>"><div class="prog-stat-menubox" >

                 <div class="prog-stat-txt">
                    <img class="prog-stat-img" src="<?= $menu_item["img_link"]; ?>" title="<?= $menu_item["status"]; ?>" alt="<?= $menu_item["status"]; ?>"/>     
                 </div>
                 <div class="prog-stat-txt"
                    ><b><?= $menu_item["status"]; ?></b></div>
                 </div>
              </a>
           </div>
        </button></li>
    <?php endforeach ?>            
    </ul>
</div>
