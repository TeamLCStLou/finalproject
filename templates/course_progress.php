<style>
    div.course-progress
    {
        padding-top:20px;
        height:100%;
        min-height:500px;
    }
    
    div.icon
    {
        height:40px;
        width:40px;
        margin:auto auto auto auto;
    
    }
    
    img.prog-rate
    {
        height:100%;
        width:100%;
    }

</style>

<div class="course-progress">
    <table style="background-color:#8A0000;;width:90%;opacity:0.85;margin-left:auto;margin-right:auto">
        <tr>
            <th style="background-color:#8A0000;text-align:left;width:30%;"colspan="11"> <b> Course Progress </b></th>
        </tr>
        <tr style="background-color:#8A0000;">
            <td> <b> pset </b></td>
            <td> <b> <a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/0/pset0/pset0.html"> 0 </a></b></td>
            <td> <b> <a href="http://d2o9nyf4hwsci4.cloudfront.net/2014/x/psets/1/pset1/pset1.html"> 1 </a></b></td>
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
                for ($i = 0; $i <10 ; $i++)
                {                
                    $status_item = $prog_stat_result[$array_int];
                    if($status_item["pset"] !== $i)
                    {
            ?>        
                        <td> <b> <div id="circle" class="icon">
                            <img class="prog-rate" src="./images/icons/not-started.svg" title="Not Started" alt="Not Started"/>
                        </div></b></td>

            <?php
                    }
                    else
                    {
             ?>
                        <td> <b> <div id="circle" class="icon">
                            <img class="prog-rate" src="<?= $status_item["img_link"]; ?>" title="<?= $status_item["status"]; ?>" alt="<?= $status_item["status"]; ?>"/>
                        </div></b></td>                    

             <?php
                        if($array_int + 1 < count($prog_stat_result))
                        {    
                            $array_int++;
                        }
                    }
                }                
            ?>

<!--            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/happy_times-pink.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/happy_times-pink.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/hot-pink.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/help-pink.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/not-started.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/not-started.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/not-started.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/not-started.svg"/></div></b></td>
            <td> <b> <div id="circle" class="icon"><img class="prog-rate" src="../images/icons/not-started.svg"/></div></b></td>
-->
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
