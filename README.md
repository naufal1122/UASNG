PROJECT SKD Kelompok 6

Deskripsi Proyek : 
Manajemen Perpustakaan "PerpusBoss" dengan Laravel 8. 

Aplikasi manajemen perpustakaan kami pada intinya adalah sebuah aplikasi untuk 
memanajemen serta memonitoring persewaan dan pengembalian buku perpustakaan.
Di aplikasi ini, user dapat melakukan persewaan buku yang nantinya akan di approve
oleh petugas perpustakaan.

Dan nantinnya, user dapat melihat katalog buku serta melakukan request persewaan di
halaman depan. (attach screenshot A dibawah ini)

Dan di halaman dashboard adminstrator, admin dapat melakukan CRUD Master Buku, Menambah User, 
serta melihat transaksi buku serta chart laporan peminjaman.
(Attach screenshot B dibawah ini)

Dan di halaman dashboard petugas, petugas dapat melakukan CRUD Buku, Approve peminjaman,
dan melakukan pengembalian buku, melihat transaksi serta chart laporan peminjaman.
(Attach screenshoot C dibawah ini)


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
