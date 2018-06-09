<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   


    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <?php
include('php/vues/navbar.php');?>




 <div class="spacer"></div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div id="map" style="width: 100%; height: 400px;"></div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript">
  var myLatlng = new google.maps.LatLng(48.8108970,2.3044170);

  var myOptions = {
      zoom: 14,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: []
  };

  var map = new google.maps.Map(document.getElementById('map'), myOptions);
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: "You are here!"
  });
</script>
    </div> 
    <div class="col-sm-6">
      <h1>Contact : Quentin Thomas </h1>
      <p> DPX Netteté/Dépannage sites extérieurs</p>
      <p>unite oprationnelle MRGE</p>
      <p> 103 av.Marx Dormoy - 92200 Bagneux</p>
      <p> Mobile : +33 (0)6 18 39 91 00</p>
      <p> email: thomas.quentin@sncf.fr</p>
    </div>
  </div>
</div>













    
 






















    














             

<!--End mc_embed_signup-->

<!--End mc_embed_signup-->
                    
                  </div>
                </div>
              </div>
            <div class="spacer"></div>
            <div class="spacer"></div>
            <div class="spacer"></div>
           
         
   



            
                  <div class="col-xs-6">

                   <img src="Images/logo_sncf.png" width="400">


                  </div>

                  </div>

                  <div class="col-xs-6">
                     <div class="spacer1"></div>

                  <p>
        CSE.SNCF permet à la cellule netteté de centralisé les commandes des sites déportés pour la 
        <a href="http://www.sncf.com">sncf</a>
                  <p>
                  
                  
                </div>
              </div>
            </div>
            


                


    <!-- TODO: Here goes your content! -->



    <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>