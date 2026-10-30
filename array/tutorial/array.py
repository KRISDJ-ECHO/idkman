buah = ["mangga", "jeruk"]
print(buah[1]) # mengakses elemen berdasarkan indeks

buah.insert(0, "Apel") # Tambahkan di awal
buah.insert(2, "Semangka") # Tambahkan di tengah
buah.append("Pisang") # Tambahkan di akhir
print("Setelah ditambah:", buah)

buah.pop(0) # Hapus elemen di awal
buah.pop(1) # Hapus elemen di tengah
buah.pop() # Hapus elemen di akhir
print("Setelah dihapus:", buah)