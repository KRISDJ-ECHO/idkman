<?php
function tarifHarian($jenisKendaraan)
{
	if ($jenisKendaraan == "Sedan") {
		return 300000;
	} else if ($jenisKendaraan == "SUV") {
		return 500000;
	} else {
		return 0;
	}
}

$jenisKendaraan = ucfirst(strtolower(trim(readline("Jenis kendaraan (Sedan/SUV): "))));
$lamaSewa = (int) readline("Lama sewa (hari): ");
$tarif = tarifHarian($jenisKendaraan);

if ($tarif == 0) {
	echo "Jenis kendaraan tidak tersedia.\n";
} else if ($lamaSewa <= 0) {
	echo "Lama sewa harus lebih dari 0 hari.\n";
} else {
	$totalSebelumDiskon = 0;

	echo "\nRincian biaya sewa:\n";
	for ($hari = 1; $hari <= $lamaSewa; $hari++) {
		echo "Hari ke-$hari: Rp " . number_format($tarif, 0, ',', '.') . "\n";
		$totalSebelumDiskon += $tarif;
	}

	if ($lamaSewa > 3) {
		$diskon = $totalSebelumDiskon * 0.10;
	} else {
		$diskon = 0;
	}

	$totalPembayaran = $totalSebelumDiskon - $diskon;
	echo "Total sebelum diskon: Rp " . number_format($totalSebelumDiskon, 0, ',', '.') . "\n";
	echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "\n";
	echo "Total pembayaran: Rp " . number_format($totalPembayaran, 0, ',', '.') . "\n";
}
