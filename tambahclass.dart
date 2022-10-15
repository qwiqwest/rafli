import 'dart:io';

// class Number{
//   var value;

//   showInfo() {
//     print("Output : ${value}");
//   }
// }

void main() {
  // var totalNilai = new Number();
  // stdout.write("Enter Value : ");
  // totalNilai.value = stdin.readLineSync();
  // totalNilai.showInfo();

  var nilai;
  stdout.write("Masukkan nilai anda: ");
  nilai = int.parse(nilai ?? stdin.readLineSync());
  for (var i = 1; i <= nilai; i++) {
    print("Angka yang keluar : $i");
  }
}