<?php
function pesertadidik($noSiswa, $kondisi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7,){
    for($noSiswa; $noSiswa <= $kondisi; $noSiswa++ ){
        if($noSiswa == $kt1 || $noSiswa == $kt2 || $noSiswa == $kt6 ){
            echo "Peserta Didik no $noSiswa tidak hadir </br>";}
        else if($noSiswa == $kt3 || $noSiswa == $kt4 ){
            echo "Peserta Didik no $noSiswa terlambat </br>";}
        else if($noSiswa == $kt5 || $noSiswa == $kt7 ){
            echo "Peserta Didik no $noSiswa sakit </br>";}
        else{echo "Peserta Didik no $noSiswa hadir </br>";}
    }
}
echo pesertadidik( 1, 15, 2 ,3, 6 ,8 ,9 ,10 ,13);
?>