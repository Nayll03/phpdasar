<?php

$nilai=84;

if ($nilai > 79) {
  $ket = "Sangat Baik";
} else if ($nilai > 79) {
  $ket = "Baik";
} else if ($nilai > 69) {
  $ket = "Cukup";
} else {
  $ket = "Kurang";
}

echo ("Nilai anda ".$nilai.", Keterangan ".$ket);

?>