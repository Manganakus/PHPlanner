<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="lib/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.parallax');
                var instances = M.Parallax.init(elems, options);
            });
        </script>

    <div class="parallax-container">
      <div class="parallax"><img src="imgs/parallax1.jpg"></div>
    </div>
        

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="lib/materialize/css/js/materialize.js"></script>
    </body>
  </html>