#include <iostream>
#include <vector>
#include <string>

int main() {
    std::vector<std::string> Tas = {"Pedang kayu", "Perisai"};
    Tas.insert(Tas.begin() + 0, "Potion Darah");
    Tas.insert(Tas.begin() + 2, "Busur Panah");
    Tas.pop_back();
    for (const auto& item : Tas) {
        std::cout << item << " ";
    }
    std::cout << "\n";
    return 0;
}