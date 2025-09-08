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






    