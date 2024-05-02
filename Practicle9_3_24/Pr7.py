# Write a Python program to check if the number provided by the user is an Armstrong number or not.
# ex 407 is Armastrong number: 
# cheack 
#  (4*4*4) + (0*0*0) + (7*7*7)

def  isArmstrong(num):
    sum = 0
    rem = 0
    k = num
    while(num != 0):
        rem =num % 10
        sum = sum + (rem*rem*rem)
        num = int(num / 10)

    if sum == k:
        return 1
    else:
        return 0

def main():
    num = int(input("Enter the number for check its armstrong or not."))
    if isArmstrong(num):
        print(f"{num} is Armstong")
    else:
        print(f"{num} is not Armstong")

if __name__ == ("__main__"):
    main()