// Write a java program to sort the elements of an array provided as command line argument in asscending orders 
import java.util.Arrays;

public class Pr4 {
    public static void main(String args[]){
        // 1 Make array and it size given for args value lenght
        int[] numbers = new int[args.length];
        for(int i = 0; i < args.length; i++){
            try {
                // 2 Insert value on array 
                numbers[i] = Integer.parseInt(args[i]);
                                
            } catch (NumberFormatException e) {
                System.out.println("The argument is not number");
            }
        }
        // 3 Short Array
        Arrays.sort(numbers);

        //4 Print shorted array 
        System.out.println("Sorted Array : ");
        for(int number: numbers){
            System.out.print(number);
        }
    }
    
}
