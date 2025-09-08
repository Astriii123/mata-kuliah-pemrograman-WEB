# ANALISIS BIOGRAFI
1. Bagian awal html
```html
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Saya</title>
```
Program portofolio ini dibuat dengan menggunakan HTML sebagai kerangka dasar dan CSS sebagai pengatur tampilan. Struktur HTML diawali dengan deklarasi <!DOCTYPE html> yang menandakan dokumen ini menggunakan standar HTML5. Tag <html lang="id"> menunjukkan bahwa bahasa utama yang digunakan adalah Bahasa Indonesia. Pada bagian <head> terdapat beberapa pengaturan penting, yaitu meta charset UTF-8 agar halaman dapat menampilkan karakter khusus, meta viewport untuk membuat tampilan lebih responsif di berbagai perangkat, serta judul halaman yang ditulis pada tag <title> dengan teks “Portofolio Saya”.

2. Bagian CSS (Style)
```html
<body {
  font-family: Arial, sans-serif;
  background-color:pink; 
  text-align: center;
  margin: 0;
  padding: 0;
}
```
Mengatur gaya dasar halaman: font Arial, latar belakang pink, teks rata tengah, margin & padding nol.
```html
<header {
  padding: 30px;
  background-color: pink; 
  color: white;
}
```
Bagian header diberi padding, background pink, dan teks berwarna putih.
```html
 <profile-pic {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid white;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}
```
Foto profil dibuat lingkaran (border-radius 50%), dengan ukuran tetap 150x150, diberi bingkai putih, dan bayangan agar tampak menonjol.

```Html
<social a {
  display: inline-block;
  margin: 10px;
  padding: 10px 20px;
  border-radius: 20px;
  text-decoration: none;
  font-weight: bold;
  background: white;
  color: #ff4da6;
  border: 2px solid #ff4da6;
  transition: 0.3s;
}
.social a:hover {
  background: #ff4da6;
  color: white;
}
```
Tombol media sosial dibuat oval, dengan warna dasar putih dan border pink. Saat hover (disorot mouse) warnanya berubah menjadi pink dengan teks putih.

```Html
.about-box {
  max-width: 700px;
  margin: 20px auto;
  background: white;
  border: 2px solid pink;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: left;
}
```
Bagian Tentang Saya + Pendidikan ditampilkan dalam kotak putih dengan border pink, sudut melengkung, bayangan lembut, dan posisi di tengah halaman.


```Html
.edu-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 15px;
}
.edu-table th, .edu-table td {
  border: 1px solid pink;
  padding: 8px;
  text-align: left;
}
.edu-table th {
  background: #ff4da6;
  color: white;
}
.edu-table tr:nth-child(even) {
  background: #ffe6f0;
}
```
Tabel Latar Belakang Pendidikan dibuat penuh lebar, border pink, baris genap diberi warna latar berbeda (striping), header berwarna pink dengan teks putih

3. Bagian Header
```Html
<header>
  <img src="Astri.jpg.jpg" alt="Foto Profil" class="profile-pic">
  <h1>Halo, I'm Astri 🌸</h1>
  <p>💕</p>
</header>
```
Menampilkan foto profil bulat, nama pemilik portofolio, dan ikon hati 💕.

4. Bagian tentang saya
```Html
<section class="about-box">
  <h2>Tentang Saya</h2>
  <div class="bio-info">
    <p><b>Nama:</b> Sulastri</p>
    <p><b>Pendidikan:</b> Mahasiswa Teknik Komputer (Angkatan 2024)</p>
    <p><b>Minat:</b> Teknologi, Desain Web, dan Pengembangan Aplikasi</p>
    <p><b>Hobi:</b> Nonton TikTok</p>
  </div>
  <div class="bio-desc">
      Saya adalah pribadi yang bersemangat dalam mempelajari hal-hal baru di bidang teknologi. 
      Bagi saya, dunia digital adalah ruang tanpa batas untuk berkreasi dan berinovasi. 
      Saya ingin terus mengembangkan keterampilan dalam pemrograman, desain antarmuka, 
      dan membangun aplikasi yang bermanfaat.  
      Harapan saya ke depan adalah menjadi seorang profesional yang bisa menginspirasi 
      dan berkontribusi dalam dunia teknologi. 🌸
    </div>
    ```
Bagian konten utama ditampilkan dalam sebuah kotak dengan class .about-box. Kotak ini memiliki background putih, border pink, sudut membulat, serta bayangan halus sehingga tampil lebih menarik. Di dalamnya terdapat informasi tentang pemilik portofolio, seperti nama, pendidikan, minat, dan hobi. Terdapat pula deskripsi singkat mengenai kepribadian, semangat belajar, serta harapan di masa depan.

5. latar belakang pendididkan
```Html
<h2>Latar Belakang Pendidikan</h2>
    <table class="edu-table">
      <tr>
        <th>Tahun</th>
        <th>Jenjang</th>
        <th>Institusi</th>
      </tr>
      <tr>
        <td>2012 - 2018</td>
        <td>Sekolah Dasar</td>
        <td>SDNK Rante Padang</td>
      </tr>
      <tr>
        <td>2018 - 2021</td>
        <td>SMP</td>
        <td>MTSG Gandeng</td>
      </tr>
      <tr>
        <td>2021 - 2024</td>
        <td>SMK</td>
        <td>SMK Negeri 4 Enrekang</td>
      </tr>
      <tr>
        <td>2024 - Sekarang</td>
        <td>Universitas</td>
        <td> Universitas Negeri Makassar</td>
      </tr>
    </table>
    </section>
  ```
  Riwayat pendidikan ditampilkan dalam bentuk tabel dengan class .edu-table. Tabel ini berisi tiga kolom utama, yaitu tahun, jenjang pendidikan, dan institusi. Tampilan tabel diperindah dengan border berwarna pink, header berwarna pink dengan teks putih, serta pewarnaan bergantian pada baris genap agar mudah dibaca. Informasi yang dimasukkan meliputi pendidikan dari tingkat sekolah dasar hingga universitas, sehingga pembaca dapat melihat perjalanan pendidikan secara jelas dan terstruktur.

  6. Ikuti Akun Sosmed
  ```Html
  <section>
    <h2>Ikuti Saya</h2>
   <div class="social"> 
    <a href="https://www.instagram.com/zastri_naji?igsh=OW81YWI0cGthYjcy"target="_blank">Instagram</a> 
    <a href="https://www.tiktok.com/@zastri.naji?_t=ZS-8zYcOpOJEDY&_r=1" target="_blank">TikTok</a> <a href="https://wa.me/6285249538797" target="_blank">WhatsApp</a>
    <a href="https://github.com/Astriii123" target="_blank">Github</a> 
    </div>
    </section>
     ```
     Pada bagian Ikuti Saya, ditampilkan beberapa tautan ke media sosial pemilik portofolio, seperti Instagram, TikTok, WhatsApp, dan GitHub. Tautan tersebut ditampilkan dalam bentuk tombol oval dengan warna dasar putih, teks pink, serta border berwarna pink. Efek hover digunakan sehingga ketika kursor diarahkan ke tombol, warnanya berubah menjadi pink dengan teks putih. Hal ini memberikan kesan interaktif dan menarik perhatian pengguna untuk mengunjungi akun media sosial pemilik portofolio.

7. footrer
```Html
<footer>
<p>© 2025 Portofolio Astri</p>
</footer>
```
Bagian terakhir dari program adalah footer yang berisi teks “© 2025 Portofolio Astri.





    