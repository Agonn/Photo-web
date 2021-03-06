<?php require_once( 'couch/cms.php');
?>
<cms:template title="Faqja kryesore" >
  <cms:editable name='prop_uploads' label='Fotot ne background' desc='Fotot ne prapavije - Faqja kryesore' type='group' />
  <cms:editable name='image_1' label='Foto per faqen e pare' show_preview='1' preview_width='250' group='prop_uploads' type='image'
  />
  <cms:editable name='image_2' label='Foto per faqen e dyte' show_preview='1' preview_width='250' group='prop_uploads' type='image'
  />
  <cms:editable name='image_3' label='Foto per faqen e trete' show_preview='1' preview_width='250' group='prop_uploads' type='image'
  />
  <cms:editable name='image_1_text' group='prop_uploads' label='Titulli per slide 1' desc='Shkruani titullin per slide 1' maxlength='20'
    type='text' />
  <cms:editable name='image_2_text' group='prop_uploads' label='Titulli per slide 2' desc='Shkruani titullin per slide 2' maxlength='20'
    type='text' />
  <cms:editable name='image_3_text' group='prop_uploads' label='Titulli per slide 3' desc='Shkruani titullin per slide 3' maxlength='20'
    type='text' /></cms:template>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Astrit Istogu Photography</title>
  <!-- CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <style>
    .slider-adjustment {
      top: 56px;
      left: 0;
      bottom: 0;
      right: 0;
      overflow: auto;
      background-color: cyan;
    }

    .fixed-action-btn.toolbar ul li a:hover {
      background-color: purple;
    }
  </style>
</head>

<body>
  <!-- NAV !-->
  <ul id="slide-out" style="z-index: 10001;" class="side-nav">
    <li>
      <div class="user-view">
        <div class="background"><img src="http://i.imgur.com/WeXE1wq.png"></div>
        <a href="#!user"><img class="circle" src="https://instagram.fprx1-1.fna.fbcdn.net/t51.2885-19/s150x150/18646100_295846277535127_6500728101108973568_a.jpg"></a>
        <a href="#"><span class="white-text name">Astrit Istogu</span></a>
      </div>
    </li>
    <li><a class="subheader">Kontakti</a></li>
    <li><a href="tel:+37744503303"><i class="material-icons">phone</i>+377 44 503 303</a></li>
    <li><a href="mailto:astritiistogu@gmail.com"><i class="material-icons">email</i>astritiistogu@gmail.com</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="subheader">Social Media</a></li>
    <li><a href="https://www.instagram.com/astritistoguphotography/" target='_blank'><img src="images/insta.png">Astritistoguphotography</a></li>
    <li><a href="https://www.facebook.com/astrit.istogu/photos_all" target='_blank'><img src="images/fb.png">Astritistoguphotography</a></li>
    <!--<li><a href="#!"><img src="images/snapchat.png">AstritiSnapchat</a></li>!-->
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="subheader">Shpërndaje</a></li>
    <li><a id="viber_share"><img src="images/viber.png">Viber</a>
      <script>
        var buttonID = "viber_share";
        var text = "Shiko këtë fotograf: ";
        document.getElementById(buttonID).setAttribute('href',
          "https://3p3x.adj.st/?adjust_t=u783g1_kw9yml&adjust_fallback=https%3A%2F%2Fwww.viber.com%2F%3Futm_source%3DPartner%26utm_medium%3DSharebutton%26utm_campaign%3DDefualt&adjust_campaign=Sharebutton&adjust_deeplink=" +
          encodeURIComponent("viber://forward?text=" + encodeURIComponent(text + " " + window.location.href)));
      </script>
    </li>
    <li><a href="whatsapp://send?text=http://astritistogu.com" data-action="share/whatsapp/share"><img src="images/whatsapp.png">Whatsapp</a></li>
  </ul><a href="#" data-activates="slide-out" style="position: fixed;
 z-index: 10000" class="button-collapse"><i class="medium material-icons">menu</i></a>
  <!-- /Nav !-->

<!-- Content !-->
 <div class="section red">
    <div class="row container">
      <h2 class="header">Test</h2>
      <p class="grey-text text-darken-3 lighten-3">More test</p>
    </div>
  </div>
   <div class="parallax-container">
    <div class="parallax"><img src="<cms:show image_1/>"></div>
  </div>
  <div class="section green">
    <div class="row container">
      <h2 class="header">Test</h2>
      <p class="grey-text text-darken-3 lighten-3">More test</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="<cms:show image_2/>"></div>
  </div>
<div class="row container">
      <h2 class="header">Test</h2>
      <p class="grey-text text-darken-3 lighten-3">More test</p>
    </div>
   <div class="parallax-container">
    <div class="parallax"><img src="<cms:show image_3/>"></div>
  </div>
    
    <div class="fixed-action-btn toolbar  "><a class="btn-floating btn-large red purple darken-4 "><i class="large material-icons">picture_in_picture</i></a>
      <ul>
        <!--<li class="waves-effect waves-light"><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Dergo email</a></li> !-->
        <li class="waves-effect waves-light"><a href="https://www.instagram.com/astritistoguphotography/" target='_BLANK'><i class="material-icons"></i>Instagram</a></li>
        <li class="waves-effect waves-light"><a href="galeria.php"><i class="material-icons"></i>Galeria</a></li>
      </ul>
    </div>
<!-- /Content !-->
    <!-- Modal 
     <div id="modal1" class="modal bottom-sheet"><div class="modal-content"> <form method="post" id="myForm">
          <div class="form-group">
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" required/>
          </div>
          <div class="form-group">
            <label for="email">Your email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required/>
          </div>
		    <div class="form-group">
            <label for="phone">Your phone:</label>
            <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone" value="" required/>
          </div>
          <div class="form-group">
            <label for="comment">Your comment:</label>
            <textarea class="form-control" id="comment" name="comment" required></textarea>
          </div>
          <input type="submit"  onclick="myFunction()" name="submit" class="btn btn-success btn-lg" value="Submit">
        </form><div class="modal-footer"></div></div>
        
        !Modal -->
        
    <!-- Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script>
      $(document).ready(function () {
          $('.slider').slider({
            transition: 300,
            interval: 10000,
            indicators: true
          });
        });

      $('.button-collapse').sideNav({
          menuWidth: 300, // Default is 300
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
          draggable: true
        });
      $('.modal').modal();
      $('.parallax').parallax();
</script>
    <!-- Scripts-->
</body>
</html>
<?php COUCH::invoke();
?>