<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas PWD 03</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #242423;
    scroll-behavior: smooth;
    /* border: 2px solid blue; */
}

.navbar {
    justify-content: space-between;
    background-color: #06060673;
    overflow: hidden;
    align-items: center;
}

.navbar a {
    float: right;
    display: block;
    color: white;
    text-align: center;
    padding: 28px 16px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
    text-decoration: underline;
}

.Foto {
    align-items: center;
}

.navbar img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    padding: 10px;
}

.Foto span {
    font-family: Arial, sans-serif;
    position: relative;
    bottom: 27.5px;
    color: white;
    max-width: 400px;
}

.logg {
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.imgpz img {
    width: 120px;
    height: 115px;
    /* border: 2px solid #d61111; */
}

.textweb {
    line-height: 30px;
    margin: 10px 10px;
    font-size: 40px;
    font-style: bold;
    font-family: "Wix Madefor Display", sans-serif;
    /* border: 2px solid salmon; */
    color: white;
    position: relative;
    text-align: center;
    top: 210px;
}

.textweb p {
    color: #f5cb5c;
    white-space: nowrap;
    border-right: 2px solid white;
    overflow: hidden;
    animation: typing 3s steps(30) infinite;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 38%;
    }
}

.fullpage {
    text-align: justify;
    overflow: visible;
    color: white;
}

.fullpage h2 {
    font-family: "Wix Madefor Display", sans-serif;
    font-size: 40px;
}

.fullpage p {
    font-family: "Old Standard TT", "Old Standard TT Placeholder", serif;
    font-size: 18px;
    font-style: italic;
    line-height: 20px;
}

section#Bio {
    background-color: rgb(0, 0, 0);
    padding: 30px;
    position: absolute;
    width: 1156px;
    height: 450px;
    top: 650px;
}

.vid2 video {
    flex-shrink: 0;
    overflow: visible;
    position: absolute;
    top: 142.5px;
    left: 775px;
}

.vid1 video {
    position: absolute;
    overflow: visible;
    /* padding: 30px; */
    left: 125px;
}

section#Portofolio h2 {
    color: #f5cb5c;
    font-family: "Wix Madefor Display", sans-serif;
    overflow: visible;
    text-align: center;
}

section#Portofolio {
    background-color: #242423;
    padding: 30px;
    position: absolute;
    width: 1156px;
    height: 550px;
    top: 1160px;
}

.footer {
    position: relative;
    top: 1500px;
    background-color: #000000;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

/* Container inside the footer for better layout control */
.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Style for footer headings */
.footer h3 {
    font-family: "Wix Madefor Display", sans-serif;
    color: #f5cb5c;
    padding: 20px;
    margin: 5px;
    text-align: center;
    position: relative;
    right: 65px;
    font-size: 1.5em;
}

.footer a {
    color: #f5cb5c;
    font-size: 1em;
    margin-bottom: 5px;
    margin-right: 10px; /* Spasi antara ikon dan teks */
    font-size: 1.2em; /* Ukuran ikon */
}
.social-icons {
    position: absolute;
    top: 49px;
    right: 455px;
    text-align: center;
}

.klik {
    position: absolute;
    top: 80px;
    left: 560px;
    font-family: "Courier New", Courier, monospace;
}
</style>
  </head>
  <body>
    <!-- <div class="line">

    </div> -->
    <div class="navbar">
      <a href="#Contact">Contact</a>
      <a href="#Portofolio">Portofolio</a>
      <a href="#Bio">Bio</a>
      <a href="#Home">Home</a>
      <div class="Foto">
        <img src="𝘙𝔞𝑛𝘥ꪮ𝘮_.jpeg" alt="Foto profil" />
        <span>Muhammad Radikal</span>
      </div>
    </div>
    <div class="imgpz" id="Home">
      <img src="pzzz.png" alt="LOGO" class="logg" />
      <div class="textweb">
        <h2>Hi Welcome to My Website</h2>
        <br></br>
        <p>I`m Muhammad Radikal</p>
      </div>
    </div>
    <div class="fullpage">
        <section id="Bio">
            <h2>About Me</h2>
            <p>Halo! Nama saya Muhammad Radikal, dan saya adalah seorang video editor pemula dengan semangat besar dalam<br>
                 menciptakan karya-karya visual yang menginspirasi. Saya percaya bahwa setiap momen bisa menjadi sebuah cerita<br>
                  yang luar biasa, dan keahlian saya terletak pada mengubah momen-momen tersebut menjadi kisah-kisah menakjubkan<br>
                   melalui seni editing video.</p>

                <p>Sejak saya pertama kali menyentuh dunia editing video, saya terpesona oleh kemampuan untuk menggabungkan<br>
                     gambar, suara, dan efek visual untuk menciptakan pengalaman yang mendalam. Sebagai seorang pemula, saya<br>
                      memulai perjalanan ini dengan rasa ingin tahu yang besar dan tekad untuk terus belajar. Saya sering menghabiskan<br>
                        waktu untuk memahami berbagai perangkat lunak editing dan teknik-teknik baru yang memungkinkan saya untuk<br>
                          meningkatkan kemampuan editing saya.</p>
                
                <p>Salah satu hal yang saya senangi dalam proses editing adalah eksplorasi. Saya suka mencoba berbagai gaya<br>
                     editing, mulai dari yang sederhana dan elegan hingga yang penuh dengan efek-efek kreatif. Setiap proyek<br>
                      editing video adalah tantangan baru bagi saya, dan saya sangat antusias untuk terus belajar dan berkembang.</p>
        </section>
        <section id="Portofolio">
            <h2>My Portofolio!</h2>
            <div class="vid1">
                <video width="640" controls>
                    <source src="SVR2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="vid2">
                <video width="288px" controls>
                    <source src="Done.mp4" type="video/mp4">
                </video>
            </div>
        </section>
    </div>
    <footer class="footer" id="Contact">
      <div class="container">
          <h3>Contact Me : </h3>
          <div class="social-icons">
              <!-- Icon Phone -->
              <a href="tel:+1234567890"><i class="fas fa-phone"></i></a>
              <!-- Icon Instagram -->
              <a href="https://www.instagram.com/_dkall/?next=%2F" target="_blank"><i class="fab fa-instagram"></i></a>
              <!-- Icon Email -->
              <a href="mailto:example@example.com"><i class="fas fa-envelope"></i></a>
              <!-- Icon Twitter -->
              <a href="https://twitter.com/Tonyy300k" target="_blank"><i class="fab fa-twitter"></i></a>
          </div>
          <div class="klik">
              <button onclick="alert('Arigatou :3')">Subscribe Now!</button>
          </div>
      </div>
  </footer>
  </body>
</html>

