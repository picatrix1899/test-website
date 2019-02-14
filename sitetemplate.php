<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <base href="/test-website/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <title>FZ</title>
  </head>
  <body>

    <div class="main">
      <div class="head">
        <img class="image" src="dragon_by_tira_owl_d546de2.jpg">
        <div class="navbar" id="navbar">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tutorials/">Tutorials</a>
                </li>
              </ul>
            </div>
          </nav>
          <nav class="breadcrumbs" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <?php
              foreach($breadcrumbs as $breadcrumb)
              {
                if($breadcrumb['current'])
                {
                  echo '<li class="breadcrumb-item active" aria-current="page">' . $breadcrumb['name'] . '</li>';
                }
                else
                {
                  echo '<li class="breadcrumb-item"><a href="' . $breadcrumb['link'] . '">' . $breadcrumb['name'] . '</a></li>';
                }
              }
              ?>            
            </ol>
          </nav>
        </div>
      </div>

      <script>
        window.onscroll = function() {myFunction()};
        
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
      </script>

      <div class="content">
        <div id="content"></div>

        <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
        <script>
           document.getElementById('content').innerHTML =
           marked(<?php echo json_encode($content) ?>, {gfm: true});
        </script>
      </div>
    </div>
    
    <div class="left-sidebar">
      <div class="left-sidenavbar" id="left-sidenavbar">
        <?php
          foreach ($links as $link)
          {
            if($link['current'])
            {
              echo '<span class="sidebar-item-active">' .  $link['name'] . '</span>';
            }
            else
            {
              echo '<a class="sidebar-item" href="' . $link['link'] . '">' . $link['name'] . '</a>';
            }
          }

        ?>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>