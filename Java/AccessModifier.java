package access.modifier;
 class person{
    protected String name;
 private int age;
 private float width;
 private float height;
 person(String name,int age,float width,float height){
     this.name=name;
     this.age=age;
     this.width=width;
     this.height=height;
 }
 protected void display(){
System.out.println(name+" "+age+" "+width+" "+height);
}
}

public class AccessModifier {
    public static void main(String[] args) {
       person n=new person("ahmmad", 34, 78, 150);
       n.display();
    }
    
}
