# Write a program which will allow user to enter 10 numbers and display largest odd number from them.
# It will display appropriate message in case if no odd number is found 


def main():
    numbers = []
    # inpute 10 number by user and add odd number in array 
    for i in range(1,11):
        num = int(input(f"Enter the number {i} :"))
        if num % 2 == 0:
            numbers.append(num)

    max = 0
    for i in range(0,len(numbers)):
        if max < numbers[i]:
            max = numbers[i]

    print(f"{max}  Max Odd number for give 10 numbers. ")
    
    

if __name__ == ("__main__"):
    main()