<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<style>

#header
{
    width:100%;
    height:75px;
    background-image: url("../images/bckgnd.png");
    background-repeat: repeat-x;
    border-width:1px;
    border-style:solid;
}

#footer
{
    width:100%;
    height:75px;
    background-image: url("../images/bckgnd.png");
    background-repeat: repeat-x;
    border-width:1px;
    border-style:solid;
    
}

* (better) have a <div> that is position: absolute before #main and the same height as #main, then apply the background image and opacity: 0.2; filter: alpha(opacity=20);

#left-content-bkgrd
{
    background-image: url("http://elitemarketingevents.com/elitewp/wp-content/uploads/2013/08/City-of-St-Louis-skyline.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    Opacity:0.2;
}

#left-content
{
//    background-image: url("http://elitemarketingevents.com/elitewp/wp-content/uploads/2013/08/City-of-St-Louis-skyline.jpg");
//    background-repeat: no-repeat;
//    background-size:cover;
//    Opacity:0.2;
}
b
{
    font-family: 'PT Sans Narrow', 'sans-serif';
}    
</style>


<div id="container" style="width:90%;height="800px;">
    <div id="header">
        <img class="imgcenter" alt="MyLaunchcode.com" src="../images/MyLClogo.png" style="height:auto;width:auto;max-height:98%;"/>        

    </div>
    
    <div id="content" style="width:100%">
        <div id="left-content" style="height:600px;width:75%;float:left;background-color:red;" >
            <table style="background-color:red;width:100%;opacity:0.9;" >
              <img class="imgcenter" alt="MyLaunchcode.com" src="../images/MyLClogo.png" style="height:auto;width:auto;max-height:98%;"/>   
              <tr>
                <td style="background-color:red;width:30%;">    
                    <img height="150px" style="border-style:groove; border-width:1px;" src="http://static2.businessinsider.com/image/4f3433986bb3f7b67a00003c/a-parasite-found-in-cats-could-be-manipulating-our-brains.jpg"/>
                </td>
                <td style="background-color:red;width:70%;text-align:left;">
                    <b>Name:</b> Stephen Smith<br/>
                    <b>City Location:</b> South City<br/>
                    <b>Lecture Location:</b> Central Library<br/>
                </td>    
              </tr>
            </table>
        </div>

        <div id="right-content" style="height:600px;width:25%;float:right;background-color:#FFCCCC;">
            <?php require("../public/links.php"); ?>
        </div>
               
    </div>  

    
</div>

