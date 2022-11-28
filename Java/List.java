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
public class List<T> implements Iterable<T>  {
    // head and tail of node
  Node head;
  Node tail;

  // add method
  public void add(T data) {
    Node newNode = new Node<T>(data, null);
    if (head == null) {
      head = newNode;
      tail = newNode;
    } else {
      tail.setNextNode(newNode);
      tail = newNode;
    }
  }

  // getter methods for head and tail
  public Node getHead() {
    return head;
  }

  public Node getTail() {
    return tail;
  }

  @Override
  public Iterator<T> iterator() {
    // TODO Auto-generated method stub

    // returning our ListIterator object passing it our list object
    ListIterator newIterator = new ListIterator<T>(this);
    return newIterator;
    // or
    // return newIterator.initialize(this);
    
  }
}
