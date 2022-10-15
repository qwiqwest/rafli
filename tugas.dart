void main() {
  // toLowerCase()
  String ini = "Heii Guyss";
  print(ini.toLowerCase());

  // trim()
  String test = "                                         Heii Guyss                                            ";
  print(test.trim());

  //split()
  String tulisan="@copyright The Ngoding 2018";
  bool jumlahKata = tulisan.split(" ").isEmpty;
  print(tulisan+" | jumlah kata $jumlahKata");

  //replaceAll()
  String text="Assalamualaikum, nama saya .";
  String nama = text.replaceAll(".","Muhammad Rafli Abdillah");
  print(nama);
}

