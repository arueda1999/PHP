public class cuadratica{

    public static void main(String[]args){
        int a, b,c x1, x2, raiz;

        Scanner t = new Scanner(System.in);
        System.out.println("Digite el valor de a");
        a = t.nextInt();
        if(a != 0)
        {
             System.out.println("Digite el valor de b");
             b = t.nextInt();
             System.out.println("Digite el valor de c");
             c = t.nextInt();
             raiz = (pow(b,2)- 4*a*c);
             if(raiz <0)
             {
               System.out.println("La cuadratica se debe realizar por numero irreales o complejos");
               break; 
             }
             else
             {
                x1 = (-b + raiz)/2*a;
                System.out.println("X1 = " + x1);
                x2 = (-b - raiz)/2*a;
                System.out.println("X2 = " + x2);
             }
        }
        else
        System.out.println("La cuadratica da error porque a es mayor que 0");
       

    }
}