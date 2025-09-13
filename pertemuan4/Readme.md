#ANALISIS
1. Struktur dasar HTML
```Html
<!DOCTYPE html>
<html lang="id">
<head> ... </head>
<body> ... </body>
</html>
```
Bagian ini adalah kerangka utama dokumen HTML.
<!DOCTYPE html> → menandakan bahwa dokumen ini menggunakan HTML5.
<html lang="id"> → mendefinisikan bahasa utama halaman, di sini Bahasa Indonesia.
<head> → berisi metadata (charset, viewport, judul, dan style CSS).
<body> → berisi semua konten yang akan ditampilkan ke pengguna.

2. Css slide ke3
```Html
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 15px;
  padding: 20px;
}
```
gallery dibuat dengan CSS Grid → otomatis membagi kolom.
grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)) → berarti:
Setiap kolom minimal 150px, maksimal fleksibel (1fr = mengisi sisa ruang).
auto-fit → jumlah kolom menyesuaikan lebar layar (responsif).
gap: 15px → memberi jarak antar gambar.
padding: 20px → memberi ruang di dalam container.

3. css
```Html 
.gallery img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  transition: transform 0.3s;
}
```
Gambar memenuhi kolom (width: 100%).
Tingginya seragam 150px.
object-fit: cover → gambar dipotong agar tetap proporsional tanpa melebar aneh.
border-radius: 12px → sudut gambar membulat
box-shadow → bayangan lembut biar terlihat menonjol.
transition: transform 0.3s → animasi halus saat ada efek hover.

4. css
```html 
.gallery img:hover {
  transform: scale(1.05);
}
```
Saat gambar dihover, ukurannya sedikit diperbesar (scale 1.05).
Efek ini membuat tampilan lebih interaktif.

5. slide 1
```html 
<div class="slide active" id="slide1">
  <h1>Hello Guys 👋, Selamat Datang di Portofolio Saya👋</h1>
  <button class="nav-btn" onclick="nextSlide(2)">Lanjut ➡</button>
</div>
```
Slide pertama berfungsi sebagai sambutan awal.
Teks `<h1>` menyapa pengunjung.
Tombol "Lanjut ➡" mengarah ke slide 2 lewat fungsi nextSlide(2).
class="active" → slide ini tampil pertama kali saat halaman dibuka.

6. Slide 3 (Galeri Foto)
```html
<div class="slide" id="slide3">
  <h2>Koleksi Momen Saya 📸</h2>
  <div class="gallery">
    <img src="kucing1.jpg.jpg" alt="Foto 1">
    <img src="kucing2.jpg.jpg" alt="Foto 2">
    <img src="kucing3.jpg.jpg" alt="Foto 3">
  </div>
  <button class="nav-btn" onclick="nextSlide(2)">⬅ Kembali</button>
</div>
```
judul `<h2>` → "Koleksi Momen Saya 📸".
`<div class="gallery">` → menampung 3 foto kucing dengan desain grid.
Setiap `<img>` diberi alt (teks alternatif jika gambar tidak muncul).
Tombol "⬅ Kembali" memungkinkan kembali ke slide 2.

7. code untuk slide
```html
function nextSlide(slideNumber) {
  document.querySelectorAll('.slide').forEach(slide => slide.classList.remove('active'));
  document.getElementById('slide' + slideNumber).classList.add('active');
}
```
Fungsi nextSlide(slideNumber) mengatur perpindahan slide.
document.querySelectorAll('.slide') → mengambil semua elemen dengan class .slide.
forEach(... remove('active')) → semua slide disembunyikan.
getElementById('slide' + slideNumber) → menampilkan slide sesuai nomor yang dipanggil.
Hasilnya, hanya satu slide aktif yang terlihat pada satu waktu.



