def function(lamaPinjaman):
    telatMengembalikan = lamaPinjaman - 10
    dendaBukuMaPel = telatMengembalikan*1000
    dendaNovel = telatMengembalikan*2000
    dendaCerpen = telatMengembalikan*1500
    total = dendaBukuMaPel + dendaNovel + dendaCerpen

    print("Meminjam Selama: ", lamaPinjaman, " hari")
    print("Telat Mengembalikan: ", telatMengembalikan, " hari")
    print("Denda Buku Mata Pelajaran: ",dendaBukuMaPel)
    print("Denda Novel: ", dendaNovel)
    print("Denda Cerpen: ", dendaCerpen)
    print("Total: ", total)

function(14)