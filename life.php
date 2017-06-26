<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Life</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito|Slabo+27px" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Google hosted jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/life.css">

</head>

<body>

  <!-- Navigation -->
  <!-- nav1 is desktop menu, nav2 is mobile menu -->

  <nav class="nav1">
    <div class="menu-toggle">Menu</div>
    <div class="menu">
      <ul>
        <a href="life.php"><li>Life</li></a>
        <a href="portfolio.php"><li>Portfolio</li></a>
        <a href="gallery.php"><li>Gallery</li></a>
        <a href="bio.php"><li>Bio</li></a>
      </ul>
      <div class="audio-controls">
        <button class="music-btn, playmusic" onclick="playmusic()"><img src="images/music-play.png"></button>
        <button class="music-btn, pausemusic" onclick="pausemusic()"><img src="images/music-pause.png"></button>
        <div class="artist-link">
          <p><a href="https://nymano.bandcamp.com/" target="_blank">nymano<br>doceur (ft. saib)</a></p>
        </div>
      </div>
    </div>
    <div class="menu-footer">
      <p>© 2017 designed by Jeremy Kung</p>
    </div>
  </nav>

  <nav class="nav2">
    <div class="menu-toggle">Menu</div>
    <div class="menu">
      <ul>
        <a href="life.php"><li>Life</li></a>
        <a href="portfolio.php"><li>Portfolio</li></a>
        <a href="gallery.php"><li>Gallery</li></a>
        <a href="bio.php"><li>Bio</li></a>
      </ul>
      <div class="audio-controls">
        <button class="music-btn, playmusic" onclick="playmusic()"><img src="images/music-play.png"></button>
        <button class="music-btn, pausemusic" onclick="pausemusic()"><img src="images/music-pause.png"></button>
        <div class="artist-link">
          <p><a href="https://nymano.bandcamp.com/" target="_blank">nymano<br>doceur (ft. saib)</a></p>
        </div>
      </div>
    </div>
    <div class="menu-footer">
      <p>© 2017 designed by Jeremy Kung</p>
    </div>
  </nav>


  <!-- Media Player Script -->

  <script>
    $(".menu-toggle").on("mousedown", function() {
        $(".menu").toggleClass("show-menu");
        $(".menu-footer").toggleClass("show-menu");
    });
    $(".playmusic").click(function() {
        $(".artist-link").addClass("show-artist");
    });
    $(".pausemusic").click(function() {
        $(".artist-link").removeClass("show-artist");
    });


/* Hover Blur that breaks when in mobile mode... flicker issue and can't click
FIXED! by creating 2 navs that display and hide depending on screen size

*/    $(".nav1").hover(function() {
      $(".body").addClass("body-blur");
    }, function() {
      $(".body").removeClass("body-blur");
    });
/* Below is an alternative function for hover blur effect
    $(".nav1").mouseenter(function() {
      $(".body").addClass("body-blur");
    });
    $(".nav1").mouseleave(function() {
      $(".body").removeClass("body-blur");
    });
*/
  </script>

  <!-- Body -->

  <div class="body">

    <div class="body-content" id="life-header">
      <img src="images/logo-graphic.png" alt="">
      <h1>Welcome</h1>
      <p>This is where my inspiration lies<br>next to thoughts about my life.</p>
    </div>

    <div class="body-content">
      <img src="images/body bg.jpg">
      <p><br>Painting by <a href="http://www.pixiv.net/member.php?id=10746425">邦乔彦</a></p>
      <p class="life-post-foot">February 2017</p>
    </div>

    <div class="body-content">
      <h1>Zoom R8</h1>
      <p>Today I got a new toy... It's an 8 track portable recorder. I got it second hand and was a bit worried about it's condition, but after some tlc he got and bumping. Gonna have some fun with this little guy. I'll post some audio up here too when I record something nice.</p>
      <p class="life-post-foot">February 11 2017</p>
    </div>

    <div class="body-content">
      <h1>Nightingale</h1>
      <p>I woke up today to a speech by Earl Nightingale... a literary figure from a generation ago. His speech called 'The Strangest Secret' deterred me intially, as I dislike misleading sounding titles. However, the speech was beautifully spoken and very true to life. I do recommend giving it a listen.</p>
      <p class="life-post-foot">March 4 2017</p>
    </div>

  </div>

  <!-- Body Blur -->



  <!-- Music scripts, that activate on click in above Media Player Scripts -->

  <audio loop id="bgmusic">
    <source src="audio/01 douceur (ft saib.).mp3" type="audio/mpeg">
  Your browser does not support the audio element.
  </audio>

  <script type="text/javascript">
    var music = document.getElementById("bgmusic");

    function playmusic() {
      music.play();
    }

    function pausemusic() {
      music.pause();
    }
  </script>

</body>
