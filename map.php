<?php require("header.html"); ?>

<div class="row">

  <div id="map-info" class="large-3 column right">
  <h3>Using the Map</h3>
    <p>Some explanatory text about how to use the map. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis maiores voluptatum, atque consequuntur eveniet et aut similique? Dolore sint distinctio recusandae, molestiae magni nesciunt repellat modi nam consequuntur odio beatae?</p>
  </div>

    <div id="map" class="large-9 column left">
    <img src="http://placehold.it/1000x600&text=MAP" alt=""/>
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
