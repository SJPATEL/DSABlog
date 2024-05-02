#  Write a program in python to implement simple interest and compound interest values on chart using PyLab.
# Show the difference between both. (Note: Use of object oriented paradigm is compulsory.)

# pip install pylablib

from pylab import *

def main():
    
    principal=10000
    interestRate=0.05
    years=20
    values=[]
    for i in range(years+1):
        values.append(principal)
        principal+=principal*interestRate
    #pylab.figure(1)
    print(values)
    pylab.plot(values)
    pylab.show()
    #pylab.savefig("myfigure")


if __name__ == ("__main__"):
    main()
