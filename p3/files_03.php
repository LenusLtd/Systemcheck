<html>
<body>
    
    <?php
    $myFile=fopen("mydata.txt","r") or exit("Can’t open file!");
    while(!feof($myFile))
    {
        echo fgets($myFile) . "<br>";
    }
    fclose($myFile);
    ?>
    
</body>
</html>