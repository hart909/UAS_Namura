CARA PAKAI WEB
1. Download File/ git clone https://github.com/hart909/UAS_Namura.git
2. Masuk ke direktori folder UAS_Namura
3. ketik composer install
4. ketik npm install
5. ketik di terminal baru npm run dev
6. rename file .env.example menjadi .env
7. ubah bagian db username dan password sesuai dengan pgAdmin
8. ketik php artisan migrate
9. jika berhasil maka akan ter migrasi jika gagal cek lagi direktori, penulisan dan konfigurasi .env
10. lakukan import database di pg admin dengan klik kanan lalu restore, pilih file namura_database.sql (ada di folder github)
11. ketik php artisan serve

Data user:
admin@gmail.com password: 12345678
user@gmail.com password: 12345678 (atau bisa lakukan registrasi)

*Catatan jika ada warning untuk generate key maka ikuti saja instruksi untuk generate keynya
*JANGAN MENGGANTI APAPUN YANG ADA DIDALAM .env HANYA KONFIGURASI DATABASE (POSTGRESQL) SAJA
