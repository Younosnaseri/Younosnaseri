package writeinfile;

import java.io.FileWriter;
import java.io.IOException;

public class WriteInFile {
public static void main(String[] args) {
    try{
        FileWriter writemyfile=new FileWriter("savename.txt");
        writemyfile.write("Please Save All name");
        writemyfile.close();
        System.out.println("File Added!!");
    }catch(IOException e){
        System.out.println("Error Has Been Occured!!");
    }
    }
    
}
