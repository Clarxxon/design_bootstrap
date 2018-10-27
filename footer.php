<!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="./src/popper.min.js"></script>
  <script src="./src/bootstrap.min.js"></script>
  <script src="./src/holder.min.js"></script>
  <script src="animate.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });

    // I know that the code could be better.
    // If you have some tips or improvement, please let me know.

    $('.img-parallax').each(function () {
      var img = $(this);
      var imgParent = $(this).parent();
      function parallaxImg() {
        var speed = img.data('speed');
        var imgY = imgParent.offset().top;
        var winY = $(this).scrollTop();
        var winH = $(this).height();
        var parentH = imgParent.innerHeight();


        // The next pixel to show on screen      
        var winBottom = winY + winH;

        // If block is shown on screen
        if (winBottom > imgY && winY < imgY + parentH) {
          // Number of pixels shown after block appear
          var imgBottom = ((winBottom - imgY) * speed);
          // Max number of pixels until block disappear
          var imgTop = winH + parentH;
          // Porcentage between start showing until disappearing
          var imgPercent = ((imgBottom / imgTop) * 100) + (0 - (speed * 50));
        }
        img.css({
          top: imgPercent + '%',
          transform: 'translate(-50%, -' + imgPercent + '%)'
        });
      }
      $(document).on({
        scroll: function () {
          parallaxImg();
        }, ready: function () {
          parallaxImg();
        }
      });
    });
  </script>


</body>

</html>