package filehandalinginjava;
import java.awt.BorderLayout;
import java.io.File;
import java.io.IOException;
public class FileHandalingInJava {
 public static void main(String[] args) {
//     try{
//     File myobject=new File("file.txt");
//        if(myobject.createNewFile()){
//            System.out.println("File Has Been Created!!"+myobject.getName());
//        }else{
//            System.out.println("File already Exsists!!");
//        }
//     
//     }catch(IOException e){
//         System.out.println("Error");
//         e.printStackTrace();
//     }

try{
   File n=new File("savename.txt");
   if(n.createNewFile()){
       System.out.println("File has been created!!"+n.getAbsolutePath());
   }else{
       System.out.println("File already exsit ");
   }
}catch(IOException e){
    System.out.println("Error Has been occured !!");
}
    }
    
}
