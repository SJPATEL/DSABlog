// Write a java application which take several command line arguments which are supposed to be the name of students and print output as give below of arguments=3 1:Tom 2:Dick 3: Harry
public class Pr3 {
    public static void main(String args[]){
        for(int i = 0; i < args.length; i++){
            int length = Integer.parseInt(args[i]);
            for(int j=0; j < length; j++){
                System.out.print("*");
            }
            System.out.println("");
            // System.out.println( i+1 + ":" + args[i]);
        }
    }
    
}
