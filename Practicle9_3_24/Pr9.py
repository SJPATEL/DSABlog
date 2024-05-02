# Write a Python program to check if the number provided by the user is a palindrome or not

def  isPallindrom(num):
    sum = 0
    rem = 0
    k = num
    while(num != 0):
        rem =num % 10
        sum = (sum*10) + rem 
        num = int(num / 10)

    if sum == k:
        return 1
    else:
        return 0
        
def main():
    num = int(input("Enter the number for check its pallindrom or not."))
    if isPallindrom(num):
        print(f"{num} is Pallindrom")
    else:
        print(f"{num} is not Pallindrom")

if __name__ == ("__main__"):
    main()