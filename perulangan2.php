<?php 
$angka = [ 1,2,3,4,5,6,7,8,9 ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        div{
            width: 25px;
            height: 25px;
            background-color: cyan;
            text-align: center;
            line-height: 25px;
            margin: 3px;
            float: left;
           
        }
    </style>
</head>
<body>
    
        <?php foreach ($angka as $key){ ?>
               <div><?php echo $key; ?></div>
        <?php } ?>
        
</body>
</html>