package boxing;
  class shownumber{
         int number1=1;
         int number2=23;

        public void show(int number1,int number2) {
            this.number1=number1;
            this.number2=number2;
            
        }
         
    }
public class Boxing {
    public static void main(String[] args) {
        shownumber n=new shownumber();
        
        
        n.number1=100;
        System.out.println(n.number1);
        n.number1=12;
        System.out.println(n.number1);
        
        
    }
    
}
