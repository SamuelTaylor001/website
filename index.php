<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <div>
            <?php
                $action = "home";
                include "includes\boostrap.php";
                include "includes\header.php";     
                include "includes\dbconnect.php"    
            ?>
        </div>
        <br><br><br><br>
        <?php
            //below is an example of how to output data from the database
            $sql = "SELECT forename FROM logintable";
            mysql_select_db("cwdb");

            $out = mysql_query($sql)or die("Could not access logintable: ".mysql_error());
            echo "<br>";
            while($row = mysql_fetch_array($out))
            {
                echo "User: {$row['username']}<br>";
            }    
            mysql_close($conn);
        ?>
    </body>

</html>