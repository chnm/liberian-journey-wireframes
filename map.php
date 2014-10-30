<?php require("header.html"); ?>

<header class="">
  <div id="nav" class="row">
    <div class="large-7 column">
      <nav class="top-bar" data-topbar role="navigation">
        <ul id="primary-nav" class="inline-list">
          <li id="maps" class="first active"><a href="map.php">Map</a></li>
          <li id="exhibits"><a href="exhibits.php">Exhibits</a></li>
          <li id="collections"><a href="collections.php">Collections</a></li>
          <li id="stories"><a href="stories.php">Stories</a></li>
          <li id="share"><a href="share.php">Share</a></li>
          <li id="about" class="last "><a href="about.php">About</a></li>
        </ul>
      </nav>      
    </div>

    <div id="search" class="large-5 column">
      <input type="text" placeholder="Search the archive...">
    </div>
  </div>



</header>

  <div id="header" class="row">
    <div class="large-12 column">
      <h1><a href="index.php">A Liberian Journey </a></h1>
      <h4><a href="index.php">History, Memory, and the Making of a Nation</a></h4>
    </div>
  </div>
    


<div id="content">

<div class="row map-page">

  <div id="map-info" class="large-3 column right">
  <h3>Using the Map</h3>
    <p>Some explanatory text about how to use the map. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis maiores voluptatum, atque consequuntur eveniet et aut similique? Dolore sint distinctio recusandae, molestiae magni nesciunt repellat modi nam consequuntur odio beatae?</p>
  </div>

    <div id="map" class="large-9 column left">
    <img src="img/map_03.png" alt=""/>
  </div>

</div>

<ol class="joyride-list" data-joyride>

  <li data-id="map" data-options="tip_location:left;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <p>The map is the primary focus here. Omeka items will be plotted across it, allowing users to select areas of geographic interest and see what items are located within.</p>
  </li>

  <li data-id="map-info" data-options="tip_location:bottom;tip_animation:fade" data-text="Next" data-prev-text="Prev" data-button="End" >

    <h4>Map Info</h4>
    <p>Some brief text here will help orient users on how to use the map.</p>
  </li>

</ol>


<?php require('footer.html'); ?>
