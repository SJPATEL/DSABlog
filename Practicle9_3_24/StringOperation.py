# Write a Python program to perform following operation on given string input:


# a) Count Number of Vowel in given string
def isVowel(string):
    count = 0
    for i in range(len(string)):
        if((string[i] == 'a') or (string[i] == 'e') or (string[i] == 'i') or (string[i] == 'o') or (string[i] == 'u')):
            count += 1
    print(f"In given string total {count} number of Vowels")

# b) Count Length of string (donot use len() )
def lenString(string):
    count = 0
    for letter in string:
        count += 1
    print(f"Length of give string is : {len(string)}")

# c) Reverse string
def  revString(string):
    reverStr = ""
    for i in range(len(string)-1, -1, -1):
       reverStr  += string[i]

    print(reverStr)

# e) check whether string entered is a palindrome or not
def  isPallindrom(string):
    realString = string
    reverStr = ""
    for i in range(len(string)-1, -1, -1):
       reverStr  += string[i]

    if realString == reverStr:
        print(f"Given stgring is Pallindrom")
    else:
        print(f"Given string is not Pallindrom")
   

def main():
    string = "hello i am setu patel "
    
    isVowel(string)
    lenString(string)
    revString(string)

    # d) Find and replace operation
    find = string.find("patel")
    print(f"Your work is {find} postion avaibale in give string")
    replaceString  = string.replace("h","a")
    print(f"After reaplace : {replaceString}")

    string = str(input("Enter the string for check its pallindrom or not."))
    isPallindrom(string)


if __name__ == ("__main__"):
    main()