// Write a simple java application ot print a pyramid with 5 lines.
public class Pr2 {
    public static void main(String args[]){
        int i, j;

        for(i=1; i <= 5; i++){                    //i=1 
            for(j=1; j <= i; j++){                 // j=1
                System.out.print("*");
            }
           System.out.println();
        }
    }
}
