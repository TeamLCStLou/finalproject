<style>
    
    
    div.course-progress
    {
        padding-top:20px;
        height:100%;
        min-height:500px;
    }
    
    
    table.prog-stat
    {
        background-color:#8A0000;
        width:90%;
        opacity:0.85;
        margin-left:auto;
        margin-right:auto;
    }
    
    div.icon
    {
        height:40px;
        width:40px;
        margin:auto auto auto auto;
    
    }

    div.icon:hover
    {
        background-color:#CC3300;
        cursor: pointer;
    }
    
    img.prog-rate
    {
//        max-width:100%; 
        max-height:100%;
//        width:100%;
//        height:100%;
    }


    div.prog-row
    {
        position:relative;    
    }
 
    div.hover-menu
    {
//        position: relative;
        display: inline-block; 
        visibility:hidden;
//        border-color: black;
//        border-style: solid;
//        border-width: 1px;
        position:absolute;
        top:100px;
        z-index:99;
    }
 
    div.hover-menu:before
    {
        content: "";
    }

    div.icon:focus div.prog-stat-contain
    {
        /* visible if menu is opened */
        visibility: visible;
    }    

   .onclick-menu:hover
    {
        background-color:#CC3300;
        cursor: pointer;
    }   
 

    .onclick-menu
    {
        position: relative;
        display: inline-block;
    }

    .onclick-menu:before 
    {
//        content: "";
    }
    .onclick-menu:focus .onclick-menu-content 
    {
        display: block;
    }
    .onclick-menu-content 
    {
        position: absolute;
        z-index: 1;
//        background-color:#CC3300;
        background-color:#8A0000;


        display: none;
        list-style: none;
    }    


</style>

<div class="course-progress">
   <div class="prog-row">
    <table class="prog-stat">
        <tr>
            <th style="background-color:#8A0000;text-align:left;width:30%;"colspan="11"> <b> Course Progress </b></th>
        </tr>
        <tr style="background-color:#8A0000;">
            <td> <b> pset </b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/0/pset0/pset0.html"> 0 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/1/pset1/pset1.html"> 1 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/2/pset2/pset2.html"> 2 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/3/pset3/pset3.html"> 3 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/4/pset4/pset4.html"> 4 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/5/pset5/pset5.html"> 5 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/6/pset6/pset6.html"> 6 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/7/pset7/pset7.html"> 7 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/8/pset8/pset8.html"> 8 </a></b></td>
            <td> <b><a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/project/project.html"> Final </a></b></td>
        </tr>
        <tr style="background-color:#8A0000;">
            <td> <b> status </b></td>
            <?php 
                  $array_int = 0;
                  for ($i = 0; $i <10 ; $i++):
                    $status_item = $prog_stat_result[$array_int];
            ?>        
                    <td> <b> 
                         <?php require("../public/prog_status_menu.php"); ?>            
                    </b></td>      
            <?php endfor; ?>                                                                       

        </tr>
        <tr style="background-color:#8A0000;">
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
            <td> <b>  </b></td>
        </tr>        
    </table>
  </div>
</div>

