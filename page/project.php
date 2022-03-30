<?php

//interior
//exterior
$fixheight = 400;
if ($what != 'interior' and $what != 'exterior') $what = 'interior';

?>

<section>
<h2><?= strtoupper($what . '<br> design'); ?></h2>

<?php if ($what == 'interior') { ?>

<style type="text/css">
body{background-color: #f1eeeb;}
h2, h4 {color: #000 !important;}
</style>

<p>
Our approach to interior design is using a combination of focus and downplay. Each area of a room deserves its own level of attention. So we provide emphasis on the areas we wish to draw attention to, creating focal points with the use of furniture, backgrounds and color.
<br><br>
There are areas of a room we might also wish to downplay, and to identify these we must first assess the state of the natural room. If, for example the room is open with a sprawling monumental fireplace, or there are huge French door leading on to a beautiful veranda overlooking the ocean where the Sun meets the horizon at dusk – these are features that you would want to draw attention to. We earmark these features or areas as the dominant levels of emphasis, and use subtlety in our approach to the other areas of the room in order to further accentuate the already eye-catching dominant level.
<br><br>
We adopt simple, neutral colors and furnishings elsewhere, keeping the floor, walls and ceilings from providing a distraction, thereby leading the eye of the occupant to the selected feature. Too many items or features vying for the eye’s attention can be disorienting, confusing and also quite disturbing.
</p>

<?php } if ($what == 'exterior') { ?>

<style type="text/css">
body{background-color: #333;}
p {color: #fff !important;}
</style>

<p>
The process of designing and constructing a building continues to grow more complex and challenging. Using an integrated approach helps avoid the potential struggles that can occur when design disciplines are siloed. Bringing architects and engineers together on day one generates meaningful improvements to the design process and helps maximize efficiency downstream in during construction.
<br><br>
Buildings are deceptively complex. At their best, they connect us with the past and represent the greatest legacy for the future. They provide shelter, encourage productivity, embody our culture, and certainly play an important part in life on the planet. In fact, the role of buildings is constantly changing. Buildings today are life support systems, communication and data terminals, centers of education, justice, and community, and so much more.
</p>

<?php }

$num = 0;
$imgdir = scandir('image');
foreach ($imgdir as $dir) {
    if (substr($dir, 0, 8) == $what and strlen($dir) < 10) {
        
        $totalwidth = 0;
        echo '<div id="bl_' . $dir . '"><div id="th_' . $dir . '">';
        $project = glob('image/' . $dir . '/*');
        foreach($project as $item) {
            if (strlen($item) > 4)
            echo '<img src="/' . $item . '" height="' . $fixheight . '">';
            list($width, $height) = getimagesize($item);
            $fixwidth = ($width * $fixheight) / $height;
            $totalwidth += ($fixwidth + 45);
        }
        echo '</div></div>';
        
        $num++;
        
        if ($what == 'exterior') {
            switch($num) {
                case(1): echo '<h4> PASHA OFFICE BUILDING <small> JANUARY 2010 </small></h4>'; break;
                case(2): echo '<h4> BABOL SHOPPING MALL <small> JUNE 2009 </small></h4>'; break;
                case(3): echo '<h4> ABI APARTMENT IN BABOLSAR <small> DECEMBER 2010 </small></h4>'; break;
            }
        }
        
        if ($what == 'interior') {
            switch($num) {
                case(1): echo '<h4> BALOUT CAFÉ & PASTRY <small> JUNE 2010 </small></h4>'; break;
                case(2): echo '<h4> ILIA APARTMENTS IN BABOLSAR <small> MAY 2012 </small></h4>'; break;
                case(3): echo '<h4> AMIR VILLA IN SARI <small> MARCH 2010 </small></h4>'; break;
                case(4): echo '<h4> ASGHARI HOUSE ATTIC <small> MAY 2009 </small></h4>'; break;
                case(5): echo '<h4> BASHIR HOUSE INTERIOR <small> APRIL 2011 </small></h4>'; break;
            }
        }
        
        echo '<script>
              setTimeout(function(){ scrollover(\'bl_' . $dir . '\',\'th_' . $dir . '\'); }, 10);
              $("#th_' . $dir . '").css({"width": "' . $totalwidth . '"});
              </script>';
    }
}
    

?>
</section>