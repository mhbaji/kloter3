def cekHuruf(kalimat,huruf):
    banyak = 0
    for i in (kalimat):
        if i == huruf:
            banyak+=1
    
    print(huruf, "muncul sebanyak ", banyak," kali")

cekHuruf("aku calon peserta bootcamp dumbways", "b")