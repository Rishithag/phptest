<html>
    <head>
        <center>    
            <h1>17L31A0569</h1>
        </center>
    </head>
    <body style="background: pink">
        <center>
            <p style="font-size:30px">Gurijala Rishitha</p>
            
        </center>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";

            // Creating connection
            $conn = new mysqli($servername, $username, $password);

            // Checking connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            echo "Connected successfully";
        ?>
        
    </body>
</html>