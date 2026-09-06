function tepoknyamuk(jumlah) {
	for (let angka = 1; angka <= jumlah; angka++) {
		if (angka % 3 === 0) {
			console.log("TEPOK");
		} else {
			console.log(angka);
		}
	}
}

tepoknyamuk(5);
