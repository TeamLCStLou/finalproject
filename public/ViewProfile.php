

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
    <td><a href="profileEditForm.php">Edit My Profile</a></td>
    <td>
    <div style="float:right; margin-right: auto;"><a href="logout.php">Log Out</a></div></td>
    </tr>
    </table>
    </fieldset>
    <fieldset class="form">
    
   
    
    <body background="images/bckgnd.png">
    <style>
    </style>
    <div>

            <div id="top">
                <IMG class="imgcenter" alt="MyLaunchcode.com" src="images/MyLClogo.png"/></a>
            </div>
            </br>
            </br>
            <body>
            <h5>View Profile: </h5>
            <table>
            <?php
            require("../includes/MyLCconfig.php");
         
            //$userid = $_GET['userid'];
            $userid = 22;   // Temporary placeholder 
            
            $result = query("SELECT * FROM users WHERE id = $userid");
         foreach($result as $row)
            {
            
                print("<tr>" . "<td class=\"profilelabel\">" . "User: ". $row['username'] . "</td>" . "</tr>");
                print("<tr>" . "<td class=\"profilelabel\">" . "Preferred Lecture: " . $row['Lecture_Loc'] . "</td>" . "<tr>");
                print("<tr>" . "<td class=\"profilelabel\">" . "Location: " . $row['City_Loc'] . "</td>" . "</tr>");
                print("<tr>" . "<td class=\"profilelabel\">" . "Programming Experience: " . $row['ProgExp'] . "</td>" . "</tr>");
            
            }
                   print("<tr>" . "<td class=\"profilelabel\">" . "Availability: ");
                  
                   $result = query("SELECT * FROM user_availability WHERE user_id = $userid");
                
                   foreach($result as $row)
                   {
                        print($row['Availability'] . " ");
                   }
                   print("</td>");
                   print("</tr>");
            ?>
            
             </table>
             <P>
             <P>
              <?php require("../public/course_progress.php");
     ?>
    
    
    </body>
     </fieldset>
    </html>
    
