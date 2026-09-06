#include <iostream>
using namespace std;

int hitungTabungan(int hari) {
    int total = 0;

    for(int i=1; i<=hari; i++){
        if(i%2==1){
            total += 2000;
        } else {
            total += 5000;
        }
    }
    return total;
}

int main() {
    cout << hitungTabungan(3) << endl;
    return 0;
}