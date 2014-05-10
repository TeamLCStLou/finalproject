

<!DOCTYPE html>

<html>
    
    <head>
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css"/>
    <link href= "css/mylcstyles.css" rel= "stylesheet"/>
    
    <title>View Profile-MyLaunchCode.com</title>
    </head>
    <br>
    <fieldset class="bar">
    <table>
    <tr>
    <td><a href="mylchomepage.php">Home</a></td>
    <td>
    <div style="float:right; margin-right: auto;"><a href="logout.php">Log Out</a></div></td>
    </tr>
    </table>
    </fieldset>
    <fieldset class="form">
    
   
    
    <body background="images/bckgnd.png">
    <div>

            <div id="top">
                <IMG class="imgcenter" alt="MyLaunchcode.com" src="images/MyLClogo.png"/></a>
            </div>
            </br>
            </br>
            <body>
            <table>
            <?php
            require("../includes/MyLCconfig.php");
         
            //$userid = $_GET['userid'];
            $userid = 20;
            
            $result = query("SELECT * FROM users WHERE id = $userid");
         foreach($result as $row)
            {
            
                print("<tr>" . "<td>" . "User: ". $row['username'] . "</td>" . "</tr>");
                print("<tr>" . "<td>" . "Preferred Lecture: " . $row['Lecture_Loc'] . "</td>" . "<tr>");
                print("<tr>" . "<td>" . "Location: " . $row['City_Loc'] . "</td>" . "</tr>");
                print("<tr>" . "<td>" . "Programming Experience: " . $row['ProgExp'] . "</td>" . "</tr>");
            
            }
            
            ?>
            </table>
    
    </body>
     </fieldset>
    </html>
    
