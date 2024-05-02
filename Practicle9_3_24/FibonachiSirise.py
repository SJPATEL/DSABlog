# Write a program in python to implement Fibonacci series up to user entered number. (Use recursive
# Function)

def Fibonacci(num):
    if(num == 0):
        return 0
    elif (num == 1):
        return 1
    else:
        return Fibonacci(num-1) + Fibonacci(num-2)

    
def main():
    num = int(input(f"Enter the number range for get Fibonacci series :"))

    for i in range(num):
        print(f"{Fibonacci(i)}", end="")
    

if __name__ == ("__main__"):
    main()