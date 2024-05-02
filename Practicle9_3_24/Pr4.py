# Write a program to make a simple calculator (using functions).

def perOpe(num1, num2, operator): 
    if operator == "+":
        return (num1 + num2)
    elif operator == "-":
        return (num1 - num2)
    elif operator == "*":
        return (num1 * num2)
    elif operator == "/":
        return (num1 / num2)
    else:
        return "Please enter oprator include in brekets"

def main():
    num1 = int(input('Enter first number'))
    num2 = int(input('Enter second number'))
    oprator = str(input('Enter your operator on(+, -, *, /)'))
    ans = perOpe(num1,num2,oprator)

    print(ans)
  
    


if __name__ == ("__main__"):
    main()