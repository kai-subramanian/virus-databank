<html>
    <head></head>
    <body>
        <?php
            $myname="virus"
            fopen("'$myname'.txt", "w") or die("Unable to open file!");
            echo "File Created!";
            echo fread($myfile,filesize("$myname.txt"));
        ?>
    </body>
</html>