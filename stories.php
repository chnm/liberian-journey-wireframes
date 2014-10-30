<?php require('header.html'); ?>

<header class="">
  <div id="nav" class="row">
    <div class="large-7 column">
      <nav class="top-bar" data-topbar role="navigation">
        <ul id="primary-nav" class="inline-list">
          <li id="maps" class="first"><a href="map.php">Map</a></li>
          <li id="exhibits"><a href="exhibits.php">Exhibits</a></li>
          <li id="collections"><a href="collections.php">Collections</a></li>
          <li id="stories" class="active"><a href="stories.php">Stories</a></li>
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


<div class="row stories-page">
    <div class="large-9 column">
        <p>Some text about exploring the stories. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam amet possimus porro, libero facere. </p>
    </div>

    <div id="filter" class="large-3 column">
        <a href="#" class="button right" data-dropdown="drop1">Filter Themes</a>
        <ul id="drop1" class="f-dropdown" data-dropdown-content>
          <li><a href="#">Theme 1</a></li>
          <li><a href="#">Theme 2</a></li>
          <li><a href="#">Theme 3</a></li>
        </ul>
    </div>


<div class="items row">
    <div class="large-12 columns">
        <div class=" medium-4 columns ">
            <h5><a href="item-1.php">An Audio Story</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Listen&rarr;</a> </p>
        </div>
        <div class=" medium-4 columns ">
            <h5><a href="item-1.php">A Written Account</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Read more&rarr;</a> </p>
        </div>
        <div class=" medium-4 columns last">
            <h5><a href="item-1.php">A Photo Story</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Read more&rarr;</a> </p>
        </div>   
    </div>
</div>

<div class="items row">
    <div class="large-12 columns">
        <div class=" medium-4 columns ">
            <h5><a href="item-1.php">A Written Account</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Read more&rarr;</a> </p>
        </div>
        <div class=" medium-4 columns ">
            <h5><a href="item-1.php">An Audio Story</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Listen&rarr;</a> </p>
        </div>
        <div class=" medium-4 columns last">
            <h5><a href="item-1.php">A Photo Story</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Read more&rarr;</a> </p>
        </div>   
    </div>
</div>

<div class="items row">
    <div class="large-12 columns">
        <div class=" medium-4 columns ">
            <h5><a href="essay.#">An Audio Story</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="#">Listen&rarr;</a> </p>
        </div>
        <div class=" medium-4 columns ">
            <h5><a href="#">A Written Account</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="#">Read more&rarr;</a> </p>
        </div>
        <div class=" medium-4 columns last">
            <h5><a href="essay.#">A Photo Story</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="#">Listen&rarr;</a> </p>
        </div> 
    </div>
</div>

</div>

<ol class="joyride-list" data-joyride>

  <li data-id="filter" data-options="tip_location:left;tip_animation:fade" data-text="Next" data-prev-text="Prev">
    <h4>Filter</h4>
    <p>Again, users can filter the items to show groups of stories that fall under a specific theme.</p>
  </li>

  <li data-id="gallery" data-options="tip_location:top;tip_animation:fade" data-text="Next" data-prev-text="Prev" data-button="End" >
    <p>Both audio and text stories will have brief descriptions, with direct links to the items themselves.</p>
  </li>

</ol>


<?php require('footer.html'); ?>