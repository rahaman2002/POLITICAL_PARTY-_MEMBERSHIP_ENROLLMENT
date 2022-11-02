/*
ABCDEF
ABCDEF
ABCDEF
ABCDEF
ABCDEF
ABCDEF

 */
import java.util.*;
public class pattern12{
    public static void main(String args[]){
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        int i=1;
        while(i<=n){
            int j=1;
            while(j<=n){
                char jthchar = (char)('A'+j-1);
                System.out.print(jthchar);
                j=j+1;
            }
            System.out.println();
            i+=1;
        }
        
        
    }
}