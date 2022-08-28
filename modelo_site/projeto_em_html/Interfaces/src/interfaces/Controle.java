
package interfaces;

import javax.swing.JOptionPane;

public class Controle implements Conceito{
    public static void main(String [] args){
    
        int conceito = Integer.parseInt(JOptionPane.showInputDialog("Digite 1 para conceito A. \nDigite 2 para conceito B. \nDigite 3 para conceito C. "));
        
      
        
        if(conceito == 1){ 
        
        System.out.println(Conceito.a);
        
        }else if(conceito == 2) {
             System.out.println(Conceito.b);
        
        }else{
         System.out.println(Conceito.c);
        
        }
    
    
    }
    
}
