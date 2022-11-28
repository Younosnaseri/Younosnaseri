package polymorphism;
class Animal{
    public void animalSound(){
        System.out.println("All Animals have sound!!!");
    }
}
class Dog extends Animal{
    public void animalSound() {
    System.out.println("All Dogs have Sound!!!");
    }   
}
class pigeon extends Animal{
    public void animalSound() {
        System.out.println("All pigeion have sound!!");
    }
}
public class Polymorphism {
public static void main(String[] args) {
Animal n=new Animal();
n.animalSound();
Animal n1=new Dog();
n1.animalSound();
    }
    
}
