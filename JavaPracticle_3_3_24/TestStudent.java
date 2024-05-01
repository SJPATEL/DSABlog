/*PRO2.1 Define a class called Student. Each Student has a
rollno, name, marks and percentage.
Define variables, methods and constructor for the Student
class. Also write a class called TestStudent;
 with the main method to test the methods and constructors of
the Student class.*/

import java.util.Scanner;

class Student {
    private int rollNo;
    private String name;
    private double[] marks;
    private double percentage;

    // Constructor to initialize the Student object
    public Student(int rollNo, String name, double[] marks) {
        this.rollNo = rollNo;
        this.name = name;
        this.marks = marks;
        calculatePercentage();
    }
    // Method to calculate the percentage

    private void calculatePercentage() {
        double total = 0;
        for (double mark : marks) {
            total += mark;
        }
        this.percentage = total / marks.length;
    }

    // Method to display student details
    public void displayStudentDetails() {
        System.out.println("Roll No: " + rollNo);
        System.out.println("Name: " + name);
        System.out.println("Marks: ");
        for (int i = 0; i < marks.length; i++) {
            System.out.println("Subject " + (i + 1) + ": " +
                    marks[i]);
        }
        System.out.println("Percentage: " + percentage + "%");
    }
}

public class TestStudent {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Enter the number of students: ");
        int numStudents = scanner.nextInt();

        for (int i = 0; i < numStudents; i++) {
            System.out.println("Enter details for student " + (i+ 1) + ":");

            System.out.print("Roll No: ");
            int rollNo = scanner.nextInt();
            scanner.nextLine(); // Consume newline character

            System.out.print("Name: ");
            String name = scanner.nextLine();

            System.out.print("Number of subjects: ");
            int numSubjects = scanner.nextInt();

            double[] marks = new double[numSubjects];
            for (int j = 0; j < numSubjects; j++) {
                System.out.print("Enter marks for Subject " + (j+ 1) + ": ");
                marks[j] = scanner.nextDouble();
            }

            Student student = new Student(rollNo, name, marks);
            student.displayStudentDetails();
            System.out.println();
        }
        scanner.close();
    }
}