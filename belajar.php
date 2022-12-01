IPB
<?php
    echo 'Hello <b>World</b><br>';
    echo 1 + 2;

    $x = '1';
    $y = '2';

    // $x = 3.4;

    echo '<br>';
    echo $x.$y;

    const x = 3;

    echo x * $y;

    echo print('er');
    // echo echo 'tes';
    echo 'satu', 'dua';
    // print 'satu', 'dua';

    $bil = 3;

    if ($bil % 2) {
        echo 'Ganjil';
    } else {
        echo 'Genap';
    }

    echo $bil % 2 ? 'Ganjil' : 'Genap';

    switch ($bil % 2) {
        case 1 :
            echo 'Ganjil';
            break;
        default :
            echo 'Genap';
    }

    for ($i = 1; $i <= 3; $i++) {
        echo '<br>'.$i;
    }

    $i = 1;
    while ($i <= 3) {
        echo '<br>'.$i++;
    }

    $i = 1;
    do {
        echo '<br>'.$i++;
    } while ($i <= 3);

    $a = ['satu', 'dua', 'tiga'];
    foreach ($a as $i) {
        echo '<br>'.$i;
    }
?>