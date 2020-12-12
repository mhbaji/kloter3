def cetakPola(banyak):
    vertikal = (banyak+2)/2
    for i in range(int(vertikal)):
        for j in range(banyak):
            if i == 0 :
                if j >= banyak-(i+1):
                    print("*", end="")
                else:
                    print(" ", end="")
            else :
                if j >= banyak-(i+i):
                    print("*", end="")
                else:
                    print(" ", end="")
        print("")

    print("DUMBWAYSID")

    for i in range(int(vertikal)):
        for j in range(banyak):
            if i == vertikal-1:
                if j >= banyak-1:
                    print("*", end="")
                else:
                    print(" ", end="")
            else :
                if j >= (2*i):  
                    print("*", end="")
                else:
                    print(" ", end="")
        print("")
    
cetakPola(10)