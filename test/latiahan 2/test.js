function hitungTabungan(hari) {
	let total = 0;
	for (let h = 1; h <= hari; h++) {
		if (h % 2 !== 0) {
			total += 2000;
		} else {
			total += 5000;
		}
	}
	return total;
}

console.log(hitungTabungan(3));
