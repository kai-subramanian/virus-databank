<html>
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   <body>
      <?php
        //include 'db_connection.php';
        if(isset($_POST['add'])) {
            $dbhost = 'localhost:3306';
            $dbuser = 'root';
            $dbpass = 'Skailash@2k';
            $db = 'chummakidumma';
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            /*if(! get_magic_quotes_gpc() ) {
               $emp_name = addslashes ($_POST['emp_name']);
               $emp_address = addslashes ($_POST['emp_address']);
            }else {
               $emp_name = $_POST['emp_name'];
               $emp_address = $_POST['emp_address'];
            }*/
            $emp_name = $_POST['emp_name'];
            $emp_address = $_POST['emp_address'];
            $emp_salary = $_POST['emp_salary'];
            $sql = "INSERT INTO employee ". "(emp_name,emp_address, emp_salary, 
               join_date) ". "VALUES('$emp_name','$emp_address',$emp_salary, NOW())";
               
            mysqli_select_db($conn,'chummakidumma');
            $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               die('Could not enter data!!!: ' . mysqli_error($conn));
            }   
            echo "Entered data successfully\n";
            //mysqli_close($conn);
         }
        ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     <tr>
                        <td width = "100">Employee Name</td>
                        <td><input name = "emp_name" type = "text" 
                           id = "emp_name"></td>
                     </tr>                  
                     <tr>
                        <td width = "100">Employee Address</td>
                        <td><input name = "emp_address" type = "text" 
                           id = "emp_address"></td>
                     </tr>
                     <tr>
                        <td width = "100">Employee Salary</td>
                        <td><input name = "emp_salary" type = "text" 
                           id = "emp_salary"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add Employee">
                        </td>
                     </tr>
                  </table>
               </form>
   </body>
</html>