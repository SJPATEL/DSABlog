// Write a java application that will take tow different String objects and perform different operation on them like checking the equality of two string reverse the string, change case etc.

class StrOperation {

    // Print message
    public void intro() {
        System.out.println("This java application is use to perform different operation on string");
    }

    // Compare tow string
    public void comString(String s, String s1) {
        if (s == s1) {
            System.out.println("Tow string are matching.");
        } else {
            System.out.println("String are not match");
        }
    }

    // String reverse
    public void reverseStr(String s) {
        String reversString = "";
        int i;
        char rev;
        for (i = 0; i < s.length(); i++) {
            rev = s.charAt(i);
            reversString = rev + reversString;
        }
        System.out.println(reversString);
    }

    // Convert string to upper case
    public String strUpper(String s) {
        return s.toUpperCase();
    }

    // Convert string to lower case
    public String strLower(String s) {
        return s.toLowerCase();
    }
}

public class Pr5 {
    public static void main(String args[]) {
        StrOperation so = new StrOperation();
        so.intro();
        so.comString("patel", "patel");
        so.reverseStr("setu");
        System.out.println(so.strUpper("setu"));
        System.out.println(so.strLower("setu"));
    }
}
