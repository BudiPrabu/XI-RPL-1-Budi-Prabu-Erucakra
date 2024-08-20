class Kalkulator:
    def __init__(self, angka1, angka2):
        self.angka1 = angka1
        self.angka2 = angka2

    def tambah(self):
        return self.angka1 + self.angka2

    def kurang(self):
        return self.angka1 - self.angka2

    def kali(self):
        return self.angka1 * self.angka2

    def bagi(self):
        if self.angka2 == 0:
            return "Error: Pembagian dengan nol tidak diperbolehkan"
        return self.angka1 / self.angka2

# Implementasi
def main():
    print("Masukkan dua angka:")
    angka1 = float(input("Angka pertama: "))
    angka2 = float(input("Angka kedua: "))

    # Membuat objek dari kelas Kalkulator
    kalkulator = Kalkulator(angka1, angka2)

    # Melakukan berbagai operasi dan menampilkan hasilnya
    print("\nHasil Operasi:")
    print(f"Penjumlahan: {angka1} + {angka2} = {kalkulator.tambah()}")
    print(f"Pengurangan: {angka1} - {angka2} = {kalkulator.kurang()}")
    print(f"Perkalian: {angka1} * {angka2} = {kalkulator.kali()}")
    print(f"Pembagian: {angka1} / {angka2} = {kalkulator.bagi()}")

if __name__ == "__main__":
    main()