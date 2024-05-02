# Write a python promgram to swap two variable without using temprary variable 

# a = 10
# b = 5
# a = a + b  = 15
# b = a -b = 10
# a = a - b = 5; 

def swap(a,b):

    print("Befor swap variable \n")
    print(f"a : {a}")
    print(f"b : {b}")

    a = a + b 
    b = a - b
    a = a - b

    print("After swap variable \n")
    print(f"a : {a}")
    print(f"b : {b}")

def main():
    n1 = int(input("Enter first number"))
    n2 = int(input("Enter second number"))
    swap(n1,n2)
    
if __name__ == ("__main__"):
    main()