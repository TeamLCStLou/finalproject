<style>

nav#prog-stat
{
//    background-color:green;
    width:250;
}

ul.prog-stat
{
 list-style: none;
}

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
    background-color: pink;    
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
}

</style>

<nav>
<ul class="prog-stat">
    <?php foreach ($prog_stat_menu as $menu_item): ?>
        <li>
<div class="prog-stat-table">
            <a onclick="SubmitProgStatus(<?= $menu_item["status_code"]; ?>, )"><div class="prog-stat-menubox" >
                <div class="prog-stat-txt">
                    <img class="prog-stat-img" src="<?= $menu_item["img_link"]; ?>" title="<?= $menu_item["status"]; ?>" alt="<?= $menu_item["status"]; ?>"/>     
               </div>
              <div class="prog-stat-txt"><b><?= $menu_item["status"]; ?></b></div>
           </div></a>
</div>
        </li>
    <?php endforeach ?>

<ul>

</nav>

