#include <iostream>

void tepoknyamuk(int jumlah) {
	for (int angka = 1; angka <= jumlah; angka++) {
		if (angka % 3 == 0) {
			std::cout << "TEPOK" << std::endl;
		} else {
			std::cout << angka << std::endl;
		}
	}
}

int main() {
	tepoknyamuk(5);
	return 0;
}
