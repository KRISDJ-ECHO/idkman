def hitungTabungan(hari):
    total = 0
    for h in range(1, hari + 1):
        if h%2!=0:
            total += 2000
        else:
            total += 5000
    return total

print(hitungTabungan(3))