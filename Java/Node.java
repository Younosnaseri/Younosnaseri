/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package mylists;

/**
 *
 * @author shakir
 */
public class Node<T> {
    // node
  // data
  private T data;
  private Node nextNode;

  // constructor
  public Node(T data, Node next) {
    this.data = data;
    this.nextNode = next;
  }

  public void setData(T data) {
    this.data = data;
  }

  public void setNextNode(Node nextNode) {
    this.nextNode = nextNode;
  }

  public T getData() {
    return data;
  }

  public Node getNextNode() {
    return nextNode;
  }
}
