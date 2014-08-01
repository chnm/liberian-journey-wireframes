<?php require('header.html'); ?>

<div class="large-12 row">
    <div class="large-6 column">
    <p>Some text about exploring the videos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam amet possimus porro, libero facere. </p>
</div>

<div id="filter" class="large-3 column">
    <a href="#" class="button right" data-dropdown="drop1">Filter Themes</a>
    <ul id="drop1" class="f-dropdown" data-dropdown-content>
      <li><a href="#">Theme 1</a></li>
      <li><a href="#">Theme 2</a></li>
      <li><a href="#">Theme 3</a></li>
    </ul>
</div>
</div>


<div class="row">
    <div id="gallery" class="large-12 columns">
    <ul class="clearing-thumbs" data-clearing>
        <li style="margin-right:25px"><a href="http://placehold.it/800x400&text=VIDEO PLAYER"><img alt="Photo" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <a>Link to item</a>" style="clear:left" class="left" src="http://placehold.it/302x302&text=VIDEO"></a></li>
        <li style="margin-right:25px"><a href="http://placehold.it/800x400&text=VIDEO PLAYER"><img alt="VIDEO" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <a>Link to item</a>" style="clear:left" class="left" src="http://placehold.it/302x302&text=VIDEO"></a></li>
        <li><a href="http://placehold.it/800x400&text=VIDEO PLAYER"><img alt="VIDEO" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <a>Link to item</a>" style="clear:left" class="left" src="http://placehold.it/302x302&text=VIDEO"></a></li>
    </ul>
    <ul class="clearing-thumbs" data-clearing>
        <li style="margin-right:25px"><a href="http://placehold.it/800x400&text=VIDEO PLAYER"><img alt="Photo" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <a>Link to item</a>" style="clear:left" class="left" src="http://placehold.it/302x302&text=VIDEO"></a></li>
        <li style="margin-right:25px"><a href="http://placehold.it/800x400&text=VIDEO PLAYER"><img alt="VIDEO" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <a>Link to item</a>" style="clear:left" class="left" src="http://placehold.it/302x302&text=VIDEO"></a></li>
        <li><a href="http://placehold.it/800x400&text=VIDEO PLAYER"><img alt="VIDEO" data-caption="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <a>Link to item</a>" style="clear:left" class="left" src="http://placehold.it/302x302&text=VIDEO"></a></li>
    </ul>
</div>

</div>

<ol class="joyride-list" data-joyride>

  <li data-id="filter" data-options="tip_location:left;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <h4>Filter</h4>
    <p>Again, users can filter the items to show groups of videos that fall under a specific theme.</p>
  </li>

  <li data-id="gallery" data-options="tip_location:top;tip_animation:fade" data-text="Next" data-prev-text="Prev" data-button="End" >
    <p>The video gallery will also use a lightbox, launching a larger version of the video in the lightbox. They can also link to the items directly.</p>
  </li>

</ol>


<?php require('footer.html'); ?>