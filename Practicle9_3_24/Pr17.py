
# Write a program in python to implement Railway Reservation System using file handling technique.
# System should perform below operations.
# a. Reserve a ticket for a passenger.
# b. List information all reservations done for today’s trains.
# (Note: Use of object oriented paradigm is compulsory.)
import os
import datetime

class ReservationSystem:
    def __init__(self):
        self.reservations_file = "reservations.txt"

    def reserve_ticket(self, train_name, passenger_name, seat_number):
        reservation_info = f"{datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')},{train_name},{passenger_name},{seat_number}\n"
        with open(self.reservations_file, 'a') as file:
            file.write(reservation_info)
        print("Ticket reserved successfully.")

    def list_today_reservations(self):
        today = datetime.datetime.now().strftime('%Y-%m-%d')
        with open(self.reservations_file, 'r') as file:
            print("Today's Reservations:")
            for line in file:
                if today in line:
                    print(line.strip())

def main():
    system = ReservationSystem()
    while True:
        print("\nRailway Reservation System")
        print("1. Reserve a ticket")
        print("2. List today's reservations")
        print("3. Exit")
        choice = input("Enter your choice: ")

        if choice == '1':
            train_name = input("Enter train name: ")
            passenger_name = input("Enter passenger name: ")
            seat_number = input("Enter seat number: ")
            system.reserve_ticket(train_name, passenger_name, seat_number)
        elif choice == '2':
            system.list_today_reservations()
        elif choice == '3':
            print("Exiting program...")
            break
        else:
            print("Invalid choice. Please enter a valid option.")

if __name__ == "__main__":
    main()
