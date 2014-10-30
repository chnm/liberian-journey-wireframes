<?php require('header.html'); ?>

<header class="">
  <div id="nav" class="row">
    <div class="large-7 column">
      <nav class="top-bar" data-topbar role="navigation">
        <ul id="primary-nav" class="inline-list">
          <li id="maps" class="first"><a href="map.php">Map</a></li>
          <li id="exhibits" class="active"><a href="exhibits.php">Exhibits</a></li>
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

<div class="row exhibit-page">
    <div class="column items">
        <ul class="small-block-grid-3">
            <li class="item-entry">
                <a href="#"><img src="http://placehold.it/400x300&text=IMAGE" alt=""></a>
                <span class="item-entry-text">
                    <h5><a href="item-1.php">Exhibit One</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.<a href="item-1.php">More&rarr;</a> </p>
                </span>
            </li>
            <li class="item-entry">
                <a href="#"><img src="http://placehold.it/400x300&text=IMAGE" alt=""></a>
                <span class="item-entry-text">
                    <h5><a href="item-1.php">Exhibit Two</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.<a href="item-1.php">More&rarr;</a> </p>
                </span>
            </li>
            <li class="item-entry last">
                <a href="#"><img src="http://placehold.it/400x300&text=IMAGE" alt=""></a>
                <span class="item-entry-text">
                    <h5><a href="item-1.php">Exhibit Three</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.<a href="item-1.php">More&rarr;</a> </p>
                    </span>
            </li>   
        </ul>
    </div>

    <div class="column items">
        <ul class="small-block-grid-3">
            <li class="item-entry">
                <a href="#"><img src="http://placehold.it/400x300&text=IMAGE" alt=""></a>
                <span class="item-entry-text">
                    <h5><a href="item-1.php">Exhibit Four</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.<a href="item-1.php">More&rarr;</a> </p>
                </span>
            </li>
            <li class="item-entry">
                <a href="#"><img src="http://placehold.it/400x300&text=IMAGE" alt=""></a>
                <span class="item-entry-text">
                    <h5><a href="item-1.php">Exhibit Five</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.<a href="item-1.php">More&rarr;</a> </p>
                </span>
            </li>
            <li class="item-entry last">
                <a href="#"><img src="http://placehold.it/400x300&text=IMAGE" alt=""></a>
                <span class="item-entry-text">
                    <h5><a href="item-1.php">Exhibit Six</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.<a href="item-1.php">More&rarr;</a> </p>
                    </span>
            </li>   
        </ul>
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