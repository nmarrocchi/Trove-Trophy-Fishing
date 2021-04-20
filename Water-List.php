<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/fishList.css">
    <title>Fish List - Water</title>
</head>
<body>

    <?php include "header.php" ?>


    <table class="Fish-List">

        <?php 
            $bdd = new PDO('mysql:host=mysql-trove-fishing-trophy.alwaysdata.net; dbname=trove-fishing-trophy_fishlist; charset=utf8','230509', '0ver_Draw070902');
            $Water_Req = $bdd->query("SELECT * FROM Water");

            while( $Water_Fish = $Water_Req->fetch() )
            {
        ?>

            <tr>
                <td class="Fish-Icon"><img src="img/Fish/Water/<?php echo $Water_Fish['Name']?>.png" alt="<?php echo $Water_Fish['Name']?>"></td>
                <td class="Fish-Infos"><p><?php echo $Water_Fish['Name']?></p></td>
                <td class="Fish-Infos"><p><?php echo $Water_Fish['Rarity']?></p></td>
                <td class="Fish-Infos"><p><?php echo $Water_Fish['Fishing_Grounds']?></p></td>
                <td class="Fish-Infos"><p><?php echo $Water_Fish['Glims']?> Glims</p></td>
                <td class="Fish-Infos"><p><?php echo $Water_Fish['Additional_Reward']?></p></td>
                <td class="Fish-Notes"><p><?php echo $Water_Fish['Notes']?></p></td>
            </tr>

        <?php
            }
        ?>

    </table>




    <?php include "footer.php" ?>


    <script src="script/functions.js"></script>
</body>
</html>