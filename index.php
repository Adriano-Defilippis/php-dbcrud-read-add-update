<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
      
      <ul class="specifiche_prod" data-id="{{id}}">
            <li><strong>Nome:</strong> {{nome}}</li>
            <li><strong>Marca:</strong> {{marca}}</li>
            <li><strong>Prezzo:</strong> {{prezzo}}</li>
            <li><strong>Data Scadenza:</strong> {{data_scadenza}}</li>
            <li class="action_btn">
              <i class="fas fa-cog"></i>
              <i class="fas fa-window-close"></i>
            </li>
      </ul>

    </script>


    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>Bool_pub</title>
    
  </head>


  <!-- BODY -->
  <body>

    
    <div class="container">

      <header><h1>Bevande del PuBool</h1></header>
      <div class="cat_prod" data-cat="vini">
        <h1 class="title_cat">VINI</h1>
        <div class="action_btn position position">
          <span class="cl_wht">+ </span>
          <i class="fas fa-database fa-lg cl_wht"></i>
        </div>
      </div>

      <div class="cat_prod" data-cat="succhi">
        <h1 class="title_cat">SUCCHI ED ESTRATTI</h1>
        <div class="action_btn position">
          <span class="cl_wht">+ </span>
          <i class="fas fa-database fa-lg cl_wht"></i>
        </div>
      </div>

      <div class="cat_prod" data-cat="birre">
        <h1 class="title_cat">BIRRE</h1>
        <div class="action_btn position">
          <span class="cl_wht">+ </span>
          <i class="fas fa-database fa-lg cl_wht"></i>
        </div>
      </div>

      <div class="cat_prod" data-cat="bevanda">
        <h1 class="title_cat">BEVANDE GENERICHE</h1>
        <div class="action_btn position">
          <span class="cl_wht">+ </span>
          <i class="fas fa-database fa-lg cl_wht"></i>
        </div>
      </div>


    </div>
  
  </body>
</html>