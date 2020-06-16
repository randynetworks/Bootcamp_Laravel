# Bootcamp_Laravel
Source Code dan Latihan Bootcamp Laravel web Development Sanbercode

### Week 1 day 1
#### Berkenalan dengan HTML
##### Apa itu HTML ?
HTML merupakan singkatan dari Hyper Text Markup Language. HTML adalah sebuah bahasa standar untuk pembuatan halaman web. Dengan adanya HTML, kita dapat membedakan struktur yang tersusun dari sebuah halaman melalui tag atau elemen-elemen penyusunnya.

Elemen atau tag pada HTML dikenali oleh browser seperti google chrome, firefox atau Ms Edge, dll. Browser tersebut mengidentifikasi setiap elemen penyusun HTML dan ditampilkan sesuai karakteristik elemen tersebut. Contohnya sebuah elemen paragraph akan ditampilkan sebagai tulisan panjang, atau sebuah elemen pranala/link akan dicetak dengan warna biru dan ketika mouse mendekat kursornya berubah menjadi telunjuk, dsb.

Contoh sebuah halaman HTML sederhana:

    <!DOCTYPE html>
    <html>
    <head>
    <title>Page Title</title>
    </head>
    <body>

    <h1>My First Heading</h1>
    <p>My first paragraph.</p>

    </body>
    </html>
Dari contoh di atas kita dapat mengidentifikasi elemen-elemen nya seperti berikut

    element <!DOCTYPE html> mengartikan bahwa dokumen ditulis dengan versi HTML5
    elemen <html> adalah elemen induk atau elemen utama yang sering disebut juga root element dari sebuah halaman HTML.
    elemen <head> berisi informasi tentang halaman HTML yang sedang dibuat
    elemen <title> adalah judul dari halaman HTML yang akan tampil di tab browser.
  
##### Elemen pada HTML 
Elemen atau sering disebut dengan tag pada HTML adalah penyusun dari sebuah halaman web yang dapat dikenali oleh browser dan ditampilkan oleh browser sesuai karakteristik masing-masing.

Sebuah elemen HTML terdiri dari tag pembuka(start/open tag), atribut (attribute), isi (content), dan tag penutup(close tag).


pada ilustrasi di atas merupakan sebuah elemen paragraph dibuka dengan tag pembuka <p> . Di dalam tag pembuka tersebut terdapat atribut class yang disematkan ke dalam tag. Isi atau content dari sebuah tag paragraph <p> akan ditampilkan sebagai paragraf. lalu terakhir sebuah tag ditutup dengan sebuah tag penutup.

catatan

    Tidak semua elemen HTML memiliki tag penutup seperti <input> <img> <meta> .
    Elemen di dalam elemen (nested element)
    sebuah elemen HTML dapat terisi dengan elemen-elemen lain di dalamnya. Semua dokumen HTML yang kita lihat di halaman web terdiri dari kumpulan elemen bersarang atau elemen yang mengandung elemen lain di dalamnya.

Contohnya halaman berikut:

    <!DOCTYPE html>
    <html>
    <body>

    <h1>My First Heading</h1>
    <p>My first paragraph.</p>

    </body>
    </html>
    
Pada contoh di atas elemen <html> adalah root element dan merupakan elemen utama di dokument HTML. elemen tersebut dibuka dengan tag pembuka <html> dan ditutup dengan </html>. Lalu di dalam elemen <html> terdapat elemen <body> . elemen <body> merupakan elemen yang akan ditampilkan ke halaman web yang diawali dengan tag pembuka <body> dan ditutup dengan sebuah tag penutup </body> , dan seterusnya sehingga terciptalah sebuah halaman web yang utuh.

Untuk mulai berkenalan dengan elemen-elemen pada HTML terdapat video tutorial yang dapat diikuti seperti berikut:

Belajar HTML dari Dasar oleh Sekolah Koding: https://www.youtube.com/playlist?list=PLCZlgfAG0GXC9ojTmU95BRefbJoi4clY-
Tutorial HTML Arkademy : https://www.youtube.com/playlist?list=PLf61QUuMoXcPC1Yc2km8B5qwWJgQ_7NZr

#### CSS
Cascading Style Sheet atau dikenal dengan CSS merupakan bahasa style sheet yang berguna untuk membantu menyajikan dokumen yang ditulis dengan HTML. CSS dipakai untuk mendesain halaman depan atau tampilan website (front end). Menggunakan CSS kita bisa mengatur warna , ukuran , posisi , background, dan lain lain. Sehingga ada nilai estetika yang ditambahkan dalam tampilan suatu website.

##### Selektor , Properti dan Value 
Pada CSS ada beberapa istilah biasa kita temukan diantara : selector , properti, dan value . Kita mempelajari terlabih dahulu pengertian dari ketiga istilah tersebut.

Selektor adalah metode pengelompokan syntax didalam CSS. Selector juga dapat diartikan sebagai aturan yang digunakan untuk memisahkan beberapa syntax dengan target yang berbeda.

Properti adalah suatu jenis style CSS yang berfungsi memberikan style pada selector yang telah ditentukan. Property pada CSS sangat banyak sekali. Banyak contoh properti css seperti : background-color, color, font-family, font-size, margin, padding dan lain lain.

Value adalah nilai dari property . Dan value harus bersesuaian dengan properti, misalnya properti "font-family" tidak bisa diisi "red" karena "red" adalah value untuk property "color".

Ada bentuk baku penulisan selektor , properti dan value :



Gambar 1 bentuk baku penulisan selektor , properti , dan value pada css

    //contoh css
    h2 { 
          font-family: sans;
          color: rgb(10, 8, 8);
    }
    
selektor pada contoh diatas adalah h2
properti pada contoh diatas adalah font-family dan color
value pada contoh diatas adalah sans dan rgb(10, 8, 8);
Cara Penulisan Kode CSS dalam HTML 

##### Internal CSS
Penulisan CSS didalam tag <head> atau <body> HTML. Penulisannya ditulis dalam tag <style> .

    <!DOCTYPE html>
    <html>
    <head>   
      <style type="text/css">
        p{
          font-family: Helvetica;
          line-height: 2.00 em;
          font-size: 20px;
          color: orange;
         }
        </style>
    </head>

    <body>

      <style type="text/css">
        h2 { 
          font-family: sans;
          color: rgb(10, 8, 8);
        }
      </style>

      <h2>Hello CSS</h2>
      <p>Hello aku bisa CSS</p>
    </body>
    </html>

Gambar 2 Contoh Internal CSS dalam HTML dan tampilannya

##### Eksternal CSS
Penulisan CSS terpisah dengan file HTML. File CSS ditulis dan disimpan dengan file berekstensi .css .Untuk memasukkan ekstensi CSS ke HTML menggunakan tag <link href="dirfolder/namefile.css">. href diisi direktori folder dan nama file CSS untuk mengarahkan halaman html menemukan file CSS tersebut.


Gambar 3 <kiri> file HTML dan <kanan> style.css
Inline CSS
Penulisan CSS langsung di atribut HTML tersebut. Contoh cara pemakaian inline CSS:


Untuk lebih mengenal CSS terdapat video tutorial yang dapat diikuti seperti berikut:

Tutorial CSS dari Sekolah Coding: https://www.youtube.com/playlist?list=PLCZlgfAG0GXAvVZ1Wb1D7HVAPNJGk4f-G
CSS Dasar dari Web Programming Unpas :https://www.youtube.com/playlist?list=PLFIM0718LjIUBrbm6Gdh6k7ZUvPIAZm7p
Sumber: https://www.w3schools.com/cssref/


