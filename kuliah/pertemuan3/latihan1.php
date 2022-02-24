<?php 
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//    echo "Hello Word! <br>";
// }
// $i = 10;
// while ( $i < 5 ) {
//     echo "Hello Word! <br>";
// $i++;
// }
// $i = 10;
// do {
//     echo "Hello Word! <br>";
// $i++;    
// } while( $i < 5 )

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

<table border="1" callpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 0 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>   
            <tr>
        <?php endif; ?>     
            <?php for( $j = 1; $j <=5; $j++ ) : ?>
                <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>    
        </tr>
    <?php endfor; ?>    
</table>

</body>
</html>