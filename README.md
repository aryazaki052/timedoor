ini adalah aplikasi yang sudah saya buat. 


langkah pertama yang saya lakukan adalah membuat project laravel dengan composer. lalu membuka halaman nya dengan perintah artisan. 
setelah itu yang saya lakukan adalah membuat view dan controller nya dulu dan mengkonfigurasi route nya. 
setelah semua tampilan dirasa sudah pas lalu saya membuat logika dalam aplikasi nya
sebelum membuat logika nya saya memerlukan sebuab database dan membuat model nya. dimulai dari tabel author, buku, rating
setelah membuat tabel saya membuat data dummy dengan menggunakan data faker dan database seeder. 
lalu saya membuat logika aplikasi nya.
yang pertama adalah untuk tampilan home nya yang dimana akan menampilkan list dari buku yang ada. list dimulai dari rating tertinggi dengan tampilan default nya hanya menampilkan 10 buku. saya mengambil data buku dari tabel book yang dimana saya membuat logika untuk mengurutkan buku dengan rating tertinggi. lalu akan di return ke view dari home. setelah itu saya membuat fitur shown list dengan menggunakan query ke database utuk menampilkan 10 data sampai dengan 100 data. lalu untuk logika search nya saya juga menggunakan logika kondisi. 
halaman kedua yaitu halaman top 10 author. saya membuatnya dengan mengambil 10 author teratas berdasarkan jumlah voter dan dimulai dari rating 5. langkah pertama yang saya lakukan adalah query semua data author yang ada di tabel author. lalu saya merelasikan nya dengan tabel buku dengan fk id_author. saya juga merelasikan tabel buku dengan tabel rating untuk mengambil rating buku berdasarkan author nya. jika rating nya lebih dari 5 maka akan ditampilkan. setelah itu saya membuat logika untuk mengambil voter terbanyak dari author.
tampilan ketiga saya membuat input rating. didalam input rating saya mengambil nama author dari tabel author. lalu iuntuk nama buku akan tampil sesuai dengan id_author nya. disini saya menggunakan ajax untuk menampilkan buku sesuai dengan id. saya menggunakan ajax karena saat user belum memilih author nya maka buku tidak tampil. setelah user memilih author maka akan tampil buku yang dibuat oleh author nya. setelah itu saat user me klik button submit maka akan langsung ke direct ke halaman awal yaitu list buku. 

https://drive.google.com/file/d/1D6Rr4WbbIBmd-X_Cb_fT0IRK9fUFO_6Z/view?usp=sharing
