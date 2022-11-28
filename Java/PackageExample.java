package pkgpackage.example;

import java.util.Scanner;

public class PackageExample {
public static void main(String[] args) {
  Scanner n=new Scanner(System.in);
//    System.out.println("Enter number 1");
//    System.out.println("Enter number 2");
//    int num1;
//    int num2;
//   num1=n.nextInt();
//   num2=n.nextInt();
//   System.out.println(num1+num2);
String Username = null;
int i=1;
do{
    System.out.println("Please Enter Your Username :");
    String username=n.nextLine();
    System.out.println("Your username is :=> "+username);
    i++;
}while(i<10);
    }
    
}
