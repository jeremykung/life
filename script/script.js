<audio loop id="bgmusic">
  <source src="audio/night.mp3" type="audio/mpeg"> <!-- Audio MP3 File -->
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

  $(document).ready(function(){

  // Media Player Script
    $(".playmusic").click(function() {
        $(".artist-link").addClass("show-artist");
    });
    $(".pausemusic").click(function() {
        $(".artist-link").removeClass("show-artist");
    });


  // Hover Blur that breaks when in mobile mode... flicker issue and can't click.. FIXED! by creating 2 navs that display and hide depending on screen size
    $(".nav1").hover(function() {
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

  // Show/Hide Body Elements


    $(".body-photography, .body-writing, .body-music, .body-guestbook").hide(); // Initial Hiding of Menu Elements

    $(".nav-music").click(function(){
        $(".body-photography, .body-writing, .body-home, .body-guestbook").fadeOut(1200);
        $(".body-music").delay(1200).fadeIn(2000);
    });
    $(".nav-photography").click(function(){
        $(".body-music, .body-writing, .body-home, body-guestbook").fadeOut(1200);
        $(".body-photography").delay(1200).fadeIn(2000);
    });
    $(".nav-writing").click(function(){
        $(".body-music, .body-photography, .body-home, .body-guestbook").fadeOut(1200);
        $(".body-writing").delay(1200).fadeIn(2000);
    });
    $(".nav-guestbook").click(function(){
        $(".body-music, .body-writing, .body-photography, .body-home").fadeOut(1200);
        $(".body-guestbook").delay(1200).fadeIn(2000);
    });
    $(".menu-toggle").click(function(){
        $(".body-music, .body-writing, .body-photography, .body-guestbook").fadeOut(1200);
        $(".body-home").delay(1200).fadeIn(2000);
    });

  // Menu Toggle
    $(".menu-toggle").on("mousedown", function() {
        $(".menu").toggleClass("show-menu");
        $(".menu-footer").toggleClass("show-menu");
    });
    $(".mobile-menu-toggle").on("mousedown", function() {
        $(".menu").toggleClass("show-menu");
        $(".menu-footer").toggleClass("show-menu");
    });

    });
