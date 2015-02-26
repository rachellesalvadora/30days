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
  <h1>Switch <span>Display Options</span></h1>
  
  <div id="w">
    <span class="options">Switch Options: 
      <a href="#" id="details-list" class="sorticon active" title="List View"><img src="images/details-list.png" alt="list"></a> 
      <a href="#" id="thumbnails-list" class="sorticon" title="Thumbnail View"><img src="images/thumbnails-list.png" alt="thumbnails"></a>
    </span>
    <div id="content">
      <ul id="listdisplay" class="clearfix">
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1314496-80-s-Wrestlers-Hulk-Hogan" target="_blank"><img src="images/1.jpg"></a></span>
          <span class="innercontent">
            <h2>Hulk Hogan</h2>
            <p>In non gravida nulla, quis vehicula velit. Praesent ac felis vel tortor auctor tincidunt. In non luctus neque. In congue molestie pretium. Sed vitae cursus risus. Pellentesque feugiat tortor massa, ut aliquet justo fermentum vitae.</p>
          </span>
        </li><!-- row #1 -->
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1314855-Rocking-Chair" target="_blank"><img src="images/2.jpg"></a></span>
          <span class="innercontent">
            <h2>Rocking Chair</h2>
            <p>Proin fermentum dignissim turpis, ut condimentum sapien rutrum eget. Nunc imperdiet, augue id tempus gravida, lacus quam venenatis eros, a porta velit nunc vel massa.</p>
          </span>
        </li><!-- row #2 -->
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1315499-Boston" target="_blank"><img src="images/3.jpg"></a></span>
          <span class="innercontent">
            <h2>Boston</h2>
            <p>Nam gravida, felis quis lacinia pulvinar, est velit rhoncus turpis, ac faucibus odio lorem vitae felis. Ut metus augue, ultrices ac faucibus non, dapibus eu augue. Quisque molestie augue non purus egestas ornare.</p>
          </span>
        </li><!-- row #3 -->
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1315252-Orca" target="_blank"><img src="images/4.jpg"></a></span>
          <span class="innercontent">
            <h2>Orca</h2>
            <p>Etiam molestie, magna sed vestibulum porta, nulla sapien aliquam purus, non euismod sem neque quis lectus.</p>
          </span>
        </li><!-- row #4 -->
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1314878-Radio" target="_blank"><img src="images/5.jpg"></a></span>
          <span class="innercontent">
            <h2>Radio</h2>
            <p>unc venenatis rutrum aliquet. Nullam lectus metus, congue vel lacus luctus, placerat ultrices quam. Donec sed imperdiet massa. Suspendisse id lorem quis sem dignissim ornare a sed nulla.</p>
          </span>
        </li><!-- row #5 -->
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1315420-Video-card" target="_blank"><img src="images/6.jpg"></a></span>
          <span class="innercontent">
            <h2>Video Card</h2>
            <p>Sed placerat lobortis tellus, sit amet eleifend dolor venenatis at. Sed eget malesuada eros. Vivamus porttitor lorem in suscipit molestie.</p>
          </span>
        </li><!-- row #6 -->
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1313615-Fireside" target="_blank"><img src="images/7.jpg"></a></span>
          <span class="innercontent">
            <h2>Fireside</h2>
            <p>Duis non pellentesque elit. Donec vel varius lectus. Suspendisse mauris arcu, feugiat non sapien et, egestas pellentesque ante. Fusce ac eleifend augue, in egestas tellus.</p>
          </span>
        </li><!-- row #7 -->
        <li class="clearfix">
          <span class="listimg"><a href="http://dribbble.com/shots/1308512-Racc-pack"><img src="images/8.jpg"></a></span>
          <span class="innercontent">
            <h2>Racc-pack</h2>
            <p>Nullam ut sollicitudin neque. Fusce arcu risus, interdum luctus neque vel, viverra interdum ligula. Sed vehicula, dolor id posuere elementum, ligula leo aliquam nisi, non laoreet est diam aliquam nisl.</p>
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