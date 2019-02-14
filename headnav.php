<div class="head">
  <img src="dragon_by_tira_owl_d546de2.jpg">
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