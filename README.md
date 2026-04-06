# lab11_ci-semester4

# Nama : Vivit Nurul Hidayah 
# NIM : 312410110 
# Mata Kuliah : Pemrograman Web 2 

## Praktikum 1 – Pengenalan CodeIgniter 4
Pada praktikum pertama ini, fokus utamanya adalah memahami dasar penggunaan framework CodeIgniter 4 serta konsep MVC yang digunakan.

<img width="657" height="671" alt="image" src="https://github.com/user-attachments/assets/2a6b18fc-b2fa-45e2-881e-c929f847ff67" />
<img width="673" height="648" alt="image" src="https://github.com/user-attachments/assets/0e95017e-9afa-4e6d-9131-ddcc7fc1018b" />
<img width="730" height="352" alt="image" src="https://github.com/user-attachments/assets/4756ef28-388c-4403-b918-8f08b5591f39" />
<img width="775" height="728" alt="image" src="https://github.com/user-attachments/assets/dfbd41c1-b4c2-4735-bf95-da6ed73a3062" />
<img width="881" height="673" alt="image" src="https://github.com/user-attachments/assets/191eb37f-5c58-4faa-a4ab-845c8f761dba" />
<img width="855" height="664" alt="image" src="https://github.com/user-attachments/assets/3905e753-1f3d-4c25-bdb9-82acf7266bbe" />
<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/810ccf9c-1b6e-4dba-97ac-98d2a6ec6395" />


- Persiapan dan Konfigurasi
Sebelum memulai, perlu dilakukan pengaturan pada web server agar CI4 bisa berjalan dengan baik. Beberapa ekstensi PHP seperti JSON, MySQLi, XML, dan Intl harus diaktifkan melalui file php.ini di XAMPP. Setelah itu, Apache perlu direstart agar perubahan diterapkan.

- Instalasi CodeIgniter 4
Framework diinstal secara manual dengan cara mengunduh dari website resmi, lalu mengekstraknya ke dalam folder htdocs. Folder hasil ekstrak kemudian diubah namanya menjadi ci4 agar lebih mudah diakses melalui browser menggunakan path /public.

- Penggunaan CLI (Command Line Interface)
CodeIgniter menyediakan tool bernama Spark untuk membantu proses development. Tool ini dijalankan melalui terminal dengan perintah php spark, yang berfungsi untuk menjalankan server, melihat route, dan berbagai perintah lainnya.

- Mode Debugging
Secara default, error pada CI4 tidak ditampilkan secara detail. Oleh karena itu, file env perlu diubah menjadi .env, lalu nilai CI_ENVIRONMENT diganti menjadi development agar error dapat terlihat dengan jelas saat terjadi kesalahan.

- Struktur Folder & Konsep MVC
Framework ini menggunakan konsep MVC:
Model: mengelola data dan database
View: menangani tampilan (UI)
Controller: mengatur alur logika aplikasi
Fokus utama pengembangan berada di folder app, sedangkan file publik seperti CSS disimpan di folder public.

- Routing dan Controller
Routing berfungsi untuk mengatur URL agar terhubung ke controller tertentu. Konfigurasi dilakukan di file Routes.php. Contohnya, URL /about bisa diarahkan ke method about() dalam controller Page.

- Pembuatan Layout
Untuk membuat tampilan lebih rapi dan konsisten, digunakan template seperti header dan footer. File CSS disimpan di folder public, lalu dipanggil melalui view menggunakan base_url().

## Praktikum 2 – CRUD Database
Pada praktikum ini mulai masuk ke pengolahan data menggunakan database MySQL.

<img width="775" height="728" alt="image" src="https://github.com/user-attachments/assets/20ee9c0e-4211-41cb-8e5d-34e80f4f27df" />
<img width="855" height="664" alt="image" src="https://github.com/user-attachments/assets/3ada6f0b-a313-48ff-96e9-c38eb1eb5890" />
<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/41ac7aa5-d120-44b2-b465-a382309403c9" />

- Pembuatan Database
Langkah awal adalah membuat database dan tabel artikel yang berisi beberapa field seperti judul, isi, gambar, dan lainnya. Selanjutnya, koneksi database diatur melalui file .env.

- Model
Model dibuat untuk mengelola data dari tabel. Di dalamnya ditentukan nama tabel, primary key, serta field yang boleh diisi.

- Menampilkan Data (Read)
Controller mengambil data dari model menggunakan fungsi seperti findAll(), lalu dikirim ke view untuk ditampilkan dalam bentuk daftar.

- Detail Artikel
Fitur ini memungkinkan user melihat isi artikel secara lengkap. Data diambil berdasarkan slug, sehingga URL menjadi lebih rapi dan SEO-friendly.

- CRUD (Create, Update, Delete)
Create: menambahkan data baru melalui form
Update: mengubah data yang sudah ada
Delete: menghapus data tertentu
Admin Page: menampilkan daftar data dengan tombol aksi

## Praktikum 3 – Layout dan View Cell

Praktikum ini fokus pada pengelolaan tampilan agar lebih modular dan reusable.
<img width="1919" height="949" alt="image" src="https://github.com/user-attachments/assets/9aa2be8b-dc77-4db7-a0f5-a345a2bb1bf2" />
<img width="1919" height="945" alt="image" src="https://github.com/user-attachments/assets/3cfae0f5-a71e-42cd-bebe-b20e5312481b" />
<img width="1918" height="945" alt="image" src="https://github.com/user-attachments/assets/191ae9a7-95bc-4cd9-831a-e6cc3792e3b9" />
<img width="1919" height="946" alt="image" src="https://github.com/user-attachments/assets/ecaf59fb-fb08-4c53-9976-cac02a7f63f2" />
<img width="1919" height="956" alt="image" src="https://github.com/user-attachments/assets/3ff18a41-42bb-4b85-a98b-34c24f8b979f" />
<img width="1915" height="951" alt="image" src="https://github.com/user-attachments/assets/a40a8ffc-ddc3-419e-b920-2d81394d8288" />

- View Layout
Layout digunakan sebagai template utama yang berisi struktur dasar HTML. Halaman lain cukup mengisi bagian tertentu saja menggunakan konsep section, sehingga tidak perlu menulis ulang kode yang sama.

- View Cell
View Cell digunakan untuk membuat komponen kecil yang bisa digunakan berulang, seperti sidebar atau daftar artikel terbaru. Komponen ini memiliki logic sendiri dan bisa dipanggil langsung dari layout.

## Praktikum 4 – Login dan Authentication
Pada tahap ini, aplikasi mulai dilengkapi dengan sistem login.

<img width="1918" height="949" alt="image" src="https://github.com/user-attachments/assets/4d3c8ce1-2b5a-4340-b68e-c33237efa38d" />

- Tabel User
Database dibuat dengan tabel user yang menyimpan data seperti username, email, dan password.

- Model User
Model digunakan untuk menghubungkan aplikasi dengan tabel user, serta mengatur field yang digunakan.

- Controller Login
Controller menangani proses login dan logout. Data dari form akan dicek ke database, dan jika sesuai, akan disimpan dalam session.

- View Login
Halaman login berisi form input email dan password. Jika terjadi kesalahan, akan ditampilkan pesan menggunakan flashdata.

- Seeder
Seeder digunakan untuk menambahkan data dummy ke database melalui CLI, sehingga tidak perlu input manual.

- Filter Authentication
Filter berfungsi untuk membatasi akses ke halaman tertentu. Jika user belum login, maka otomatis akan diarahkan ke halaman login.

## KESIMPULAN
Dari praktikum 1–4, dapat dipahami bahwa:
- CodeIgniter 4 mempermudah pengembangan web dengan konsep MVC
- Routing, controller, dan view saling terhubung dalam alur aplikasi
- Database digunakan untuk mengelola data secara dinamis
- Layout dan view cell membantu membuat tampilan lebih rapi
- Sistem login menambah keamanan dan kontrol akses
