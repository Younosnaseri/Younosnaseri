/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package mylists;
import java.util.Iterator;
/**
 *
 * @author shakir
 */
public class ListIterator<T> implements Iterator {

    // current node
    Node<T> currentNode;

    public ListIterator(List<T> list)
    {
        currentNode = list.getHead();
    }
    // initialize current node

    // we can use this methos also for initialization but we have to
    // call this method from List class iterator method instead of constructor
    
    //  public void initialize(List<T> node) {
    //    currentNode = node.getHead();
    //  }

  @Override
  public boolean hasNext() {
    // if current is null
    // if current is not null
    // TODO Auto-generated method stub

    return currentNode != null;
  }

  @Override
  public T next() {
    // TODO Auto-generated method stub

    // storing current node data
    T data = currentNode.getData();
    // set current to next
    currentNode = currentNode.getNextNode();
    // return data
    return data;
  }
}
