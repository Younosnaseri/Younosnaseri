package mytheading;
import java.util.logging.Level;
import java.util.logging.Logger;
class th extends Thread{
    public void run(){
        for(int i=0;i<=5;i++){
            System.out.println(i);
            try {
                sleep(1000);
            } catch (InterruptedException ex) {
               // Logger.getLogger(th.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
}
class th1 extends Thread{
    public void run(){
 for(char c='a';c<='d';c++){
     System.out.println(c);
     ProcessBuilder n=new ProcessBuilder("ali");
     try {
         sleep(1);
     } catch (InterruptedException ex) {
         Logger.getLogger(th1.class.getName()).log(Level.SEVERE, null, ex);
     }
 }       
    }
}
public class Mytheading {
public static void main(String[] args) throws InterruptedException {
   th object=new th();
   th1 object1=new th1();
   object.run();
   object.start();
System.out.println();
object1.run();
object1.start();
object.join(1000);
//object1.currentThread();

}
}