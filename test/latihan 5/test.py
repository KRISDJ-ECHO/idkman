def tepoknyamuk(jumlah):
	for angka in range(1, jumlah + 1):
		if angka % 3 == 0:
			print("TEPOK")
		else:
			print(angka)


tepoknyamuk(5)
