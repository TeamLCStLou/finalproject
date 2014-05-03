<div style="padding-top:25px;">
<table style="background-color:red;width:90%;opacity:0.75;margin-left:auto;margin-right:auto" >
  <tr>
    <td style="background-color:red;width:30%;">    
        <img height="150px" style="opacity:1.0;border-style:groove; border-width:1px;" src="http://static2.businessinsider.com/image/4f3433986bb3f7b67a00003c/a-parasite-found-in-cats-could-be-manipulating-our-brains.jpg"/>
    </td>
    <td style="background-color:red;width:70%;text-align:left;">

            <p style="margin-bottom:3px;"><b style="font-size:x-large;"><?= $FName ." " . $LName ;?> </b></p>
            <p>
            <b>Email:</b> <?= $Email ;?> <br/>        
            <b>Phone:</b> <?= $Phone ;?> <br/>        
            <b>City Location: </b><?= $City_Loc ?><br/>
            <b>Lecture Location:</b> <?= $Lecture_Loc ?><br/>
            <b>Availability: </b> 
                <?php foreach ($avail_result as $avail_item):
                
                     print($avail_item['Availability']. "  |  "); 
                     
                     endforeach 
                     
                ?>
                <br/>
            <b>Programming Experience:</b> <?= $ProgExp ?><br/>

        </p>
    </td>    
  </tr>
</table>
</div> 
</div>
