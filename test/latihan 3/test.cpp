#include <iostream>
#include <string>

std::string cekTilang(int plat, int tanggal) {
	if (plat % 2 == tanggal % 2) {
		return "AMAN";
	}
	return "TILANG";
}

int main() {
	std::cout << cekTilang(24, 12) << std::endl;
	std::cout << cekTilang(13, 20) << std::endl;
	return 0;
}
