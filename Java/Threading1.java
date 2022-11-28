package threading1;
class mythread implements Runnable{
    public void run() {
        for(int i=1;i<10;i++){
            System.out.println(i);
            try{
            Thread.sleep(1000);
            }catch(InterruptedException ex){
                ex.printStackTrace();
            }
        }
    }
}
public class Threading1 {
    public static void main(String[] args) throws InterruptedException {
        new Thread(new mythread()).start();
      for(char c='A';c<'D';c++){
          System.out.println(c);
          try{
          Thread.sleep(0);
          }catch(EnumConstantNotPresentException ex){
              
          }
      }
    }
    
}
