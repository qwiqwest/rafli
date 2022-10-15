import 'dart:io';

void main() {
  stdout.write("Input Nilai: ");
  var nilai;
  nilai = int.parse(nilai ?? stdin.readLineSync());

  if ( nilai > 80 && nilai <= 100 ){
        print("A");  // Prints A+    
    }else if(nilai >=70 && nilai <= 79){
        print("B");
    }else if(nilai >=60 && nilai <= 69){
        print("C");
    }else if(nilai >=50 && nilai <= 59){
        print("D");
    }else if(nilai >=0 && nilai <= 49){
        print("E");
    }else{
        print('Nilai Invalid');
    }
}