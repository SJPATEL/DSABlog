# Write a python program to convert celsius to fahrenheit and vice a versa.

# 1 Function of convert celsius to fahrenheit
def celsius_to_fahrenheit(celsius):
    return (celsius * 9/5) + 32
# 2 Function of convert  fahrenheit to celsius
def fahrenheit_to_celsius(fahrenheit):
    return (fahrenheit - 32) * 9/5

def main():
    while True:
        print("Enter 1 for convert celsius to fahrenheit")
        print("Enter 2 for convert fahrenheit to celsius")
        print("Enter 3 for exit")

        choise = input("Enter your choise")

        if(choise == "1"):
            celsius = float(input("Enter the Celsius"))
            fahrenheit = celsius_to_fahrenheit(celsius)
            print(f"fahrenheit : {fahrenheit}")
        elif(choise == "2"):
            fahrenheit = float(input("Enter the Fahrenheit"))
            celsius = fahrenheit_to_celsius(fahrenheit)
            print(f"celsius : {celsius}")
        elif(choise == "3"):
            print("Exist the program")
            break
        else:
            print("Please enter choise 1,2, and 3")
            
if __name__ == "__main__":
    main()