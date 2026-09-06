#include <iostream>

void cekhoki(int n) {
	if (n % 2 == 0 && n % 7 == 0) {
		std::cout << "Hoki" << std::endl;
	} else {
		std::cout << "Biasa" << std::endl;
	}
}

int main() {
	cekhoki(14);
	cekhoki(10);
	return 0;
}
