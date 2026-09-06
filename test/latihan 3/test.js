function cekTilang(plat, tanggal) {
	if (plat % 2 === tanggal % 2) {
		return "AMAN";
	}
	return "TILANG";
}

console.log(cekTilang(24, 12));
console.log(cekTilang(13, 20));
