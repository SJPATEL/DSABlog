# Write a program in python to implement Factorial series up to user entered number. (Use recursive
# Function)


def factorial(num):
    if (num == 0):
        return 1
    else:
        return  num  * factorial(num-1)
    
def main():
    num = int(input(f"Enter the number range for get factorial series :"))

    print(f"The {num} factorial is {factorial(num)}")
    

if __name__ == ("__main__"):
    main()

