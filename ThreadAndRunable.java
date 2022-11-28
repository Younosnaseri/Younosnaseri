package threadandrunable;
class alpabet extends  Thread{
       public void printAlphabet(){
        for(char englishletter='a';englishletter<'e';englishletter++){
            System.out.println(englishletter);
            try{
                Thread.sleep(100);
            }catch(Exception e){
                
            }
                   
            
        }
    }
}
class runthread extends Thread{
    public void printNumer(){
        for(int i=1;i<10;i++){
            System.out.println(i);
            try{
                Thread.sleep(100);
            }catch(Exception e){
                
            }
        }
    }
 
}
public class ThreadAndRunable {
public static void main(String[] args) {
    runthread n=new runthread();
    n.printNumer();
//    --------------
alpabet n=new alpabet();
n.printAlphabet();
    }
    
}
q          