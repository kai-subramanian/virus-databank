<html>
    <head>
        <title>VIRUS DATABASE</title>
        <style>
            .rainbow-text{
                background-image: linear-gradient(to left, green, violet,white);
                -webkit-background-clip: text;
                color: transparent;
            }
            #a{
                padding-top: 30px;
                padding-right: 30px;
                padding-bottom: 50px;
                padding-left:480px;
                font-family:Lucida Sans;
                font-size:40px;
            }
            #a1{
                font-family:Lucida Sans;
                font-size:32px;
                padding-left: 510px;
            }
            #b{
                font-family:Lucida Sans;
                font-size:25px;
            }
        </style>
    </head>
    <body style="background-color:#1570C7">
        <div id="a" class="rainbow-text">VIRUS DATABASE INTERFACE</div>
        <div id="a1" class="rainbow-text">↓ CHOOSE ANY ONE FUNCTION ↓</div><br><br>
        <div id="b"><center><a href="<?php echo 'proto3.php'; ?>">INSERT NEW VIRUS DATA</a></center></div><br><br>
        <div id="b"><center><a href="<?php echo 'proto4.php'; ?>">SEARCH FOR AMINO ACID TRANSCRIPTION</a></center></div><br><br>
        <div id="b"><center><a href="<?php echo 'proto5.php'; ?>">mRNA INVERSION</a></center></div><br><br>
    </body>
</html>