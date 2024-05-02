# Write a python program to convert Decimal to Binary, Octal and Hexadecimal 

def convertBinary(number):
    
    binary = []
    while (number != 0):
        rem = number % 2
        binary.append(int(rem))
        number = int(number / 2)
    
    for i in range(len(binary)-1, -1, -1):
        print(f"{binary[i]}",end="")
    print()
    
def convertOctal(number):
    
    coctal = []
    while(number != 0):
        rem = int(number % 8)
        coctal.append(rem)
        number = int(number / 8)
    
    for i in range(len(coctal)-1,-1,-1):
        print(f"{coctal[i]}",end="")
    print()
    
 
def convertHaxdecimal(number):
    
    hax = []
    while(number != 0):
        rem = int(number % 16)
        hax.append(rem)
        number = int(number / 16)
    
    for i in range(len(hax)-1,-1,-1):
        if hax[i] == 10:
            print("A",end="")
        elif hax[i] == 11:
            print("B",end="")
        elif hax[i] == 12:
            print("C",end="")
        elif hax[i] == 13:
            print("D",end="")
        elif hax[i] == 14:
            print("E",end="")
        elif hax[i] == 15:
            print("F",end="")
        else:
            print(f"{hax[i]}",end="")
    print()
    
 

def main():

    number = int(input("Enter number for convert Binary, Octal, and Hexadecimal"))
    convertBinary(number)
    convertOctal(number)
    convertHaxdecimal(number)


if __name__ == ("__main__"):
    main()