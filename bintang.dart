void main(){   
     for(int i=0;i<=5;i++){
        for (int s = 5; s > i; s--)
                  print("*" * i);
            for (int j = 0; j < i; j++)
                  print("*" * i);
     }  
     for(int i=4;i>=1;i--){
        // print("*" * i);
        for (int s = 0; s < i; s++)
                  print("*" * i);
            for (int j = 5; j > i; j--)
                  print("*" * i);
     }  
    }
// void main(){
//   for (int i = 0; i <= 5; i++)
//       {
//             for (int s = 5; s > i; s--)
//                   print(" ");
//             for (int j = 0; j < i; j++)
//                   print("* ");
//       }
//   for (int i = 1; i < 5; i++)
//       {
//             for (int s = 0; s < i; s++)
//                   print(" ");
//             for (int j = 5; j > i; j--)
//                   print("* ");
//       }
// }