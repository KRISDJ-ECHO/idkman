function hitungKopi(jumlahgelas) {
	let totalHarga = jumlahgelas * 5000;
	if (jumlahgelas > 3) {
		totalHarga -= 2000;
	}
	return totalHarga;
}

console.log(hitungKopi(2));
console.log(hitungKopi(4));
