<b>PROJECT SKD Kelompok 6</b>

<img width="823" alt="A  TAMPILAN FRONT END KATALOG BUKU" src="https://user-images.githubusercontent.com/65862366/208025220-ae1ab2a7-c025-403f-ba7c-8d955d10dc7c.png">

Deskripsi Proyek : 
Manajemen Perpustakaan "PerpusBoss" dengan Laravel 8. 

Aplikasi manajemen perpustakaan kami pada intinya adalah sebuah aplikasi untuk 
memanajemen serta memonitoring persewaan dan pengembalian buku perpustakaan.
Di aplikasi ini, user dapat melakukan persewaan buku yang nantinya akan di approve
oleh petugas perpustakaan.

Dan nantinnya, user dapat melihat katalog buku serta melakukan request persewaan di
halaman depan.
<img width="823" alt="A  TAMPILAN FRONT END KATALOG BUKU" src="https://user-images.githubusercontent.com/65862366/208025344-d05d8159-9250-4440-b965-2f8087f0f0e5.png">


Dan di halaman dashboard adminstrator, admin dapat melakukan CRUD Master Buku, Menambah User, 
serta melihat transaksi buku serta chart laporan peminjaman.
<img width="956" alt="B  TAMPILAN ADMIN DASHBOARD" src="https://user-images.githubusercontent.com/65862366/208025351-89214ae9-2366-4ce0-b4fc-39021854e4e6.png">


Dan di halaman dashboard petugas, petugas dapat melakukan CRUD Buku, Approve peminjaman,
dan melakukan pengembalian buku, melihat transaksi serta chart laporan peminjaman.
<img width="944" alt="C  TAMPILAN PETUGAS DASHBOARD" src="https://user-images.githubusercontent.com/65862366/208025362-bb67c1f5-de81-4808-a35e-d94d625bac74.png">



Fitur Manajemen Perpustakaan PerpusBoss :
- Register dan login dengan Google, Facebook
- Sistem Keamanan Captcha di halaman login
- Keamanan store password dengan hash laravel bcrypt
- Autentikasi Admin, Petugas dan Peminjam (user perpus)
- CRUD Kategori
- CRUD Buku
- CRUD Penerbit
- CRUD Rak
- Melakukan peminjaman buku
- Menampilkan chart
- Mengimplementasikan livewire
- Menggunakan admin LTE

Role Aplikasi PerpusBoss :
1. Adminstrator
	CRUD Master Buku (Kategori, Buku, Penerbit, Rak)
	Manajemen User (Menambahkan User Baru)
	Melihat semua laporan peminjaman
2. Petugas
	CRUD Master Buku (Kategori, Buku, Penerbit, Rak)
	Melakukan approve peminjaman dan pengembalian
	Melihat semua laporan peminjaman
3. User Peminjam (user perpus)
	Melihat Katalog Buku serta detail lengkap (Frontend)
	Melakukan request peminjaman buku dengan tanggal peminjaman
