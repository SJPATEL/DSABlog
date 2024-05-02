# Write a program in python to implement Salary printing file read operation. (File format: EmployeeNo, name,
# deptno, basic, DA, HRA, Conveyance) should perform below operations.
# a) Print Salary Slip for given Employee Number
# b) Print Employee List for Given Department Number

# Function to read employee data from file
def read_employee_data(filename):
    employee_data = []
    with open(filename, 'r') as file:
        for line in file:
            employee = line.strip().split(',')
            employee_data.append(employee)
    return employee_data

# Function to print salary slip for a given employee number
def print_salary_slip(employee_data, emp_no):
    for employee in employee_data:
        if employee[0] == emp_no:
            emp_no, name, dept_no, basic, da, hra, conveyance = employee
            gross_salary = float(basic) + float(da) + float(hra) + float(conveyance)
            print("Employee Number:", emp_no)
            print("Name:", name)
            print("Department Number:", dept_no)
            print("Basic Salary:", basic)
            print("Dearness Allowance (DA):", da)
            print("House Rent Allowance (HRA):", hra)
            print("Conveyance Allowance:", conveyance)
            print("Gross Salary:", gross_salary)
            return
    print("Employee not found with Employee Number:", emp_no)

# Function to print employee list for a given department number
def print_employee_list(employee_data, dept_no):
    print("Employee List for Department Number", dept_no)
    for employee in employee_data:
        if employee[2] == dept_no:
            emp_no, name, dept_no, basic, da, hra, conveyance = employee
            print("Employee Number:",emp_no)
            print("Name:", name)
            print("Department Number:", dept_no)
            print("---------------------------")
            return
# Main function
def main():
    filename = "employee_data.txt"  # Update with your file name
    employee_data = read_employee_data(filename)


    while True:
        print("\nMenu:")
        print("1. Print Salary Slip for a given Employee Number")
        print("2. Print Employee List for a given Department Number")
        print("3. Exit")
        choice = input("Enter your choice (1/2/3): ")

        if choice == '1':
            emp_no = input("Enter Employee Number: ")
            print_salary_slip(employee_data, emp_no)
        elif choice == '2':
            dept_no = input("Enter Department Number: ")
            print_employee_list(employee_data, dept_no)
        elif choice == '3':
            print("Exiting program...")
            break
        else:
            print("Invalid choice. Please enter 1, 2, or 3.")

if __name__ == "__main__":
    main()
