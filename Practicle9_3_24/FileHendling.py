# Write a program in Python to implement read lines, write line using file handling mechanisms

def main():
    f=open("mytxtfile.txt")
    #print(f.read(10))
    for x in f:
        print(x)
    f.close()
    f=open("mytxtfile.txt","w")
    f.write("\nthis is new line")
    f.close()
    f=open("mytxtfile.txt")
    for x in f:
        print(x)


if __name__ == ("__main__"):
    main()
