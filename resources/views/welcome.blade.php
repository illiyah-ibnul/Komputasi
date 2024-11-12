<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Semantik</title>
    <!-- Import file CSS dengan Vite -->
    @vite('resources/css/style.css')

</head>
<body>

<header>
    <h1 id="home">KKN Perumahan Dtar</h1>
</header>

<nav >
    <a href="#home" >Beranda</a>
    <a href="#about" >Tentang</a>
    <a href="#kiw" >Kontak</a>
</nav>

<main >
    <div class="wrapper" >
        <div id="boxkanan" style="text-align: center;">
            <article >
                <img src="\images\istigosah.jpg" alt="">
                <h2>ACARA ISTIGOSAH</h2>
                <p>Ikut bersosialisasi bersama warga membaca istigosah untuk memperingati malam 17 Agustus dan Membahas tentang kegiatan acara yang akan datang bersama ketua paguyuban</p>
        </div>
        <div id="boxkiri" style="text-align: center;">
            <img src="\images\tenis.jpg" alt="">
            <h2>LOMBA TENIS MEJA</h2>
            <p>Mengikuti kegiatan lomba tenis meja yang di adakan untuk memeriahkan lomba 17 Agustus dan mengambil foto dan vidio dokumentasi serta ikut andil dalam memeriahkan lomba tersebut</p>
        </article>
        </div>

        <aside>
            <h2>NAMA KEGIATAN</h2>
            <ul>
                <li>Acara istigosah memperingati malam 17 Agustus</li>
                <li>Pelaksanaan Lomba tenis meja</li>
            </ul>
        </aside>
    </div>
</main>

<section id="about" class="about">
    <h2 >KKN UNUJA Turut Serta dalam Perayaan HUT Kemerdekaan RI di Perumahan D'Tar</h2>
    <img src="\images\fotbar.jpg" id="kkn">
    <p>Dalam rangka memperingati Hari Kemerdekaan Indonesia, tim KKN dari UNUJA berkesempatan untuk berpartisipasi dan memeriahkan acara Agustusan di Perumahan D'Tar. Kegiatan ini dilaksanakan bersama warga sekitar, di mana kami bergabung dalam berbagai lomba dan acara hiburan yang menguatkan rasa persatuan serta mempererat tali silaturahmi antara tim KKN dan masyarakat.</p>
    <h4 class="daftar">ANGGOTA KKN</h4>
    <ol class="daftar">
        <li>Ubed Dwi Fani</li>
        <li>Illiyah Ibnul Basit</li>
        <li>Alvin</li>
        <li >Muhammad Urip</li>
        <li >Syaif Hakam</li>
        <li >Bima Tsaqif</li>
        <li>Sulaiman</li>
        <li id="kiw">Zainullah</li>
    </ol>
</section>

<section id="contact" class="contact">
    <h2>Kontak</h2>
    <p>Hubungi kami dengan mengisi formulir di bawah ini:</p>

    <form id="contact-form" action="proses_kontak.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

        <label for="phone">Nomor Telepon:</label>
        <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda" required>

        <label for="subject">Subjek:</label>
        <input type="text" id="subject" name="subject" placeholder="Masukkan subjek pesan" required>

        <label for="message">Pesan:</label>
        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>
</section>


<footer>
    <p>&copy; KKN OBE UNUJA 2024</p>
</footer>

</body>
</html>
