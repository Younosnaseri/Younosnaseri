package encapsulation;
class person{
   private  String name;
   private int age;
   private int width;
   private int height; 
   public String  getName(){
       return name + " "+age+" "+width+" "+height;
   }
   public void  setName(String name,int age,int width,int height){
       this.name=name;
       this.age=age;
       this.width=width;
       this.height=height;
   }
}
public class Encapsulation {
public static void main(String[] args) {
 person n=new person();
n.setName("Mohmmad", 34, 100, 170);
   System.out.println(n.getName());
}
    
}
