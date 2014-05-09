<style>
    div#reddit-container
    {
        width:92%;
        margin-left:auto;
        margin-right:auto;
        max-height:80%;
 //       overflow-y:auto;
        background-color:#3D5C99;
        padding-right:5px;
        padding-left:5px;
        padding-top:5px;
        padding-bottom:5px;
        border-style:solid;
        border-width:1px;
        border-color:#99C2EB;
    }
    
    div#reddit-header
    {
        width:92%;  
        text-align:left;
    }
   
    div#reddit-widget
    {
        margin-left:auto;
        margin-right:auto;
        padding-top:5px;
        padding-bottom:5px;
        min-height:50px;
        max-height:400px;
        overflow-y:auto;
    }

</style>

<div id="reddit-container">
    <div id="reddit-header">
            <b>LaunchCode CS50x Reddit - Top This Week</b>
    </div>

    <div id="reddit-widget">
        <div>
            <script src="http://www.reddit.com/r/LaunchCodeCS50x/hot/.embed?limit=10&t=week" type="text/javascript"></script>
        </div>
    </div>
</div>


 
