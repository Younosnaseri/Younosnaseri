/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package mylists;

/**
 *
 * @author shakir
 */
public class MyLists {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
         // our custome list object
        // System.out.println("I am here");
        List<String> newList = new List();
        // adding data to it
        newList.add("ahmad");
        newList.add("Khan");
        newList.add("Khalil");
        // iterating over it by for loop
           // System.out.println("I am above for loop");
    //    for (String name : newList) {
    //      System.out.println(name);
    //    }
        // iterating over it by while loop
        
        ListIterator ls = (ListIterator) newList.iterator();

        while (ls.hasNext()){
            System.out.println(ls.next());
        }
    }
    
    // the problem that we faced in classroom was that while loop was out of main method. 
    
}
