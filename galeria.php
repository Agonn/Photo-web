<?php require_once( 'couch/cms.php');
?>
<cms:template title="Galeria kryesore">
  <cms:repeatable name='galeria' label="Shto foto">
    <cms:editable type='image' name='images' show_preview='1' preview_width='150' label='Foto' />
    <cms:editable type='textarea' name='description' label='Pershkrimi' /></cms:repeatable>
</cms:template>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Astrit Istogu | Galeria</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="\fancybox\dist\jquery.fancybox.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <style>
    #photos {
      /* Prevent vertical gaps */
      line-height: 0;
      -webkit-column-count: 3;
      -webkit-column-gap: 0px;
      -moz-column-count: 3;
      -moz-column-gap: 0px;
      column-count: 3;
      column-gap: 0px;
    }

    #photos img {
      /* Just in case there are inline attributes */
      width: 100% !important;
      height: auto !important;
    }

    @media (max-width: 1200px) {
      #photos {
        -moz-column-count: 4;
        -webkit-column-count: 4;
        column-count: 4;
      }
    }

    @media (max-width: 1000px) {
      #photos {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
      }
    }

    @media (max-width: 800px) {
      #photos {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
      }
    }

    @media (max-width: 400px) {
      #photos {
        -moz-column-count: 1;
        -webkit-column-count: 1;
        column-count: 1;
      }
    }

    body {
      margin: 0;
      padding: 0;
    }

    .fixed-action-btn1 {
      position: fixed;
      left: 23px;
      bottom: 23px;
      padding-top: 15px;
      margin-bottom: 0;
      z-index: 50000;
    }
  </style>
</head>

<body>
  <section id="photos">
    <cms:show_repeatable 'galeria'>
      <div class="gallery"><a href="<cms:show images/>" data-fancybox="group" data-fancybox data-caption="<cms:show description/>"><img src="<cms:show images/>" alt="<cms:show description/>" /></a></cms:show_repeatable>
    <div
      class="fixed-action-btn1 "><a href="index.php" class="btn-floating btn-large red "><i class="large material-icons">arrow_back</i></a></section>
  <!-- JS -->
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="\fancybox\dist\jquery.fancybox.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>

</html>
<?php COUCH::invoke();
?>