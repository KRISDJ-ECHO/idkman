def cekTilang(plat, tanggal):
    if (plat%2 == tanggal%2):
        return "AMAN"
    else:
        return "TILANG"

print(cekTilang(24,12))
print(cekTilang(13,20))