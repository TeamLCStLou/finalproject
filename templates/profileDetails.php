<style>

    div#profile
    {
        padding-top:25px;
        border-radius:20px;
    }
    
    table.profile
    {
        background-color:red;
        width:90%;
        opacity:0.75;
        margin-left:auto;
        margin-right:auto; 
    }
    
    td.profile
    {
        background-color:red;
        width:70%;
        text-align:left;"
    }
    
    td.profile-img
    {
        background-color:red;
        width:30%;
    }

    
    img.profile
    {
        opacity:1.0;
        -webkit-clip-path: circle(50%,50%,40%);
        clip-path: circle(50%,50%,40%);
        border-style:groove; 
        border-width:1px;
        height:200px;
    }
    
    p.profile-name
    {
        margin-bottom:3px;
        font-size:x-large;
    }
    
</style>

<div id="profile">
    <table class="profile">
        <tr>
            <td class="profile-img">    
                    <img class="profile" src="http://static2.businessinsider.com/image/4f3433986bb3f7b67a00003c/a-parasite-found-in-cats-could-be-manipulating-our-brains.jpg"/>
            </td>
            <td class="profile">
                <p class="profile-name"><b><?= $FName ." " . $LName ;?> </b></p>
                <p>
                <b>Email:</b> <?= $Email ;?> <br/>        
                <b>Phone:</b> <?= $Phone ;?> <br/>        
                <b>City Location: </b><?= $City_Loc ?><br/>
                <b>Lecture Location:</b> <?= $Lecture_Loc ?><br/>
                <b>Availability: </b> 
                    <?php
                         foreach ($avail_result as $avail_item):
                    
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
