# Write a program in python to find out maximum and minimum number out of three user entered number


def maxNum(a,b,c):
    if a > b:
        if a > c:
            return a
        else:
            return c
    else:
        if b > c :
            return b
        else:
            return c

def minNum(a,b,c):
    if a < b:
        if a < c:
            return a
        else:
            return c
    else:
        if b < c :
            return b
        else:
            return c


def main():

    num1 = int(input("Etner you first number"))
    num2 = int(input("Etner you second number"))
    num3 = int(input("Etner you third number"))
    max =  maxNum(num1,num2,num3)
    min = minNum(num1,num2,num3)
    print(f"Max number of {max}")
    print(f"Min number of {min}")

if __name__ == ("__main__"):
    main()