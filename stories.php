<?php require('header.html'); ?>


<div class="large-12 row">
    <div class="large-6 column">
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
</div>

<div id="gallery" class="row items">
    <div class="large-12 columns panel">
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
            <h5><a href="item-1.php">One More Item</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Read more&rarr;</a> </p>
        </div>   
    </div>
</div>

<div class="row items panel">
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
            <h5><a href="item-1.php">One More Item</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="item-1.php">Read more&rarr;</a> </p>
        </div>   
    </div>
</div>

<div class="row items">
    <div class="large-12 columns panel">
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
            <h5><a href="essay.#">An Audio Story</a></h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut. <a href="#">Listen&rarr;</a> </p>
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