<html>
    <head><title>INVERSION</title>
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
                $filename = $_POST['filename'];
                $sql="SELECT geneseq FROM virusdb WHERE vn='$filename'";
                $retval = mysqli_query($conn,$sql);
                if ($retval->num_rows > 0) {
                    echo "File to be created: ".$filename."<br>";
                    $file=fopen("C:/xampp/htdocs/chummakidumma/$filename.txt","w");
                    echo "Data file created !"."<br>";
                    $manipstring=$retval->fetch_assoc()["geneseq"];
                    echo "Original sequence is : ".$manipstring;
                    echo "<br>";
                    $manipstring1="";
                    for($i=0;$i<strlen($manipstring);$i++){
                        if($manipstring[$i]=='A'){
                            $manipstring1.='T';
                        }
                        else if($manipstring[$i]=='T'){
                            $manipstring1.='A';
                        }
                        else if($manipstring[$i]=='C'){
                            $manipstring1.='G';
                        }
                        else if($manipstring[$i]=='G'){
                            $manipstring1.='C';
                        }
                        else{
                            echo "Unknown read error; verify database.";
                        }
                    }
                    echo "mRNA Sequence is : ".$manipstring1;
                    fwrite($file,"Original Sequence is :\n");
                    fwrite($file,$manipstring);
                    fwrite($file,"\n");
                    fwrite($file,"mRNA Sequence is :\n");
                    fwrite($file,$manipstring1);
                    fclose($file);
                }
                else{
                    echo "Virus not found; inversion cannot be done";
                }
            }
        ?>
        <form method = "POST" action = "<?php $_PHP_SELF ?>">
            <center><table border=0 cellsapcing=0>
                <tr>
                    <td>Enter name of virus to transcript</td>
                    <td><input name="filename" type="text" id="filename"></td>
                </tr>
                <tr>
                    <td width=100></td>
                    <td><input name="add" type="submit" id="add"></td>
                </tr>
            </table></center>
        </form>
    </body>
</html>