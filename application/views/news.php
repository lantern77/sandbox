
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">:seclub@MAC</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><?php echo anchor(base_url().index_page().'/main/goHome', 'Home', ''); ?><!--<a href="/sandbox/">Home</a>--></li>
                <li><a href="#about">About</a></li>
                 <li><?php echo anchor(base_url().index_page().'/main/goNews', 'News', ''); ?></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">CUSEC</a></li>
                    <li><a href="#">Our EPIC NIGHTS</a></li>
                    <li><a href="#">Our Next Meeting</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Upcoming Events</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php
          $image_properties = array(
          'src' => base_url().'/assets/images/club1.jpg',
          'alt' => 'First slide');
          echo img($image_properties);
          ?> 
          <div class="container">
            <div class="carousel-caption">
              <h1>SEC</h1>
              <p>Come join us!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php
          $image_properties = array(
          'src' => base_url().'/assets/images/game_night1.jpg',
          'alt' => 'Second slide');
          echo img($image_properties);
          ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Game Nights!</h1>
              <p>We do all that YOU love: Game and eat free pizza. Not kidding!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php
          $image_properties = array(
          'src' => base_url().'assets/images/awards_night1.jpg',
          'alt' => 'Third slide');
          echo img($image_properties);
          ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>CAS Awards Night!</h1>
              <p>An annual night of fun and games and well... AWARDS.</p>
              <!--<p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <h2 class="featurette-heading">The News : Updates</h2>
      
      <hr class="featurette-divider">

      <?php

      if  ($news)
      {
          foreach ($news as $newsItem)
         {
            echo "<div class='newsItem'> ";
            $title = $newsItem->name;
            $date = $newsItem->date;
            $content = $newsItem->content;

            echo "<h2>" .$title."</h2>";
            echo "<h3>" .$date."</h3>";
            echo "<br/>";
            echo "<h3>" .$content."</h3>";
            echo "<hr class='featurette-divider'>";
            echo "</div>";

         }

         echo "<ul class='pagination'>";
         echo "<li><a href='#''>&laquo;</a></li>";
         for ($i = 1; $i <= $numPages; $i++)
         {
              $anc = anchor(base_url().index_page().'/main/goNews/'.$i, $i, '');     
              echo "<li>".$anc."</li>";
         }
         echo "<li><a href='#''>&laquo;</a></li>";
         echo "</ul>";
       }
       else
       {
        echo "<h1> There is currently no news items,</h1>";
       }


      ?>

     
  </body>
</html>
