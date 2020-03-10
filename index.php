<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Lundakarnivalens hemsida">
  <meta name="keywords" content="lund, karnival, lunds universitet, universitet, skola">
  <meta name="author" content="Jonathan Mounzer">
  <title>Lundakarnivalen | Välkommen</title>
  <link rel="shortcut icon" type="image/png" href="Images/favicon.png">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/sliderStyle.css">
  <link rel="stylesheet" href="./css/sliderStyle2.css">
  <link rel="stylesheet" type="text/css" href="css/gridview.css">
  <link rel="stylesheet" type="text/css" href="css/mediaQueries.css">
  <link rel="stylesheet" href="./css/w3schoolsTillSektion.css">
  <script type="text/javascript" src="jquery.js"></script>
  </head>

  <header>
    <?php include 'template/header.php';?>
        <h1>Snart är det vart fjärde år</h1>
        <p>Missa inte lundakarnivalen!</p>
      </div>
    </section>
  </a>
  </header>

<body>
<?php include 'template/topNav.php';?>

<main class="content">
      <div class="row">
  <div class="left-column">
    <section id="boxes">
      <div class="container">
        <div class="tåget">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="Images/Karnevalen0601.jpg" style="width:100%">
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="Images/Karneval2010045.jpg" style="width:100%">
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="Images/Karneval2010049.jpg" style="width:100%">
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div class="karnevalister">
          <div class="bottomSlides fade">
            <div class="numbertext2">1 / 3</div>
            <img src="Images/Karneval2010061.jpg" style="width:100%">
          </div>

          <div class="bottomSlides fade">
            <div class="numbertext2">2 / 3</div>
            <img src="Images/Karneval2010054.jpg" style="width:100%">
          </div>

          <div class="bottomSlides fade">
            <div class="numbertext2">3 / 3</div>
            <img src="Images/Karneval2010052.jpg" style="width:100%">
          </div>

          <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
          <a class="next2" onclick="plusSlides2(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
          <span class="dot2" onclick="currentSlide2(1)"></span>
          <span class="dot2" onclick="currentSlide2(2)"></span>
          <span class="dot2" onclick="currentSlide2(3)"></span>
        </div>
      </div>
    </section>
  </div>
  <div class="middle-column">
    <article id="main-col">
      <?php include 'php/addNewsToIndex.php'; ?>
      <h1 class="main-title">På gång!</h1>
      <p>Karnevalståget är det största och absolut äldsta nöjet i Lundakarnevalen, ett flera km långt tåg fyllt med fest, glädje och humor! Tåget rullar norrut från Lundagård kl 13 under lördag och söndag, 19-20 maj. Med sina 20 vagnar plus mellanekipage kommer det ta drygt två timmar för den att göra sitt varv moturs genom Lund!
      </p>
      <p>
      Karnevalståget rullar nu för första gången på en ny bana. Karnevalståget är nämligen inte som andra tåg, vi är rälsaverta! Så på grund av arbetet med spårvagnen kommer vi i år från Allhelgonakyrkan ta Bredgatan och s:t Petri Kyrkogata ner till Clemenstorget, istället för att gå längs s:t Laurentiigatan. Läs mer <a href="omkarnevalen.php">här!</a>
    </p>

    <p>
      Vi ses där!
    </p>
    <h1 class="Gemenskap">Gemenskap</h1>
    <p>I lundakarnevalen kan du ta del och bekanta dig med vår kultur och Lunds mångfaldiga sidor. Lev i nuet! Träffa nytt folk, kulturer och tjänstemän. Bjud hit din familj och vänner och njut av musik med dans och en glädjefylld stämning!</p>
    <h1 class="Tävlingar">Tävlingar!!</h1>
    <p>Nu kan du lämna in ditt bidrag! Alla barn som har ett hjärta för konst och kreativitet har möjlighet att lämna in en teckning som illustrerar Lundakarnivalen med former och färger! Tio bästa kandidater kommer givetvis att få vinna ett pris.</p>
    </article>
  </div>
  <div class="right-column">
      <?php include 'php/addPostToIndex.php'; ?>
    <aside id="sidebar">
      <div class="dark">
      <img src="./Images/Karneval2010059.jpg">
      <h1>Michael Jackson Tribute</h1>
      <script language="javascript">
        document.write("<i>Uppdaterad: "+document.lastModified+"<i>");
      </script>
      <p>Missa inte kungen av pop nästa vecka! I samband med lundakarnevalen invigar vi vår föreställning med en stor hyllning till Michael Jackson!</p>
      <div class="robot">
      <img src="./Images/Lundakarnevalen 2014 16.jpg" height="600px">
      <h1>Sci-fi Show</h1>
      <script language="javascript">
        document.write("<i>Uppdaterad: "+document.lastModified+"<i>");
      </script>
      <p>Vi introducerar I-Darth, en saga som Blädderiet har producerat. Missa inte showen!</p>
    </div>
    </aside>
  </div>
      </div>
    </main>


<?php include 'template/footer.php'; ?>




    <script src="js/countdown.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/bottomslider.js"></script>
  </body>
</html>
