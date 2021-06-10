## Laporan Akhir Projek
- Nama sistem, Paralel, Kelompok, Nama Asisten Praktikum
  * Nama sistem: RASA (Reservasi Restoran)
  * Paralel: 3
  * Kelompok: 5
  * Nama Asisten Praktikum:
    - Qorry Atul Chairunnisa (G64170014)
    - Indah Puspita (G64170035)
- Nama anggota kelompok dan masing-masing role
  * Nurul Izzati Yulian (G24180021) sebagai Front End
  * Ahdini Zahra (G24180060) sebagai Back End
  * Afiyah Hayatunisa (G24180071) sebagai UI/UX Designer
- Deskripsi singkat aplikasi
  * “RASA” adalah sebuah website yang dirancang untuk memudahkan pelanggan melakukan reservasi restoran x. Dengan “RASA” kita dapat melakukan reservasi restoran dengan cepat dan mudah tanpa uang muka di awal. Hanya dengan memasukan data pribadi pelanggan dan mengatur jam serta tanggal pada website tanpa harus ribet datang ke restoran. Akan terdapat fitur pengingat yang dikirimkan melalui email kepada pelanggan yang sudah melakukan reservasi. Sehingga pelanggan tidak lupa sudah memiliki jadwal untuk makan di restoran x. Reservasi ini akan otomatis dibatalkan jika pelanggan tidak datang dalam 30 menit (setelah jadwal yang sudah ditentukan).
- User analysis 
  * User story
    - Sebagai pengguna yang belum terdaftar, agar dapat mengakses menu reservasi, saya dapat mendaftar terlebih dahulu dengan mengetikkan nama, alamat email, dan kata sandi
    - Sebagai pengguna yang terdaftar, agar dapat melakukan reservasi, saya dapat masuk ke menu reservasi untuk mengisi form pemesanan
    - Sebagai pengguna yang belum melakukan reservasi, agar dapat melihat menu makanan, saya dapat masuk ke beranda aplikasi
    - Sebagai pengguna yang telah melakukan reservasi, agar dapat melihat reservasi yang sedang dilakukan, saya dapat melihat menu reservasi saya di aplikasi
    - Sebagai pengguna yang telah melakukan reservasi, agar dapat melihat riwayat reservasi yang pernah dilakukan, saya dapat mengklik menu riwayat reservasi
    - Sebagai pengguna yang terdaftar, agar dapat merubah profil, saya dapat masuk ke menu profil saya
    - Sebagai pengguna yang telah logout, agar dapat  melakukan reservasi kembali, saya dapat mengetikkan alamat email dan kata sandi saya untuk masuk ke aplikasi
- Spesifikasi teknis lingkungan pengembangan
  * Software
    - Operating System: Windows 10
    - Text Editor: Visual Studio Code
    - Framework: Laravel, Vue Js, dan Bootstrap 4
    - Database: MySQL
    - Server: Apache
  * Hardware
    - Processor: Intel(R) Core(TM) i5-2410M CPU @ 2.3GHz
    - Memory: 6,00 GB
    - Graphics Card: DirectX 12 dengan Intel(R) HD Graphics 3000 
  * Tech Stack
    - Version Control dan Collaboration Platform : Github, Discord, Trello
    - Teknologi : CSS, HTML, Javascript, dan PHP
- Hasil dan pembahasan 
  * Use case diagram
    - ![RPL5-USE CASE DIAGRAM (1)](https://user-images.githubusercontent.com/78952649/121035799-6f5a8a00-c7d8-11eb-86c1-f4d40e3aca48.png)
  * Activity diagram
    - ![RPL5-ACTIVITY DIAGRAM](https://user-images.githubusercontent.com/78952649/121036692-10e1db80-c7d9-11eb-95ae-4231169db56d.png)
  * Class diagram
    - ![RPL5-CLASS DIAGRAM](https://user-images.githubusercontent.com/78952649/121036729-18a18000-c7d9-11eb-899e-3f9097db5c7f.png)
  * Entity relationship diagram
    - ![RPL5-ERD (1)](https://user-images.githubusercontent.com/78952649/121036759-1dfeca80-c7d9-11eb-9fe3-04fb0d7dcf8c.png)
  * Arsitektur sistem 
    - Arsitektur diagram
      * ![RPL5-Activity Diagram (1)](https://user-images.githubusercontent.com/78952649/121536966-b7261f00-ca2d-11eb-80e1-ee8f1c474b73.png)
    - Database
      * Ringkasan: Untuk menyimpan dan mengelola data, kami memutuskan untuk menggunakan MySQL.
      * Masalah: Data yang akan digunakan cukup banyak dan sering diperbarui secara terus menerus dikarenakan berupa website pemesanan tempat. Oleh karena itu, diperlukan penyimpanan atau storage yang dapat menampung semua data dengan terstruktur.
      * Batasan: Fitur-fitur didalamnya tidak terlalu lengkap akan tetapi dirasa masih cukup untuk digunakan pada software yang akan dikembangkan. Selain itu juga memiliki kemudahan akses dan dalam mempelajarinya.
      * Opsi: Terdapat beberapa aplikasi database yang sudah pernah digunakan seperti PostgreSQL dan MongoDB. Selain itu, ada juga MySQL yang sangat populer dan mudah ditemukan referensi penggunaannya. Akan tetapi, kami sebagai pemula lebih memperhitungkan banyaknya referensi terkait penggunaan aplikasi database ini. 
      * Rasional: Kami memilih opsi MySQL dikarenakan aplikasi ini mendukung integrasi dengan banyak bahasa pemrograman. Tak hanya itu, penggunaan yang mudah dan terstruktur menjadi alasan lainnya.
    - Bahasa pemrograman
      * Ringkasan: Untuk membuat website “RASA” kami menggunakan bahasa pemrograman Javascript, dan PHP, SQL.
      * Masalah: Untuk mengembangkan aplikasi, para pengembang harus menguasai bahasa pemrograman tertentu untuk memudahkan pengembangan. Dalam membuat website ini kami menggunakan bantuan beberapa framework untuk memudahkan dalam proses coding, oleh karena itu kami memilih menggunakan beberapa bahasa pemrograman untuk memudahkan pengembang.
      * Batasan: Para pengembang harus mempelajari lebih dalam tentang beberapa bahasa pemrograman yang digunakan dalam mengembangkan website.
      * Opsi: Javascript, dan PHP karena pengembang pernah mempelajari bahasa tersebut walaupun masih membutuhkan pembelajaran lebih mendalam.
      * Rasional: Kombinasi dari Javascript dan PHP karena memungkinkan untuk diterapkan. 
    - Framework
      * Ringkasan: Untuk mengembangkan aplikasi berbasis website, Kami menggunakan framework Laravel, Vue.Js, dan Bootstrap. 
      * Masalah: Seorang programmer seringkali menuliskan kode secara berulang-ulang. Kegiatan tersebut menyebabkan programmer menghabiskan banyak waktu dan tenaga untuk membuat kode baru dari awal sehingga kami membutuhkan framework.
      * Batasan: Script kode yang dibuat berasal dari berbagai macam bahasa pemrograman, sehingga perlu mencari tahu bagaimana cara menggabungkan script.
      * Opsi: Bootstrap menggunakan bahasa pemrograman CSS, sering digunakan para developer, tampilan yang dihasilkan memberikan kesan modern, dinamis, dan friendly khususnya di smartphone. Vue.js menggunakan bahasa pemrograman JavaScript, bersifat open source, proses integrasi lebih mudah. Laravel menggunakan bahasa pemrograman PHP, memiliki sintaks yang mudah dipahami dan digunakan, terintegrasi dengan library dan pihak ketiga, dapat dikembangkan menggunakan add-ons, dan dapat menjalankan task secara asynchronous.
      * Rasional: Laravel, Vue.Js, dan Bootstrap karena menyesuaikan dengan bahasa pemrograman yang digunakan.
     - Deploy website
       * Ringkasan: Untuk mendeploy website, kami memilih untuk menggunakan Heroku.
       * Masalah: Kode yang telah dibuat harus disatukan dengan server, penyimpanan database, dan aplikasi. Terdapat deploy website yang melakukan upload file terlebih dahulu pada file managernya sehingga tidak dapat dilakukan secara otomatis. Oleh karena itu, dibutuhkan deploy website yang dapat menyatukan secara langsung dengan cepat.
       * Batasan: Penggunaan Heroku masih mengandalkan akun GitHub Student yang masih digratiskan dalam jangka waktu tertentu, sehingga fitur-fitur untuk deploy tidak sebagus versi profesional.
       * Opsi: Terdapat banyak opsi untuk mendeploy software yang kami buat, seperti Heroku dan XAMPP. Dibandingkan dengan Heroku, aplikasi XAMPP lebih familiar penggunaannya dengan kami. Akan tetapi, aplikasi XAMPP hanya bisa digunakan pada server lokal sehingga mungkin kami hanya menggunakan saat uji coba software tidak untuk deploy.
       * Rasional: Heroku karena dapat digunakan secara gratis. Selain itu, dapat di custom supaya bisa autodeploy antara github dengan heroku. Jadi, perubahan apapun yang masuk ke github, akan langsung mengubah juga di Herokunya.
  * Fungsi utama yang dikembangkan
    - Dapat melakukan reservasi restoran dengan mudah
    - Dapat melihat menu dari restoran
  * Fungsi CRUD
    - Create: Membuat akun, Membuat pesanan
    - Read: Melihat Menu, Melihat Profil
    - Update: Mengubah Profil, Mengubah kata sandi
    - Delete: Menghapus pesanan
- Hasil implementasi 
  * Screenshot sistem 
  * Link aplikasi (jika sudah di deploy)
- Testing (Test cases)
  * Positive Cases
  * Negative Cases (Optional, jika ada jadi nilai tambah)
- Saran untuk pengembangan selanjutnya

## Catatan
- Laporan terakhir dikumpul sebelum presentasi projek pada pertemuan-14. Keterlambatan pengumpulan akan mengurangi nilai.
- Silahkan mempersiapkan presentasi dengan sebaik mungkin, jadwal presentasi akan diumumkan 1 jam sebelum presentasi. 
- Harap mempersiapkan slide, trello, github, dan demo aplikasi 5 menit sebelum jadwal presentasi Anda.
- Waktu presentasi hanya 20 menit untuk masing-masing kelompok (tidak ada penambahan waktu bagi yang telat join ke google meet)
