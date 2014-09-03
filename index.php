<?php require("header.html"); ?>

    <div class="">

      <div class="large-4 columns">
        <div id="about" class="panel">
          <h3>About</h3>
          <div class="row">
            <div class="columns">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="large-8 columns">
        <div id="map" class="panel">
          <img src="http://placehold.it/600x400&text=MAP" alt="Map">
        </div>
      </div>
    </div>

    <div class="">
      <div id="portals" class="large-12 columns">
        <div class="large-4 columns panel">
          <a href="exhibits.php"><img src="http://placehold.it/400x400&text=IMAGE LINK TO EXHIBITS" alt=""></a>
        </div>
        <div class="large-4 columns panel">
          <a href="collections.php"><img src="http://placehold.it/400x400&text=IMAGE LINK TO COLLECTIONS" alt=""></a>
        </div>
        <div class="large-4 columns panel">
          <a href="stories.php"><img src="http://placehold.it/400x400&text=IMAGE LINK TO STORIES" alt=""></a>
        </div>
      </div>
    </div>
    
<!--     <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h3>Featured Items</h3>
          <div class="row">
            <div class="large-4 medium-4 columns">
          <h5><a href="essay.#">An Item</a></h5><p><img class="left" style="padding-right:10px" src="http://placehold.it/100x100&text=ITEM">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut. <a href="#">Read more</a> </p>
            </div>
            <div class="large-4 medium-4 columns">
              <h5><a href="#">Another Item</a></h5><p><img class="left" style="padding-right:10px" src="http://placehold.it/100x100&text=ITEM">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut. <a href="#">Read more</a> </p>
            </div>
            <div class="large-4 medium-4 columns">
              <h5><a href="#">One More Item</a></h5><p><img class="left" style="padding-right:10px" src="http://placehold.it/100x100&text=ITEM">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut. <a href="#">Read more</a> </p>
            </div>        
          </div>
        </div><ol class="joyride-list" data-joyride>
  <li data-id="firstStop" data-text="Next" data-options="tip_location: top; prev_button: false">
    <p>Hello and welcome to the Joyride documentation page.</p>
  </li>
  <li data-id="numero1" data-class="custom so-awesome" data-text="Next" data-prev-text="Prev">
    <h4>Stop #1</h4>
    <p>You can control all the details for you tour stop. Any valid HTML will work inside of Joyride.</p>
  </li>
  <li data-id="numero2" data-button="Next" data-prev-text="Prev" data-options="tip_location:top;tip_animation:fade">
    <h4>Stop #2</h4>
    <p>Get the details right by styling Joyride with a custom stylesheet!</p>
  </li>
  <li data-button="End" data-prev-text="Prev">
    <h4>Stop #3</h4>
    <p>It works as a modal too!</p>
  </li>
</ol>
      </div>
    </div> -->

<ol class="joyride-list" data-joyride>

  <li data-text="Next">
    <p>Welcome to the wireframes. Click next to get started</p>
  </li>

  <li data-id="header" data-options="tip_location:bottom;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <h4>Header</h4>
    <p>The header will be simple, containing just the title, possibly a logo, and the search bar, encouraging users to focus on the content portals.</p>
  </li>

  <li data-id="nav" data-options="tip_location:bottom;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <h4>Navigation</h4>
    <p>The main navigation directs users toward the primary portals to viewing the content: the map, photo and video galleries, and audio and text stories.</p>
  </li>

  <li data-id="about" data-options="tip_location:right;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <p>A brief callout to inform users as to the scope of the site.</p>
  </li>

  <li data-id="map" data-options="tip_location:left;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <h4>Map</h4>
    <p>The map should immediately draw the eye of users arriving to the site, allowing them to jump in geographically right away.</p>
  </li>

  <li data-id="portals" data-options="tip_location:top;tip_animation:fade" data-text="Next" data-prev-text="Prev">   
    <p>The additional portals from the main navigation are echoed here, allowing direct access to the content in a second way.</p>
  </li>

  <li data-id="footer" data-options="tip_location:top;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <h4>Footer</h4>
    <p>The footer will hold the logos, any needed persistent text, and secondary links.</p>
  </li>

  <li data-button="End" data-prev-text="Prev">
    <p>Please explore the rest of the site!</p>
  </li>
</ol>

<?php require('footer.html'); ?>
