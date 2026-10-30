#include <iostream>
#include <vector>
#include <string>

using namespace std;

int main () {
    vector<string> buah = {"mangga", "jeruk"};
    
    cout << buah[0] << endl; // mengakses elemen berdasarkan indeks

    buah.insert(buah.begin(), "Apel"); // Tambahkan di awal
    buah.insert(buah.begin() + 2, "Semangka"); // Tambahkan di tengah
    buah.push_back("Pisang"); // Tambahkan di akhir

    cout << "Setelah ditambah: ";
    for (const auto& b : buah) {
        cout << b << " ";
    }
    cout << endl;

    buah.erase(buah.begin()); // Hapus elemen di awal
    buah.erase(buah.begin() + 1); // Hapus elemen di tengah
    buah.pop_back(); // Hapus elemen di akhir

    cout << "Setelah dihapus: ";
    for (const auto& b : buah) {
        cout << b << " ";
    }
    cout << endl;

    return 0;
}