// Write a program to find the sum of all intergers greater then 100 & less then 200 and are Divided by 5 
class Pr1{
    public static void main(String[] args) {
        int sum = 0;
        int i;

        for( i=101; i< 200; i++){
            if(i % 5 == 0){
                // System.out.println(i + "\n");
                sum = sum + i;
            }
        }
        System.out.println("The sum is" + sum);
    }
}