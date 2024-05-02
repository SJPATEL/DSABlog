# Write a program in python to implement Bank System using Class and Methods and perform below
# Operations. (Note: Use of object oriented paradigm is compulsory.)
# a) Add Bank account
# b) Deposit of money
# c) withdrawal operation
# d) Money transfer
# e) Show Balance


class BankAccount:
    def __init__(self, account_number, account_holder, balance):
        self.account_number = account_number
        self.account_holder = account_holder
        self.balance = balance

    def deposit(self, amount):
        self.balance += amount
        print("Amount deposited successfully.")
        self.show_balance()

    def withdraw(self, amount):
        if amount <= self.balance:
            self.balance -= amount
            print("Amount withdrawn successfully.")
            self.show_balance()
        else:
            print("Insufficient balance.")

    def transfer(self, to_account, amount):
        if amount <= self.balance:
            self.balance -= amount
            to_account.balance += amount
            print("Amount transferred successfully.")
            self.show_balance()
        else:
            print("Insufficient balance.")

    def show_balance(self):
        print(f"Account Balance: {self.balance}")

def main():
    # Create accounts
    account1 = BankAccount(1, "John Doe", 1000)
    account2 = BankAccount(2, "Jane Smith", 500)

    while True:
        print("\nBank Operations:")
        print("1. Deposit")
        print("2. Withdraw")
        print("3. Transfer")
        print("4. Show Balance")
        print("5. Exit")

        choice = int(input("Enter your choice: "))

        if choice == 1:
            amount = float(input("Enter the amount to deposit: "))
            account1.deposit(amount)
        elif choice == 2:
            amount = float(input("Enter the amount to withdraw: "))
            account1.withdraw(amount)
        elif choice == 3:
            amount = float(input("Enter the amount to transfer: "))
            to_account = account2  # Assume transfer to account2 for simplicity
            account1.transfer(to_account, amount)
        elif choice == 4:
            account1.show_balance()
        elif choice == 5:
            print("Exiting...")
            break
        else:
            print("Invalid choice. Please enter a valid option.")

if __name__ == "__main__":
    main()
