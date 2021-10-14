## SISFO UINAM <p><b>
SISFO UINAM adalah aplikasi website informasi IT dibuat dengan framework laravel 8.
</b></p>

## Instalasi
- download project ini atau clone

## Setup
- buka direktori project di terminal anda.
- ketikan command : cp .env.example .env (copy paste file .env.example)
- buat database 

Lalu ketik command dibawah ini
- composer install
- php artisan optimize:clear 
- php artisan key:generate (generate app key)
- php artisan migrate (migrasi database)
- php artisan db:seed 

## Login
Email : rahmat@example.com
Password : password

## Fitur
# Front / Depan
- Home (Halaman home,menampilkan artikel,pengumuman terbaru) 
- Artikel & Show + pencarian artikel  
- Pengumuman & Show

# admin
- Autentikasi (menggunakan fortify)
- Halaman Dashboard
- Manage User (CRUD)
- Manage Artikel (CRUD)
- Manage Agenda (CRUD)
- Manage Pengumuman (CRUD)
- Manage Kategori Artikel (CRUD)

## Author
- bukan gue
