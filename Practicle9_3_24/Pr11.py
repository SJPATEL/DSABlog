# Define a procedure histogram() that takes a list of integers and prints a histogram to the screen.
# For example, histogram([4, 9, 7]) should print the following:
# ****
# *********
# *******

def histogram(histList):
    for i in histList:
        for j in range(i):
            print("*",end="")
        print()

def main():
    print("Enter the number for printf histogram")
    
    histList = []
    for i in range(3):
        num = int(input(f"Enter the number{i+1} : "))
        histList.append(num)
    
    histogram(histList)


if __name__ == ("__main__"):
    main()