<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0">

  <title>30 DAY CHALLENGE</title>

    <!--[if IE]>
    <script type="text/javascript">
       var console = { log: function() {} };
    </script>
  <![endif]-->
  <meta name="author" content="Rachelle Salvadora">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="js/lightbox-2.6.min.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />
</head>

<body>



<div class="sticky-link-home">

<h3 class="sticky-home">
<a class="main-a" href="../index.php">
HOME
</a>
</h3>

<div class="sticky-links">
<ul class="sticky-ul">

<li class="sticky-li">
<a class="main-a" href="http://rachellesalvadora.com/">
Website
</a>
</li>

<li class="sticky-li">
<a class="main-a" href="http://blog.rachellesalvadora.com">
Blog
</a>
</li>

<li class="sticky-li">
<a class="main-a" href="https://github.com/rachellesalvadora">
Github
</a>
</li>

</ul>
</div>
</div>

</div>
  <h1 class="">Switch <span>Display</span></h1>
  
  <div id="w" class="bounce animated hinge">
    <span class="options">Switch Options: 
      <a href="#" id="details-list" class="sorticon active" title="List View"><img src="images/details-list.png" alt="list"></a> 
      <a href="#" id="thumbnails-list" class="sorticon" title="Thumbnail View"><img src="images/thumbnails-list.png" alt="thumbnails"></a>
    </span>
    <span class="instructions">Switch Options: 
      Click thumbnails to view larger images.
    </span>
    <div id="content" class="">
      <ul id="listdisplay" class=" clearfix">
        <li class="clearfix">
          <span class="listimg"><a href="images/1.jpg" data-lightbox="image-1" title="Flag of Australia"><img src="images/1.jpg"></a></span>
          <span class="innercontent">
            <h2>Flag of Australia</h2>
            <p>The Australian National Flag has three elements on a blue background: the Union Jack, the Commonwealth Star and the Southern Cross. The Union Jack in the upper left corner (or canton) acknowledges the history of British settlement. Below the Union Jack is a white Commonwealth or Federation star.</p>
          </span>
        </li><!-- row #1 -->
        <li class="clearfix">
          <span class="listimg"><a href="images/2.jpg" data-lightbox="image-1" title="Fantail Goldfish"><img src="images/2.jpg"></a></span>
          <span class="innercontent">
            <h2>Fantail Goldfish</h2>
            <p>Telescope eyes do not develop until the fish is 6 months old. Its fins are less developed than the Ryukin. It supports double anal and tail fins. The anal and caudal fins are well divided into two matching halves. </p>
          </span>
        </li><!-- row #2 -->
        <li class="clearfix">
          <span class="listimg"><a data-lightbox="image-1" title="Flower" href="images/3.jpg"><img src="images/3.jpg"></a></span>
          <span class="innercontent">
            <h2>Flower</h2>
            <p>The seed-bearing part of a plant, consisting of reproductive organs (stamens and carpels) that are typically surrounded by a brightly coloured corolla (petals) and a green calyx (sepals).</p>
          </span>
        </li><!-- row #3 -->
        <li class="clearfix">
          <span class="listimg"><a href="images/4.jpg" data-lightbox="image-1" title="Lemon"><img src="images/4.jpg"></a></span>
          <span class="innercontent">
            <h2>Lemon</h2>
            <p>The lemon (Citrus × limon) is a small evergreen tree native to Asia. The tree's ellipsoidal yellow fruit is used for culinary and non-culinary purposes throughout the world, primarily for its juice, though the pulp and rind (zest) are also used in cooking and baking. </p>
          </span>
        </li><!-- row #4 -->
        <li class="clearfix">
          <span class="listimg"><a href="images/5.jpg" data-lightbox="image-1" title="Melbourne CBD"><img src="images/5.jpg"></a></span>
          <span class="innercontent">
            <h2>Melbourne CBD</h2>
            <p>Melbourne City Centre (sometimes referred to as "Central City",[2] and colloquially known as simply "The City") is an area of Melbourne, Victoria, Australia.</p>
          </span>
        </li><!-- row #5 -->
        <li class="clearfix">
          <span class="listimg"><a href="images/6.jpg" data-lightbox="image-1" title="A Sunset of the City"><img src="images/6.jpg"></a></span>
          <span class="innercontent">
            <h2>A Sunset of the City</h2>
            <p>It is a real chill out,
The genuine thing.
I am not deceived, I do not think it is still summer   
Because sun stays and birds continue to sing.
<br />
- GWENDOLYN BROOKS
</p>
          </span>
        </li><!-- row #6 -->
        <li class="clearfix">
          <span class="listimg"><a href="images/7.jpg" data-lightbox="image-1" title="Road"><img src="images/7.jpg"></a></span>
          <span class="innercontent">
            <h2>Road</h2>
            <p>A wide way leading from one place to another, especially one with a specially prepared surface which vehicles can use.</p>
          </span>
        </li><!-- row #7 -->
        <li class="clearfix">
          <span class="listimg"><a href="images/8.jpg" data-lightbox="image-1" title="Seaside"><img src="images/8.jpg"></a></span>
          <span class="innercontent">
            <h2>Seaside</h2>
            <p>At the beach, life is different. Time doesn't move our to hour but mood to movement. We live by the currents and follow the sun.</p>
          </span>
        </li><!-- row #8 -->
      </ul>
    </div>
  </div>
<script type="text/javascript">
$(function(){
  $('.options a').on('click', function(e){
    e.preventDefault();
    
    if($(this).hasClass('active')) {
      // do nothing if the clicked link is already active
      return;
    }
    
    $('.options a').removeClass('active');
    $(this).addClass('active');
    
    var clickid = $(this).attr('id');
    

    $('#listdisplay').fadeOut(240, function(){
      if(clickid == 'thumbnails-list') {
        $(this).addClass('thumbview');
      } else {
        $(this).removeClass('thumbview');
      }

      $('#listdisplay').fadeIn(200);  
    });
  });
});
</script>
</body>
</html>