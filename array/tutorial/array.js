let buah = ["mangga", "jeruk"];

console.log(buah[0]); //mengakses elemen berdasarkan indeks

buah.unshift("Apel"); // Tambahkan di awal
buah.splice(2, 0, "Semangka"); // Tambahkan di tengah
buah.push("Pisang"); // Tambahkan di akhir
console.log("Setelah ditambah:", buah);

buah.shift(); // Hapus elemen awal
buah.splice(1, 1); // hapus elemen di tengah
buah.pop(); // hapus elemen di akhir
console.log("Setelah dihapus:", buah);