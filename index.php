<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "30";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
        <?php
            // $servername = "db-connector";
            $servername = "151.106.124.201";
            $username = "vishal";
            $password = "test";
            $database = "testDB";
            
            $connect = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$connect) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo "Connected to MySQL successfully";
                $result = mysqli_query($connect, "SELECT * FROM appointment") or die(mysqli_error($connect));
                print_r(mysqli_fetch_array($result));

                echo "<br>";
            }
            
            // Close the connection
            mysqli_close($connect);

            if(isset($_GET['india'])) echo "INDIA IS THERE";
            else if(!isset($_GET['india'])) echo "INDIA IS NOT HERE";
            echo "<br>Watch the page reload itself in 5 seconds!";

            echo "<br><br>One can access the environment variables by defining them in the deployment config details..";
        ?>
        <p contentEditable="true">
            I am going to win for sure
        </p>
    </body>
</html>
