def hitungKopi(jumlahgelas):
	totalHarga = jumlahgelas * 5000
	if jumlahgelas > 3:
		totalHarga -= 2000
	return totalHarga


print(hitungKopi(2))
print(hitungKopi(4))
