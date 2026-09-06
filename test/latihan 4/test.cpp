#include <iostream>

int hitungKopi(int jumlahgelas) {
	int totalHarga = jumlahgelas * 5000;
	if (jumlahgelas > 3) {
		totalHarga -= 2000;
	}
	return totalHarga;
}

int main() {
	std::cout << hitungKopi(2) << std::endl;
	std::cout << hitungKopi(4) << std::endl;
	return 0;
}
