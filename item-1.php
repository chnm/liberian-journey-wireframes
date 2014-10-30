<?php require('header.html'); ?>

<header class="">
  <div id="nav" class="row">
    <div class="large-7 column">
      <nav class="top-bar" data-topbar role="navigation">
        <ul id="primary-nav" class="inline-list">
          <li id="maps" class="first"><a href="map.php">Map</a></li>
          <li id="exhibits"><a href="exhibits.php">Exhibits</a></li>
          <li id="collections" class="active"><a href="collections.php">Collections</a></li>
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

<div class="row collections-page">
    <div class="large-12 columns">

        <div class="large-12 columns">  
            <h2>Item Title</h2>
        </div>

        <div class="large-8 columns">
            <p>A description of the item. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti tempore, nostrum totam error atque asperiores. Corrupti tempore placeat nihil. Corporis amet impedit repudiandae delectus eos architecto, ut laborum labore harum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti tempore, nostrum totam error atque asperiores. Corrupti tempore placeat nihil. Corporis amet impedit repudiandae delectus eos architecto, ut laborum labore harum.</p>
        </div>

        <div class="large-4 right map">
            <img src="img/map_03.png" alt="">
        </div>

        <div class="large-8 columns left">
            <h5>Primary Metadata Title</h5>
            <p style="font-style:italic">Primary Metadata info</p>

            <h5>Primary Metadata Title</h5>
            <p style="font-style:italic">Primary Metadata info</p>

            <h5>Primary Metadata Title</h5>
            <p style="font-style:italic">Primary Metadata info</p>
        </div>

        <div class="large-4 right item-files">
            <h4>Files</h4>
            <ul  class="clearing-thumbs" data-clearing style="list-style:none">
                <li style="margin-bottom:10px"><a href="img/blanket-large.jpg"><img src="img/blanket.jpg"></a></li>
                <li style="margin-bottom:10px"><a href="img/web-large.jpg"><img src="img/web.jpg"></a></li>
            </ul>
        </div>

        <div class="large-8 columns left">
        <dl class="accordion" data-accordion>
            <dd class="accordion-navigation">
                <a href="#panel2">More information about this item.</a>
                <div id="panel2" class="content">
                    <h4>Secondary Metadata Title</h4>
                    <p>Secondary Metadata info</p>

                    <h4>Secondary Metadata Title</h4>
                    <p>Secondary Metadata info</p>
                    <h4>Secondary Metadata Title</h4>
                    <p>Secondary Metadata info</p>
                    <h4>Secondary Metadata Title</h4>
                    <p>Secondary Metadata info</p>
                    <h4>Secondary Metadata Title</h4>
                    <p>Secondary Metadata info</p>
                    <h4>Secondary Metadata Title</h4>
                    <p>Secondary Metadata info</p>
                </div>
            </dd>
        </dl>
        </div>
    </div>
   
</div>

<?php require('footer.html'); ?>