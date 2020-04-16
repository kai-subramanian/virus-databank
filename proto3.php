<html>
   <head>
      <title>Add New Virus Data</title>
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
            $v_name = $_POST['v_name'];
            $v_s1 = $_POST['v_s1'];
            $v_s2= $_POST['v_s2'];
            $yod=$_POST['yod'];
            $s_n=$_POST['s_n'];
            $c_n=$_POST['c_n'];
            $struct=$_POST['struct'];
            $affect=$_POST['affect'];
            $geneseq=$_POST['geneseq'];
            if(strlen($geneseq)==15){  
               $sql = "INSERT INTO virusdb". 
               "(vn,v_s1,v_s2,yod,country,scientist,rnaordna,pkorak,geneseq) ". "VALUES('$v_name','$v_s1','$v_s2','$yod','$c_n','$s_n','$struct','$affect','$geneseq')";
               $retval = mysqli_query($conn,$sql);
               if(! $retval ) {
                  die('Could not enter data!!!: ' . mysqli_error($conn));
               }   
               echo "Entered data successfully\n";   
            }
            else{
               echo "Invalid gene sequence";
            }
         }
      ?>
      <form name="f1" method = "post" action = "<?php $_PHP_SELF ?>"><center>
         <table>
            <tr><td id="dum" colspan=2>INSERT A NEW VIRUS DATA INTO THE DATABASE</td></tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>Virus Name</td>
               <td><input name = "v_name" type = "text" 
                  id = "v_name"></td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>                  
            <tr>
               <td>Prominent Symptom 1</td>
               <td><input name = "v_s1" type = "text" 
                  id = "v_s1"></td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>Prominent Symptom 2</td>
               <td><input name = "v_s2" type = "text" 
                  id = "v_s2"></td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>Year of Discovery</td>
               <td><input name = "yod" type = "number" 
                  id = "yod"></td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>Researcher/ Scientist </td>
               <td><input name = "s_n" type = "text" 
                  id = "s_n"></td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>Country of Discovery</td>
               <td><input name = "c_n" type = "text" 
                  id = "c_n"></td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>Structure </td>
               <td>
                  <input type="radio" name="struct" value="RNA">RNA
                  <input type="radio" name="struct" value="DNA">DNA
               </td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>Affects: </td>
               <td>
                  <input type="radio" name="affect" value="PLANTS">Plants
                  <input type="radio" name="affect" value="ANIMALS">Animals
               </td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td>15 Char Gene Sequence</td>
               <td><input name = "geneseq" type = "text" 
                  id = "geneseq" maxlength=15></td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td> </td>
               <td> </td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
            <tr>
               <td> </td>
               <td>
                  <input name = "add" type = "submit" id = "add" 
                     value = "Add Virus Data">
               </td>
            </tr>
            <tr><td width="100" height=20></td><td width="100" height=20></td></tr>
         </table></center>
      </form>
   </body>
</html>