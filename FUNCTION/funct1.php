<?php 

function tabungan($jumlah, $bulan){
    $total = $jumlah + ($jumlah + $bulan / 100);
    return 'Rp. ' . number_format($total,0,'.','.');
}

tabungan(425000, 10);
?>