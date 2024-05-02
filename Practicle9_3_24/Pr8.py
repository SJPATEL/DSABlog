# Write a Python program to display all the prime numbers in user entered range.

def isPrime(r):
    k = 0
    if(r == 1):
        return 0
    elif (r == 2):
        return 0
    else:
        for num in range(2,r):
            if(r % num == 0):
                k = 1
            
        if(k == 1):
            return 0
        else :
            return 1
    

def main():
    ragne = int(input("Enter the range for find how many prime number"))

    print("Prime number are :")
    
    for i in range(1,ragne):
        num = isPrime(i)
        if(num):
            print(f"{i} \t")
    

if __name__ == ("__main__"):
    main()