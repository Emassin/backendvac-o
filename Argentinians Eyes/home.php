<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href=".\assets\css\Estilos.css" type="text/css" rel="stylesheet">
  <title>Argentinian's Eyes</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <style>
    * {
      box-sizing: border-box;
    }

    .elemcard {
      padding: 8px;
      background-color: #833ab4;
      transition: transform 0.5s;
      width: 90%;
      height: 100%;
      margin: 25px;
      position: relative;
      text-align: center;
    }

    .elemcard:hover {
      -ms-transform: scale(1.1);
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <div class="contenedor">
    <header class="header" id="myHeader">
      <a href="home.php">
        <img class="logo" src="Sol_de_Mayo_Bandera_Argentina.png" alt="Home" title="Home">
      </a>
    </header>
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="https://www.youtube.com/channel/UC0IO6CgdqWv3rmgclp4KvHA/about" target="_blank"><img src="YouTube logo.png" alt="YouTube" title="YouTube" class="YT"></a>
      <a href="https://www.twitch.tv/emanuelargentinianseyes" target="_blank"><img src="twitch-logo-png-1855.png" alt="Twitch" title="Twitch" class="twitch"></a>
      <a href="https://www.patreon.com/Argentinian_s_Eyes" target="_blank"><img src="pngwing.com.png" alt="Patreon" title="Patreon" class="pat"></a>
      <a href="tienda.html"><img src="quiosco.png" alt="Store" title="Store" class="store" style="height: 80px;"></a>
      <a href="./About.html">About</a>
    </div>
    <div id="main">
      <button class="openbtn" id="openbtn" onclick="openNav()">&#9776; </button>
    </div>
    <div class="arti">
      <h1 class="As">Argentinian's Eyes</h1>
      <p>The site where you can see everithing from an Argentinian's eyes.</p>
      <p>The aim of this project is to let you know, from anywhere in the world, everithing you want and need to know as regards Argentina and its culture. What's more, I will try to give my point of view of many other matters, from an Argentinian
        perspective.</p>
    </div>

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 8</div>
        <img src="https://ak.picdn.net/shutterstock/videos/10701020/thumb/1.jpg" style="width:100%">
        <div class="text">Bandera argentina</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 8</div>
        <img src="https://p1.pxfuel.com/preview/590/35/780/matt-friendship-evenings-people-hot-infusion.jpg" style="width:100%">
        <div class="text">Mate y yerba</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 8</div>
        <img src="https://i.ytimg.com/vi/ESx6PQ1e__4/maxresdefault.jpg" style="width:100%">
        <div class="text">El asado argentino</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 8</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Tango_Porte%C3%B1o.jpg" style="width:100%">
        <div class="text">Tango</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 8</div>
        <img src="https://www.mendovoz.com/u/fotografias/m/2020/4/3/f800x450-127798_179244_5050.jpg" style="width:100%">
        <div class="text">El fernet</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">6 / 8</div>
        <img src="https://www.abc.com.py/resizer/x0ghdHZV41rDJcDtrqV2NLc1dR4=/fit-in/770x495/smart/arc-anglerfish-arc2-prod-abccolor.s3.amazonaws.com/public/EJ6WPTVBLJCUVFCDOWDNMMNZ6E.jpg" style="width:100%">
        <div class="text">Un partido con amigos</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">7 / 8</div>
        <img src="https://images.clarin.com/2021/06/03/la-produccion-anual-de-fibra___1jptqf2Va_1256x620__1.jpg" style="width:100%">
        <div class="text">El campo y la economía</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">8 / 8</div>
        <img src="https://images.losandes.com.ar/resizer/Ooq6jqct78JRrrZ1TPr1phk2i4o=/800x450/smart/cloudfront-us-east-1.images.arcpublishing.com/grupoclarin/TEREKHCMPNBXPNQYAPF5SDOP2E.jpeg" style="width:100%">
        <div class="text">Diversidad natural</div>
      </div>
      <div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <span class="dot" onclick="currentSlide(8)"></span>
    </div>


    <div class="arti">
      <h1 class="As">Check the previous entries</h1>
      <p>We have plenty of topics explored and there are more to come</p>
    </div>

    <div class="content">
      <div class="elemcard" id="card">
        <div class="col-card">
          <a href="./mate.html">
            <img src="https://comidasparaguayas.com/wp-content/uploads/2020/04/receta-mate-paraguayo_700x465-640x425.jpg" alt="mate" style="width:100%">
          </a>
        </div>
        <div class="col-card" id="txt">
          <h2>Everything you need to know as regards mate</h2>
          <p>A complete guide on mate culture <br> Learn how to prepare and enjoy this traditional beverage</p>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="alfajores-de-chocolate-caseros-1030x622.jpg" alt="Alfajores" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2> What is an alfajor?</h2>
          <p>You can find a lot of varieties of this delicacy in the market and we'll teach you about them all and which ones we like the most in this post</p></a>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://www.argentinaenelmundo.com/wp-content/uploads/58-anos-de-la-Academia-Portena-de-Lunfardo-737x415.jpg" alt="Lunfardo" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>What is Lunfardo and why was it prohibited once </h2>
          <p>When and where was it born? is it a language itself? is it accepted by the RAE? You'll find the answer to those and more questions in this post</p>
        </div>
      </div>

      <div class="elemcard" id="card">
        <div class="col-card">
          <img src="pombero.jpg" style="width:100%" alt="Pombero">
        </div>
        <div class="col-card" id="txt">
          <h2>The Pombero or pomberito</h2>
          <p>A mithological creature that still scares many people <br> Is he a good or a bad guy?</p>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://www.alvearya.com.ar/wp-content/uploads/2019/01/Gauchito-Gil-Portada-2.jpg" alt="Gil" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>Sanctified by his followers he's become a figure to worship</h2>
          <p>A gaucho that became a saint and a healer <br> Learn about his origin, his life and the culture around him</p></a>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://lavdelossinvoz.files.wordpress.com/2013/03/hombre-lobo-9.jpg?w=840" alt="Lobison" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>Lobisón vs the Werewolf</h2>
          <p>There is a South American cousin of the Werewolf that comes from the aboriginal cultures, lets check the similarities and differences between them</p>
        </div>
      </div>

      <div class="elemcard" id="card">
        <div class="col-card">
          <img
            src="https://www.tripsavvy.com/thmb/UWpiK2n_UpglK3vZQm923GzldRA=/950x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/iguazu-falls--iguazu-national-park--brazil-argentina-paraguay-border--1171077586-0c0af92a39e24d179bfa236d3248b2db.jpg"
            alt="Iguazú" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>Iguazú falls as a natural attraction and as a legend</h2>
          <p>Aboriginal cultures had plenty of stories to explain the origin of things, today we will revise the one they had for the Iguazú falls</p>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://asgoped.files.wordpress.com/2017/01/pachamama1.jpg" alt="Pachamama" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>The goddess of earth or mother earth and giver of life</h2>
          <p>Adored by aboriginal cultures and believed to be the one who gives us life and food, a figre of a mother that takes care of us</p></a>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://www.eluniverso.com/resizer/PC_Z-zSvBRxFrKxz5DodssYLxmw=/1005x670/smart/filters:quality(70)/cloudfront-us-east-1.images.arcpublishing.com/eluniverso/BN464NRLMBB5FEVTILV5JTUN6I.jpg" alt="Pato" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>Our national sport </h2>
          <p>Is football the Argentina's national sport? It is easy to believe that due to the strong culture we have around it, but surprisingly or not, it is not, so let us show you the truth now</p>
        </div>
      </div>
      <div class="elemcard" id="card">
        <div class="col-card">
          <img src="https://www.casarosada.gob.ar/images/Granaderos.png" alt="Granaderos" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>The presidential guard and the fighters who gave us freedom</h2>
          <p>Lets revise their story, from when they appeared to the present time. Let's also try to compare them to similar forces in other countries, some more known to the world</p>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://www.cucinare.tv/wp-content/uploads/2019/10/Dulce-de-leche.jpg" alt="DDL" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>One of the main Argentinian delicacies and the base for many others</h2>
          <p>But... Is it really Argentinian? let's check that and let's try to make our own for you to try it if you can't buy it</p></a>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://www.villaocamposf.com.ar/img/noticias/paranadx.jpg" alt="Ramsar" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>Ramsar site Jaaukanigás</h2>
          <p>It is a protected area of wetlands with extremely beautiful landscapes and plenty of wildlife</p>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="http://www.revisionistas.com.ar/wp-content/uploads/2017/08/Ren%C3%A9-Favaloro.jpg" alt="Favaloro" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>One of the saddest stories in Argentinian history <br> Life and death of Ernesto Favaloro</h2>
          <p>A man that helped and still helps to save many lives and his tragic and unfair ending</P>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://i2.wp.com/www.todouruguay.net/wp-content/uploads/2017/04/leyendas_y_supersiticiones_luz_mala.png?w=900&ssl=1" alt="LuzMala" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>The bad light - La luz mala</h2>
          <p>A bright light in the middle of nowhere that's "staring" at you and... follows you? <br>Let's compare it with the Japanese Hitodama and let's see if they exist or what they are believed to be</p>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://palabradecampo.com/wp-content/uploads/2020/11/3150083.jpg" alt="Ceibo" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>The national flower of Argentina is a beautiful crimsom red one, it is the Ceibo flower</h2>
          <p>A big tree that blossoms in red and inevitably catches your attention while walking near it</p>
        </div>
      </div>
      <div class="elemcard">
        <div class="col-card">
          <img src="https://i.pinimg.com/originals/cb/93/80/cb938097c5b5e9a9addb9cdcaeaf224d.jpg" alt="Gaucho" style="width:100%">
        </div>
        <div class="col-card" id="txt">
          <h2>Enter here if you want to know about the gaucho</h2>
          <p>They are an important figure in the Argentinian culture and, even though they are not so popular nowadays, you can still find some out there</p>
        </div>
      </div>
    </div>
    <footer class="footer">
      <h3> massinemanuel@gmail.com <a href="https://www.linkedin.com/in/emanuel-mp/" target="_blank">LinkedIn</a> <a href="https://www.instagram.com/emassin_p/" target="_blank">Instagram</a></h3>
      <br>
      <p>Powered by Potrero Digital</p>
    </footer>
  </div>
  <script>
    function openNav() {

      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.getElementById("openbtn").className = "inactive";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
      document.getElementById("openbtn").className = "openbtn";
    }
  </script>

  <script>
    var slideIndex = 1;

    var myTimer;

    var slideshowContainer;

    window.addEventListener("load", function() {
      showSlides(slideIndex);
      myTimer = setInterval(function() {
        plusSlides(1)
      }, 4000);
      slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];

      slideshowContainer.addEventListener('mouseenter', pause)
      slideshowContainer.addEventListener('mouseleave', resume)
    })

    function plusSlides(n) {
      clearInterval(myTimer);
      if (n < 0) {
        showSlides(slideIndex -= 1);
      } else {
        showSlides(slideIndex += 1);
      }

      if (n === -1) {
        myTimer = setInterval(function() {
          plusSlides(n + 2)
        }, 4000);
      } else {
        myTimer = setInterval(function() {
          plusSlides(n + 1)
        }, 4000);
      }
    }

    function currentSlide(n) {
      clearInterval(myTimer);
      myTimer = setInterval(function() {
        plusSlides(n + 1)
      }, 4000);
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }

    pause = () => {
      clearInterval(myTimer);
    }

    resume = () => {
      clearInterval(myTimer);
      myTimer = setInterval(function() {
        plusSlides(slideIndex)
      }, 4000);
    }
  </script>

</body>

</html>
