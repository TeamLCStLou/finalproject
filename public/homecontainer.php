<!--
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
-->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<style>
    div#dash-header
    {
        width:100%;
        height:75px;
        background-color: #0F2E4C;
        Opacity:0.9;
    }

    div#image-header
    {

        position:relative;
        float:right;
        margin: 0px 10px 0px 0px;
//        align-self:center;
    }
    div#dash-container
    {
        min-height: 100%;
        height: 800px;
        width:90%;
        position: relative;
        overflow: hidden;
        padding-bottom: 30px;
    }

    div#dash-content
    {
        min-height: 100%;
        height:100%;
        width:100%;
    }

    div#dash-left-content
    {
        background-image: url("http://upload.wikimedia.org/wikipedia/commons/d/de/St_Louis_night_expblend.jpg");
    //    background-image: url("http://elitemarketingevents.com/elitewp/wp-content/uploads/2013/08/City-of-St-Louis-skyline.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        min-height: 100%;
        height:100%;
        width:75%;
        float:left;
        background-color:red;        
        padding-bottom: 15px;
    //    Opacity:0.2;
    }

    div#dash-right-content
    {
//        min-height: 100%;
        height:100%;
        width:25%;
        float:right;
        background-color:#2C426E;
        padding-bottom: 15px;
    }

    b, p
    {
    //    font-family: 'PT Sans Narrow', 'sans-serif';
        font-family: 'Oswald', sans-serif;
        color: white;
    }   
    
    .circle
    {
        background-color:red;
	    border-radius: 50%;
	    width: 100px;
	    height: 100px;  
	}
</style>

<div id="dash-container">
    <div id="dash-header">
        <div id="image-header">
           <img alt="MyLaunchcode.com" src="../images/LC-logo.png" style="max-height:40%;"/>    
           <a href="logout.php">Log Out</a>            
        </div>
        <div>
<!--            <img alt="MyLaunchcode.com" src="../images/MyLClogo.png" style="height:auto;width:auto;max-height:98%;"/>        
-->
            <?php require("../public/logo.php"); ?>

        </div>

    </div>
    
    <div id="dash-content">
        <div id="dash-left-content">
            <div>
                <?php require("../public/profileDetails.php"); ?>                
                <?php require("../public/course_progress.php"); ?>

            </div>
        </div>    
        <div id="dash-right-content">
            <?php require("../public/links.php"); ?>
            <?php require("../public/reddit.php"); ?>
            </div>
        </div>         
    </div>      
</div>
 
