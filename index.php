<?php require_once('asset/header.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $head_title; ?></title>
<meta name="description" content="" />
<link rel="icon" type="image/png" href="/image/logo-dark.png">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="robots" content="index, follow">
<!--open graph share -->
<meta property="og:type" content="website"/>
<meta property="og:image" content="/image/logo-dark.png"/>
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:description" content="<?= $head_desc; ?>"/>
<meta property="og:url" content="<?= $head_server; ?>"/>
<meta property="og:site_name" content="<?= $head_title; ?>"/>
<!--js & csss -->
<link rel="stylesheet" type="text/css" href="/css/fa_all.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css?rand=<?= uniqid(); ?>" />
<script src="/js/jquery.js"></script>
</head>
<body class="<?= $where; ?>">

<!--nav -------------------------------------------------------------------------->

<nav>
<img src="/image/logo.png" id="logo" alt="<?= $head_title; ?>" title="<?= $head_title; ?>">
<a id="showside"><span></span><span></span></a>
</nav>

<aside>
<a id="nav_project"> Project </a>
<div class="subside">
<a href="/project/interior"> Interior </a>
<a href="/project/exterior"> Exterior </a>
</div>
<a id="contact"> Contact </a>
<a id="about"> About </a>
<a id="hideside"><img src="/image/arrow.png"></a>
</aside>

<section id="asidewrap"></section>

<!--page -------------------------------------------------------------------------->

<?php

if (strlen($where) > 0 and file_exists('page/' . $where . '.php')) include('page/' . $where . '.php');
else include('page/home.php');
    
?>

<!--about -------------------------------------------------------------------------->

<section class="about">
<img src="/image/cross.png" id="about" class="cross">
<img src="/image/fatima.jpg">
<div class="fleft">
<h2> ABOUT <img src="/image/line.png"></h2>
<div class="clear"></div>
<p>
A purposeful design practice producing work allied with the concepts of reductivism and beautility. Projects are functional and considered, delivering dynamic and clever solutions with a focus on the organization of space.
<br><br>
Fatima employs a strong functional focus and the needs of her clients are heavily embedded in the outcomes. She spent many years as a part of the art community, both as a creative and a lover of the arts. Her eye for design led her to the University of Mazandaran (Mazandaran, Iran). Since graduating with her Bachelor’s degree in Architecture she sees floorplans as an open canvas. She loves to create beautiful and functional spaces and strives to create a great customer experience along the way. With experience with hospitality, residential complexes, healthcare, and education, Fatima looks forward to growing even more within the industry.
<br><br>
She has over 10 years of experience in architecture and interior design as a practitioner. In those years, she has completed projects that are sensitive to the specific circumstance of the site while skillfully and imaginatively resolving complex program issues.
<br><br>
Fatima received her Master of Architecture from Iran University of Science and Technology (Tehran, Iran) and pursued architecture because she has always enjoyed the dichotomy between form and function and the unique challenges that demands embracing new technology to help her better understand how it could positively impact the design team and clients. She also loves the art of calligraphy, graphics design and creating website and application user interfaces.
</p>
</div>
</section>

<!--contact -------------------------------------------------------------------------->

<section class="contact">
<img src="/image/cross_light.png" id="contact" class="cross">
<h2> GET IN TOUCH <img src="/image/line_light.png"></h2>
<form method="post">

<div>

<fieldset>
<label> NAME : </label>
<input type="text" name="name" value="<?= $name; ?>">
</fieldset>

<fieldset>
<label> COMPANY : </label>
<input type="text" name="company" value="<?= $company; ?>">
</fieldset>

<fieldset>
<label> EMAIL : </label>
<input type="text" name="email" value="<?= $email; ?>">
</fieldset>

</div><div>

<fieldset>
<label> PHONE : </label>
<input type="text" name="phone" value="<?= $phone; ?>">
</fieldset>

<fieldset>
<label> MESSAGE : </label>
<textarea type="text" name="message"><?= $message; ?></textarea>
</fieldset>

<button type="submit"> Send </button>

</div>

</form>
</section>

<!--footer -------------------------------------------------------------------------->

<footer>
<label><?= $head_title; ?> Allrights Resesrved &copy;</label>
<a href=""><img src="/image/twitter.png"></a>
<a href=""><img src="/image/facebook.png"></a>
<a href=""><img src="/image/linkdin.png"></a>
<a href=""><img src="/image/instagram.png"></a>
</footer>

<script src="/js/function.js?rand=<?= uniqid(); ?>"></script>
</body>
</html>