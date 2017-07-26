<?php require_once( 'couch/cms.php' ); ?>
<cms:template title="Admin panel">
<cms:repeatable name='galeria' label="Shto foto" >
	<cms:editable type='image' name='images' show_preview='1' preview_width='150' label='Foto' />
	<cms:editable type='textarea' name='description' label='Pershkrimi' />
</cms:repeatable>
</cms:template>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Astrit Istogu | Galeria</title>

	<!-- CSS -->
  <link rel="stylesheet" type="text/css" href="\fancybox\dist\jquery.fancybox.min.css">
  <style>

#photos {
   /* Prevent vertical gaps */
   line-height: 0;
   
   -webkit-column-count: 5;
   -webkit-column-gap:   0px;
   -moz-column-count:    5;
   -moz-column-gap:      0px;
   column-count:         4;
   column-gap:           0px;
}

#photos img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
}

@media (max-width: 1200px) {
  #photos {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}
@media (max-width: 1000px) {
  #photos {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 800px) {
  #photos {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 400px) {
  #photos {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}

body {
  margin: 0;
  padding: 0;
}


</style>
</head>
<body><section id="photos">
  <cms:show_repeatable 'galeria' >
    
<div class="gallery">
	<a href="<cms:show images/>" data-fancybox="group" data-fancybox data-caption="<cms:show description/>">
	<img src="<cms:show images/>" alt="<cms:show description/>" />
</a>
</cms:show_repeatable>
</section>

	<!-- JS -->
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="\fancybox\dist\jquery.fancybox.min.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>