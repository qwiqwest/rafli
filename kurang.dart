import 'dart:io';
void main() {

  var nilai;
  stdout.write("Masukkan nilai anda: ");
  nilai = int.parse(nilai ?? stdin.readLineSync());
  for (var i = nilai; i >= 1; i--) {
    print("Angka yang keluar : $i");
  }
}