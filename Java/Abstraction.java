package abstraction;
abstract class person{
abstract void namemethod();
abstract void agemethod();
abstract void widthmethod();
abstract void hightmethod();
}
class showperson extends person{

    void namemethod() {
    }

    @Override
    void agemethod() {
    }

    @Override
    void widthmethod() {
    }

    @Override
    void hightmethod() {
    }
    
}
public class Abstraction {
    public static void main(String[] args) {
    showperson n=new showperson();
    n.agemethod();
    n.hightmethod();
   n.hightmethod();
    }
    
}
