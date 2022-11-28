package pkginterface;
abstract interface person{
    public void runing();
    public void sleeping();
}
class showpersonDetails implements person {
public void  runing(){
     
 }   
public void sleeping(){
    
}
}
public class Interface {
    public static void main(String[] args) {
showpersonDetails n=new showpersonDetails();
n.runing();
n.sleeping();


    }
    
}
