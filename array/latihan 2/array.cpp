#include <iostream>
#include <vector>
#include <string>

int main() {
    std::vector<std::string> Lagu = {"Ini Abadi", "Monokrom"};
    Lagu.insert(Lagu.begin() + 1, "everything you are");
    Lagu.push_back("Aitakatta");
    Lagu.erase(Lagu.begin());
    for (const auto& lagu : Lagu) {
        std::cout << lagu << " ";
    }
    std::cout << "\n";
    return 0;
}