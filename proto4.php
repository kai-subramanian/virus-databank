<html>
    <head>
        <title>Amino Acid Transcription</title>
        <style>
         table{
            width = 400; 
            border = 0;
            cellspacing = 1; 
            cellpadding = 2;
         }
         body{
            background-color:#1570c7;
         }
         td{
            color:#ffff11;
            font-size:20px;
            font-family:Lucida Sans;
         }
         #dum{
            font-size:30px;
         }
      </style>
    </head>
    <body>
    <?php
        if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'Skailash@2k';
            $db = 'virus1';
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
            if(!$conn) {
               die('Could not connect: ' . mysqli_error());
            }
            $v_name = $_POST['vn'];
            $sql="SELECT * FROM virusdb WHERE vn='$v_name'";
            $retval = mysqli_query($conn,$sql);
            if(! $retval ) {
               die('Could not enter data!!!: ' . mysqli_error($conn));
            }   
            //echo "Displaying data successfully\n";  
        }
        if($retval->num_rows == 0){
            echo "Virus not found !";
        }
        else{
            while($row = $retval->fetch_assoc()){
                echo "Gene Sequence " . $row["geneseq"];
            }
        }
        /*if ($retval->num_rows > 0) {
            while($row = $retval->fetch_assoc()){
                echo "Gene Sequence " . $row["geneseq"];
            }
        }
        else{
            echo "Virus Not Found";
        }*/
        error_reporting(0);
    ?>
        <form method = "POST" action = "<?php $_PHP_SELF ?>">
        <center><table border="0" cellspacing="0">
            <tr>
                <td>Enter name of virus to display</td>
                <td><input name="vn" type="text" id="vn"></td>
            </tr>
            <tr>
                <td width = "100"> </td>
                <td><input name = "add" type = "submit" id = "add" value = "Search Virus"></td>
            </tr>
        </table></center>
        </form>
    </body>
</html>