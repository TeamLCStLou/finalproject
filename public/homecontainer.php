<!--<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
-->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

<style>


#header
{
    width:100%;
    height:75px;
//    background-image: url("../images/bckgnd.png");
//    background-repeat: repeat-x;
    background-color: #0F2E4C;
    Opacity:0.9;
//    border-width:1px;
//    border-style:solid;
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

#left-content
{
    background-image: url("http://upload.wikimedia.org/wikipedia/commons/d/de/St_Louis_night_expblend.jpg");
//    background-image: url("http://elitemarketingevents.com/elitewp/wp-content/uploads/2013/08/City-of-St-Louis-skyline.jpg");
    background-repeat: no-repeat;
    background-size:cover;
//    Opacity:0.2;
}
b, p
{
//    font-family: 'PT Sans Narrow', 'sans-serif';
    font-family: 'Oswald', sans-serif;
    color: white;
}    
</style>


<div id="container" style="width:90%;">
    <div id="header">
        <div style="width:90%;">
           <img class="imgcenter" alt="MyLaunchcode.com" src="http://launchcodestl.com/assets/logo-white-eaaa6c175ca5f34175c60ca6ed9b1e60.png" style="position:relative;height:auto;width:auto;max-height:50%;"/>                
        </div>

        <img class="imgcenter" alt="MyLaunchcode.com" src="../images/MyLClogo.png" style="height:auto;width:auto;max-height:98%;"/>        

    </div>
    
    <div id="content" style="width:100%">
        <div id="left-content" style="height:800px;width:75%;float:left;background-color:red;" >
            <div>
                <?php require("../public/profileDetails.php"); ?>
                
                <?php require("../public/course_progress.php"); ?>
            </div>
        <div id="right-content" style="height:800px;width:25%;float:right;background-color:#2C426E;">
            <?php require("../public/links.php"); ?>
        </div>
               
    </div>  

    
</div>

