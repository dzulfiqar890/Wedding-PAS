<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reza & Agnes Wedding</title>
  <link href="https://cdn.tailwindcss.com/3.3.3" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="countdown/simplyCountdown.css" />
  <script src="countdown/simplyCountdown.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="desain/style.css">
</head>

<body class="font-sans bg-gray-100 ">

<section id="hero" class="hero relative w-full h-screen flex items-center justify-center 
  bg-cover bg-center  
  bg-hero-pattern 
  before:absolute before:inset-0 before:bg-black before:opacity-60" style="background-image: url('img/bg-awal.png');">
  <div class="relative z-10 text-center">
    <h4 class="text-xl font-work-sans text-white">Kepada Bapak/Ibu/Saudara/i,</h4>
    <h1 class="text-5xl font-sacramento text-pink-500">Reza & Agnes</h1>
    <p class="mt-4 font-work-sans text-white" >Akan melangsungkan resepsi pernikahan dalam:</p>
    
    <div class="simply-countdown my-6 text-white"></div>
    
    <a href="#home" 
      class="inline-block bg-custom-pink text-white 
      px-8 py-3 rounded-md 
      hover:bg-pink-400 transition duration-300"
      onClick="enableScroll()">
      Lihat Undangan
    </a>
  </div>
</section>

  <nav class="sticky top-0 mynavbar">
    <div class="container mx-auto flex justify-between items-center p-4">
      <a class="navbar-brand">Wedding</a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="navbar-nav ">
            <a class="nav-link p-2" href="#home">Home</a>
            <a class="nav-link p-2" href="#info">Info</a>
            <a class="nav-link p-2" href="#story">Story</a>
            <a class="nav-link p-2" href="#gallery">Gallery</a>
            <a class="nav-link p-2" href="#rsvp">RSVP</a>
            <a class="nav-link p-2" href="#game">Game</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section id="home" class="home" style="background-image: url('img/bg.png');">
  <div class="container text-center mx-auto p-5 min-h-screen">
      <h2 class="text-5xl text-pink-500 font-sacramento">Acara Pernikahan</h2>
      <h3 class="text-xl text-gray-700">Diselenggarakan pada 20 November 2024 di Banyumas, Jawa Tengah.</h3>
      <p class="text-gray-600">Oleh karena itu, dengan segala hormat, kami bermaksud untuk mengundang Bapak/Ibu, Saudara/i, untuk hadir pada acara pernikahan kami.</p>

      <div class="flex justify-center mt-10">
        <div class="w-1/2 flex items-center">
          <div class="w-2/3 text-right pr-4">
            <h3 class="text-2xl text-pink-500 font-sacramento">Reza</h3>
            <p class="text-gray-300">Anak Kedua dari tiga bersaudara, masih sehat dan bugar.</p>
            <p class="text-gray-300">Putra dari Bapak Haidar <br> dan <br> Ibu Trijayanti</p>
          </div>
          <div class="w-1/3">
            <img src="img/Reza.png" alt="Reza" class="rounded-full w-full">
          </div>
        </div>
        <span class="text-red-500 text-5xl mx-4 "><i class="bi bi-heart-fill"></i></span>

        <div class="w-1/2 flex items-center">
          <div class="w-1/3">
            <img src="img/Agnes.png" alt="Agnes" class="rounded-full w-full">
          </div>
          <div class="w-2/3 text-left pl-4">
            <h3 class="text-2xl text-pink-500 font-sacramento">Agnes</h3>
            <p class="text-gray-300">Anak Ketiga dari 9 bersaudara, masih hidup dan kuat.</p>
            <p class="text-gray-300">Putra dari Bapak Barus <br> dan <br> Ibu Siti</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="info" class="info">
    <div class="container mx-auto">
      <div class="flex justify-center">
        <div class="w-full md:w-8/12 text-center">
          <h2>Informasi Acara</h2>
          <p class="alamat">Alamat: Smk Telkom Purwokerto. <br> Jl. DI Panjaitan, purwokerto kidul</p>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1898.3717680761647!2d109.24892925086442!3d-7.435441172784723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e9d1768e4d1%3A0x959269c10818fa0c!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1726286003467!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<br>
          <a href="https://maps.app.goo.gl/a6QpqgbeyX5y9gSn9" target="_blank" class="bg-white text-black py-2 px-4 rounded my-3 ">Klik untuk membuka peta</a><br><br>
          <p class="description">Diharapkan untuk tidak salah alamat dan tanggal. Manakala tiba di tujuan namun tidak ada tanda-tanda sedang dilangsungkan pernikahan, boleh jadi Anda salah jadwal, atau salah tempat.</p>
        </div>
      </div>

      <div class="flex justify-center mt-4 p-5">
        <div class="w-full md:w-5/12 mb-5 pr-5">
          <div class=" text-white rounded-lg shadow-lg" style="background:#3B3B3B;">
            <div class="p-4 border-b">
              <h5 class="font-bold">Akad Nikah</h5>
            </div>
            <div class="p-4">
              <div class="flex justify-between">
                <div class="text-center">
                  <i class="bi bi-clock d-block"></i>
                  <span>08.00 - 10.00</span>
                </div>
                <div class="text-center">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span>Minggu, 20 November 2031</span>
                </div>
              </div>
            </div>
            <div class="p-4 border-t">
              Saat acara akad diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
            </div>
          </div>
        </div>
        <div class="w-full md:w-5/12">
          <div class="text-white rounded-lg shadow-lg"style="background:#3B3B3B;">
            <div class="p-4 border-b">
              <h5 class="font-bold">Resepsi</h5>
            </div>
            <div class=" p-4">
              <div class="flex justify-between">
                <div class="text-center">
                  <i class="bi bi-clock d-block"></i>
                  <span>11.00 - selesai</span>
                </div>
                <div class="text-center">
                  <i class="bi bi-calendar3 d-block"></i>
                  <span>Minggu, 20 November 2031</span>
                </div>
              </div>
            </div>
            <div class="p-4 border-t">
              Saat acara resepsi diharapkan untuk kondusif menjaga kekhidmatan dan kekhusyuan seluruh prosesi.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="story" class="story">
    <div class="container mx-auto">
      <div class="flex justify-center">
        <div class="w-full md:w-8/12 text-center">
          <span>Bagaimana Cinta Kami Bersemi</span>
          <h2>Cerita Kami</h2>
          <p>Ini adalah kisah bagaimana kita dapat bertemu, berusaha tetap setia dan saling menjalin hubungan bersama.</p>
        </div>
      </div>

      <div class="flex">
        <div class="w-full">
          <ul class="timeline">
            <li>
              <div class="timeline-image" style="background-image: url('img/smk-telkom.jpeg');"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Pertama Bertemu</h3>
                  <span>1 Juni 2023</span>
                </div>
                <div class="timeline-body">
                  <p>Diawali dengan Agnes yang melihat Reza tampil gagah dan keren membawa CBR dan tidak sengaja saling bertatap-tatapan membuat keduanya saling jatuh cinta pada pandangan pertama.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image" style="background-image: url('https://picsum.photos/300/300');"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Mulai Serius</h3>
                  <span>2 Januari 2023</span>
                </div>
                <div class="timeline-body">
                  <p>Kami pun serius menjalani hubungan dengan diawali pacaran cinta monyet.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image" style="background-image: url('https://picsum.photos/301/301');"></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3>Tunangan</h3>
                  <span>7 November 2030</span>
                </div>
                <div class="timeline-body">
                  Tanpa malu, Reza memulai keberaniannya untuk melamar ananda Agnes dengan harapan diterima dikeluarganya, walaupun banyak rintangan.
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="container mx-auto p-5">
      <div class="flex justify-center">
        <div class="w-full md:w-8/12 text-center">
          <span>Memori Kisah Kami</span>
          <h2>Galeri Foto</h2>
          <p>Kumpulan foto-foto yang mengabadikan momen-momen indah kami bersama.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center">
      @foreach($tables as $row)
        <div class="mt-3 bg-red">
          <a href="storage/{{$row->image}}" data-toggle="lightbox" data-caption="Reza & Agnes 1" data-gallery="mygallery">
            <img src="storage/{{$row->image}}" alt="Reza & Agnes 1" class="img-fluid w-full rounded">
            <p class="bg-gray ml-1.5">{{$row->judul}} -- {{$row->tahun}}</p>
          </a>
        </div>
      @endforeach
      </div>  
      

  </section>

  <section id="rsvp" class="rsvp">
    <div class="container justify-center">
      <div class="flex justify-center">
        <div class="w-full md:w-8/12 text-center">
          <h2>Konfirmasi Kehadiran</h2>
          <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran.</p>
        </div>
      </div>

      <form method="POST" id="my-form"></form>
      <center>
      <div class="flex flex-col md:flex-row justify-center items-center p-5 ">
        <div class="mb-1 p-2">
          <label for="nama" class="form-label text-pink-300">Nama</label><br>
          <input type="text" class="form-control border rounded p-1" name="nama">
        </div>
        <div class="mb-1 p-2">
          <label for="jumlah" class="form-label text-pink-300">Jumlah</label><br>
          <input type="number" class="form-control border rounded p-1" id="jumlah" name="jumlah" min="1" max="5" value="1">
        </div>
        <div class="mb-1 p-2">
          <label for="status" class="form-label text-pink-300">Konfirmasi</label><br>
          <select name="status" id="status" class="form-select border rounded p-1">
            <option selected>Pilih salah satu</option>
            <option>Hadir</option>
            <option>Tidak Hadir</option>
          </select>
        </div>
        <div class="mb-1 p-2 mt-5">
          <button type= "submit" class="bg-blue-500 text-white py-2 px-4 rounded">Kirim</button>
        </div>
      </div>
      </center>
            <br>
      <div class="flex justify-center mt-5">
        <div class="w-full md:w-6/12">
          <div id="disqus_thread"></div>
          <script>
            (function () {
              var d = document, s = d.createElement('script');
              s.src = 'https://wedding-telkom.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
            })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
      </div>
    </div>
  </section>

  <section id="game" class="text-game">
    <div class="flex justify-center">
      <div class="w-full md:w-8/12 text-center">
        <h2>Game Pernikahan Dino</h2>
        <p class="text-pink-300">Cukup Klik Kotak Pada Game Lalu Space Untuk <span class="text-red-500">Memulai Permainan!!</span></p>
      </div>
    </div>

    <div class="game">
      <div class="kotak">
        <iframe class="main-game" src="https://chromedino.com/" frameborder="0" scrolling="no" width="100%" height="100%" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <footer class=" text-center py-4">
    <div class="container mx-auto">
      <small class="block">&copy; 2024 Wedding. All Rights Reserved.</small>

      <ul class="mt-3 flex justify-center space-x-4">
        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
        <li><a href="#"><i class="bi bi-youtube"></i></a></li>
        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
        <li><a href="#"><i class="bi bi-tiktok"></i></a></li>
      </ul>
    </div>
  </footer>

  <div id="audio-container">
    <audio id="song" loop>
      <source src="audio/lagu.mp3" type="audio/mp3">
    </audio>

    <div class="audio-icon-wrapper" style="display: none;">
      <i class="bi bi-disc"></i>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  <script>
    simplyCountdown('.simply-countdown', {
      year: 2031,
      month: 12,
      day: 27,
      hours: 8,
      words: {
        days: { singular: 'hari', plural: 'hari' },
        hours: { singular: 'jam', plural: 'jam' },
        minutes: { singular: 'menit', plural: 'menit' },
        seconds: { singular: 'detik', plural: 'detik' }
      },
    });
  </script>

  <script>
    const stickyTop = document.querySelector('.sticky-top');
    const offcanvas = document.querySelector('.offcanvas');

    offcanvas.addEventListener('show.bs.offcanvas', function () {
      stickyTop.style.overflow = 'visible';
    });

    offcanvas.addEventListener('hidden.bs.offcanvas', function () {
      stickyTop.style.overflow = 'hidden';
    });
  </script>

  <script>
    const rootElement = document.querySelector(":root");
    const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
    const audioIcon = document.querySelector('.audio-icon-wrapper i');
    const song = document.querySelector('#song');
    let isPlaying = false;

    function disableScroll() {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function () {
        window.scrollTo(scrollTop, scrollLeft);
      }

      rootElement.style.scrollBehavior = 'auto';
    }

    function enableScroll() {
      window.onscroll = function () { }
      rootElement.style.scrollBehavior = 'smooth';
      playAudio();
    }

    function playAudio() {
      song.volume = 0.4;
      audioIconWrapper.style.display = 'flex';
      song.play();
      isPlaying = true;
    }

    audioIconWrapper.onclick = function () {
      if (isPlaying) {
        song.pause();
        audioIcon.classList.remove('bi-disc');
        audioIcon.classList.add('bi-pause-circle');
      } else {
        song.play();
        audioIcon.classList.add('bi-disc');
        audioIcon.classList.remove('bi-pause-circle');
      }

      isPlaying = !isPlaying;
    }
    disableScroll();
  </script>
  <script>
    window.addEventListener("load", function () {
      const form = document.getElementById('my-form');
      form.addEventListener("submit", function (e) {
        alert("Konfirmasi kehadiran berhasil terkirim!");
      });
    });
</body>

</html>