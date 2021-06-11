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
  * “RASA” adalah sebuah website yang dirancang untuk memudahkan pelanggan melakukan reservasi restoran x. Dengan “RASA” kita dapat melakukan reservasi restoran dengan cepat dan mudah tanpa uang muka di awal. Hanya dengan memasukan data pribadi pelanggan dan mengatur jam serta tanggal pada website tanpa harus ribet datang ke restoran.
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
    - Beranda
      * ![Screenshot (232)](https://user-images.githubusercontent.com/78952649/121614909-f2563b80-ca89-11eb-8331-8ca71f0e14d1.png)
      * ![Screenshot (233)](https://user-images.githubusercontent.com/78952649/121614957-05690b80-ca8a-11eb-8a9b-4243147420b3.png)
      * ![Screenshot (234)](https://user-images.githubusercontent.com/78952649/121614993-16198180-ca8a-11eb-9bfe-643a8a100edf.png)
      * ![Screenshot (235)](https://user-images.githubusercontent.com/78952649/121614983-11ed6400-ca8a-11eb-99be-79b38b771cd3.png)
    - Login
      * ![Screenshot (237)](https://user-images.githubusercontent.com/78952649/121615030-2598ca80-ca8a-11eb-8e16-42fe5ca9888f.png)
    - Registrasi
      * ![Screenshot (238)](https://user-images.githubusercontent.com/78952649/121615027-25003400-ca8a-11eb-8d49-e3578e08452e.png)
    - Halaman setelah login
      * ![Screenshot (239)](https://user-images.githubusercontent.com/78952649/121615024-24679d80-ca8a-11eb-8b72-fb850aecdf03.png)
    - Buat reservasi
      * ![Screenshot (240)](https://user-images.githubusercontent.com/78952649/121615022-23cf0700-ca8a-11eb-8a08-4f8516b8903f.png)
    - Reservasi saya
      * ![Screenshot (241)](https://user-images.githubusercontent.com/78952649/121615017-229dda00-ca8a-11eb-80a3-74d29ac28d7d.png)
    - Riwayat
      * ![Screenshot (242)](https://user-images.githubusercontent.com/78952649/121615014-22054380-ca8a-11eb-8823-98839505af23.png)
    - Profil Saya
      * ![Screenshot (243)](https://user-images.githubusercontent.com/78952649/121615013-22054380-ca8a-11eb-8a6d-98646b1e90b5.png)
    - Ubah profil
      * ![Screenshot (244)](https://user-images.githubusercontent.com/78952649/121615011-216cad00-ca8a-11eb-91b0-917dc705dfc2.png)
    - Ubah kata sandi
      * ![Screenshot (245)](https://user-images.githubusercontent.com/78952649/121615009-1fa2e980-ca8a-11eb-95be-d9a7a0408863.png)
- Testing (Test cases)
  * ![testing](https://user-images.githubusercontent.com/78952649/121611002-7c4dd680-ca81-11eb-8b28-8ff44a391a72.jpg)
- Saran untuk pengembangan selanjutnya
  * Ide website lebih dimatangkan diawal
  * Manajemen waktu dalam pembuatan website lebih dioptimalkan
- Link dokumentasi
  [ipb.link/github-rasa](url)
  [ipb.link/trello-rasa](url)
  [ipb.link/figma-rasa](url)
  [ipb.link/gsite-rasa](url)

## Catatan
- Laporan terakhir dikumpul sebelum presentasi projek pada pertemuan-14. Keterlambatan pengumpulan akan mengurangi nilai.
- Silahkan mempersiapkan presentasi dengan sebaik mungkin, jadwal presentasi akan diumumkan 1 jam sebelum presentasi. 
- Harap mempersiapkan slide, trello, github, dan demo aplikasi 5 menit sebelum jadwal presentasi Anda.
- Waktu presentasi hanya 20 menit untuk masing-masing kelompok (tidak ada penambahan waktu bagi yang telat join ke google meet)
