
# Write a program in python to implement Library Management System using file handling technique.
# System should perform below operations.
# a. Issue a book for student.
# b. List information today’s issued books.
# (Note: Use of object oriented paradigm is compulsory.)
import os
import datetime

class ReservationSystem:
    def __init__(self):
        self.library_file = "Library.txt"

    def reserve_ticket(self, book_name, author_name, student_name):
        reservation_info = f"{datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')},{book_name},{author_name},{student_name}\n"
        with open(self.library_file, 'a') as file:
            file.write(reservation_info)
        print("Ticket reserved successfully.")

    def list_today_issue(self):
        today = datetime.datetime.now().strftime('%Y-%m-%d')
        with open(self.library_file, 'r') as file:
            print("Today's Reservations:")
            for line in file:
                if today in line:
                    print(line.strip())

def main():
    system = ReservationSystem()
    while True:
        print("\nLibrary Management System")
        print("1. Issue a book")
        print("2. List today's issued books.")
        print("3. Exit")
        choice = input("Enter your choice: ")

        if choice == '1':
            book_name = input("Enter book name: ")
            author_name = input("Enter author name: ")
            student_name = input("Enter student roll number: ")
            system.reserve_ticket(book_name, author_name, student_name)
        elif choice == '2':
            system.list_today_issue()
        elif choice == '3':
            print("Exiting program...")
            break
        else:
            print("Invalid choice. Please enter a valid option.")

if __name__ == "__main__":
    main()
