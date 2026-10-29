<?php
function bonusLemburHarian($golongan)
{
	if ($golongan == "A") {
		return 25000;
	} else if ($golongan == "B") {
		return 35000;
	} else if ($golongan == "C") {
		return 50000;
	} else {
		return 0;
	}
}

$golongan = strtoupper(trim(readline("Golongan karyawan (A/B/C): ")));
$gajiHarian = (float) readline("Gaji pokok per hari (Rp): ");
$jumlahHari = (int) readline("Jumlah hari kerja: ");
$bonusHarian = bonusLemburHarian($golongan);

if ($bonusHarian == 0) {
	echo "Golongan karyawan tidak tersedia.\n";
} else if ($gajiHarian < 0 || $jumlahHari <= 0) {
	echo "Gaji tidak boleh negatif dan jumlah hari harus lebih dari 0.\n";
} else {
	$totalGaji = 0;
	$totalBonus = 0;

	echo "\nRincian gaji dan lembur:\n";
	for ($hari = 1; $hari <= $jumlahHari; $hari++) {
		echo "Hari ke-$hari: gaji Rp " . number_format($gajiHarian, 0, ',', '.')
			. ", bonus lembur Rp " . number_format($bonusHarian, 0, ',', '.') . "\n";
		$totalGaji += $gajiHarian;
		$totalBonus += $bonusHarian;
	}

	echo "Total gaji pokok: Rp " . number_format($totalGaji, 0, ',', '.') . "\n";
	echo "Total bonus lembur: Rp " . number_format($totalBonus, 0, ',', '.') . "\n";
	echo "Total gaji dan bonus: Rp " . number_format($totalGaji + $totalBonus, 0, ',', '.') . "\n";
}
