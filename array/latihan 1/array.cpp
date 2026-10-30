#include <iostream>
#include <vector>
#include <string>

int main() {
    std::vector<std::string> orang = {"Budi", "Siti"};
    orang.push_back("Roni");
    orang.insert(orang.begin(), "Dewi");
    for (const auto& nama : orang) std::cout << nama << " ";
    std::cout << "\n";

    orang.erase(orang.begin());
    for (const auto& nama : orang) std::cout << nama << " ";
}
