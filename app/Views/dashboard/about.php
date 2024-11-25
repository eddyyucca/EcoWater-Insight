<?= $this->extend('layout/header'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container about-container">
        <h3>About the Creator</h3>
        
        <div class="profile-picture">
            <img src="<?= base_url('assets/profile-picture.jpeg'); ?>" alt="Profile Picture" class="img-fluid">
        </div>

        <p>
            Ini adalah aplikasi untuk monitoring kualitas air berbasis IoT (Internet of Things). Aplikasi ini dirancang untuk membantu pengguna dalam memantau parameter kualitas air seperti pH, kekeruhan, dan level air secara real-time.
        </p>

        
        <h4>Kontak</h4>
        <p>
            Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi saya di:
            <ul>
                <li>Email: eddy.as@bukitmakmur.com</li>
                <li>GitHub: github.com/eddyyucca</li>
            </ul>
        </p>

        <h4>Terima Kasih</h4>
        <p>
            Terima kasih telah menggunakan aplikasi ini! Saya berharap informasi yang diberikan dapat bermanfaat dalam kegiatan monitoring kualitas air.
        </p>
    </div>
</section>
<!-- /.content -->

<style>
     .about-container {
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .profile-picture {
        margin: 20px auto;
        width: 100px;  /* Ukuran kontainer lebih kecil */
        height: 100px; /* Ukuran kontainer lebih kecil */
        overflow: hidden; /* Sembunyikan bagian gambar yang lebih */
        border-radius: 50%; /* Bentuk lingkaran */
    }

    .profile-picture img {
        width: 100%; /* Mengisi lebar kontainer */
        height: 100%; /* Mengisi tinggi kontainer */
        object-fit: cover; /* Menjaga rasio aspek dan memotong bagian yang lebih */
    }

    footer.main-footer {
        margin-top: 40px; /* Memberikan jarak ke atas footer */
    }
</style>

<?= $this->endSection(); ?>