<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Ølsmakerorkesteret</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
      <?php
      if ($page == "tester") {
        echo '<li class="active"><a href="/html/tester.php">Tester</a></li>';
      }else {
        echo '<li><a href="/html/tester.php">Tester</a></li>';
      }
      if ($page == "galleri") {
        echo '<li class="active"><a href="/html/galleri.php">Galleri</a></li>';
      }else{
        echo '<li><a href="/html/galleri.php">Galleri</a></li>';
      }
      ?>
        <li><a href="https://github.com/anderssh/anderssh.github.io">Kildekode</a></li>
      </ul>
    </div>
  </div>
</nav>
