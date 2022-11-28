package collection;
abstract class honda{
    abstract  void run();
}
class model extends honda{
    void run() {
       System.out.println("Honda is very fast and good!!");
    }   
}
class model2 extends honda{
    void run(){
        
    }
}
public class Collection {
 public static void main(String[] args) {
model n=new model();
n.run();
    }
    
}
