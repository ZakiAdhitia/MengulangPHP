<?php 

function assada($tanggal){
    $day = date('l', mktime(0,0,0,1,25,2024));

    if ($day == 'Monday') {
        echo "indonesia";
    }
    elseif ($day == 'Tuesday'){
        echo "Selasa";
    }
    elseif ($day == 'Wednesday'){
        echo "Rabu";
    }
    elseif ($day == 'Thursday'){
        echo "Kamis";
    }
    elseif ($day == 'Friday'){
        echo "Jumat";
    }
    elseif ($day == 'Saturday'){
        echo "Sabtu";
    }
    elseif ($day == 'Sunday'){
        echo "Minggu";
    }
}

assada('2024-01-25');

?>