/*PRO 2.2 Define a class called Cartesian Point, which has two instance variables, x and y. Provide the methods get X() and getY() to return the values of the x and y values respectively,a method called move() which would take two integers as parameters and change the values of x and y respectively. A method called display() which would display the current values of x and y. Now overload the method move() to work with a single parameter, which would set both x and y to the same values. Provide constructors with two parameters and overload to work
with one parameter as well. Now define a class called Test Cartesian Point, with the main method to test the various methods in the Cartesian Point
class.*/
class CartesianPoint {
    private int x;
    private int y;

    // Constructor with two parameters
    public CartesianPoint(int x, int y) {
        this.x = x;
        this.y = y;
    }

    // Constructor with one parameter (overloaded)
    public CartesianPoint(int xy) {
        this.x = xy;
        this.y = xy;
    }

    // Method to get x value
    public int getX() {
        return x;
    }

    // Method to get y value
    public int getY() {
        return y;
    }

    // Method to move point by given x and y values
    public void move(int newX, int newY) {
        x = newX;
        y = newY;
    }
    // Overloaded move method with single parameter to set both

    public void move(int newXY) {
        x = newXY;
        y = newXY;
    }

    // Method to display current values of x and y
    public void display() {
        System.out.println("Current coordinates: (" + x + ", " +
                y + ")");

    }
}

public class TestCartesianPoint {
    public static void main(String[] args) {
        // Test with constructor taking two parameters
        CartesianPoint point1 = new CartesianPoint(3, 5);
        System.out.println("Point 1:");
        point1.display();
        // Test with constructor taking one parameter
        CartesianPoint point2 = new CartesianPoint(2);
        System.out.println("\nPoint 2:");
        point2.display();
        // Test move method with two parameters
        System.out.println("\nMoving Point 1 to (7, 9)");
        point1.move(7, 9);
        point1.display();
        // Test move method with one parameter
        System.out.println("\nMoving Point 2 to (10, 10)");
        point2.move(10);
        point2.display();
    }
}
