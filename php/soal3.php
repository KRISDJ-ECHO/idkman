<?php
function hitungBonusSaldo($setoranBulanan, $batasSetoran)
{
	if ($setoranBulanan >= $batasSetoran) {
		return $setoranBulanan * 0.10;
	} else {
		return 0;
	}
}

$saldoAwal = (float) readline("Saldo awal (Rp): ");
$setoranBulanan = (float) readline("Setoran setiap bulan (Rp): ");
$batasSetoran = (float) readline("Batas setoran untuk mendapat bonus (Rp): ");
$jumlahBulan = (int) readline("Jumlah bulan simulasi: ");

if ($saldoAwal < 0 || $setoranBulanan < 0 || $batasSetoran < 0 || $jumlahBulan <= 0) {
	echo "Nilai saldo/setoran/batas tidak boleh negatif dan jumlah bulan harus lebih dari 0.\n";
} else {
	$saldo = $saldoAwal;

	echo "\nRincian pertumbuhan saldo:\n";
	echo "Saldo awal: Rp " . number_format($saldo, 0, ',', '.') . "\n";

	for ($bulan = 1; $bulan <= $jumlahBulan; $bulan++) {
		$bonus = hitungBonusSaldo($setoranBulanan, $batasSetoran);
		$kenaikanSaldo = $setoranBulanan + $bonus;
		$saldo += $kenaikanSaldo;

		echo "Bulan ke-$bulan: setoran Rp " . number_format($setoranBulanan, 0, ',', '.')
			. ", bonus Rp " . number_format($bonus, 0, ',', '.')
			. ", saldo Rp " . number_format($saldo, 0, ',', '.') . "\n";
	}

	echo "Saldo akhir: Rp " . number_format($saldo, 0, ',', '.') . "\n";
}
