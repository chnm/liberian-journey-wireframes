<?php require('header.html'); ?>

<header class="">
  <div id="nav" class="row">
    <div class="large-7 column">
      <nav class="top-bar" data-topbar role="navigation">
        <ul id="primary-nav" class="inline-list">
          <li id="maps" class="first"><a href="map.php">Map</a></li>
          <li id="exhibits"><a href="exhibits.php">Exhibits</a></li>
          <li id="collections"><a href="collections.php">Collections</a></li>
          <li id="stories"><a href="stories.php">Stories</a></li>
          <li id="share" class="active"><a href="share.php">Share</a></li>
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

<div class="row">
    <div id="share" class="large-12 columns">
        <h2>Place to Share Stories</h2>
        <form> 
            <div class="row">
            <div class="large-10 column">
                <p>Some text about adding your own story to the site. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt alias excepturi possimus, quibusdam adipisci nulla consequuntur ipsa. Non, voluptas saepe a omnis nesciunt, minima inventore debitis amet sint, modi, molestiae!</p>
            </div>
            
                <div class="large-8"> 
                    <div class="row"> 
                        <div class="large-2 columns"> 
                        <label for="right-label" class="right inline">Name</label> 
                        </div>

                        <div class="large-10 columns"> 
                        <input type="text" id="right-label" placeholder="Inline Text Input"> 
                        </div>
                    </div> 

                    <div class="row"> 
                        <div class="large-2 columns"> 
                        <label for="right-label" class="right inline">Email Address</label> 
                        </div>

                        <div class="large-10 columns"> 
                        <input type="text" id="right-label" placeholder="Inline Text Input"> 
                        </div>
                    </div> 

                    <div class="row"> 
                        <div class="large-2 columns"> 
                        <label for="right-label" class="right inline">Location</label> 
                        </div>

                        <div class="large-10 columns"> 
                        <input type="text" id="right-label" placeholder="Inline Text Input"> 
                        </div>
                    </div>

                    <div class="row"> 
                        <div class="large-2 columns"> 
                        <label for="right-label" class="right inline">What is your story?</label> 
                        </div>

                        <div class="large-10 columns"> 
                        <textarea id="right-label" rows="10" placeholder="Inline Text Input"></textarea>
                        </div>
                    </div> 
                </div>
            </div> 
        </form>
    </div>
</div>

<ol class="joyride-list" data-joyride>

  <li data-id="share" data-options="tip_location:top;tip_animation:fade" data-button="End" >
    <p>This page will simply contain a form by which users can tell their own stories, and possibly upload media files.</p>
  </li>

</ol>

<?php require('footer.html'); ?>