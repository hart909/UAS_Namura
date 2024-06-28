CARA PAKAI WEB
Download File/ git clone https://github.com/hart909/UAS_Namura.git
Masuk ke direktori folder UAS_Namura
ketik composer install
ketik npm install
ketik di terminal baru npm run dev
rename file .env.example menjadi .env
ubah bagian db username dan password sesuai dengan pgAdmin
ketik php artisan migrate
jika berhasil maka akan ter migrasi jika gagal cek lagi direktori, penulisan dan konfigurasi .env
lakukan import database di pg admin dengan klik kanan lalu restore, pilih file namura_database.sql (ada di folder github)
ketik php artisan serve

*Catatan jika ada warning untuk generate key maka ikuti instruksi untuk generate keynya
*JANGAN MENGGANTI APAPUN YANG ADA DIDALAM .env HANYA KONFIGURASI DATABASE SAJA
