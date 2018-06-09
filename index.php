<!DOCTYPE html>
<html>
  <head>

    <title>CSE.SNCF</title>
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

















    <div id="container">



      

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    
  </ol>


<div class="carousel-inner" role="listbox">
    
    <div class="item active">

      <img src="images/fond7.jpg" alt="Premiere photo">

      <div class="carousel-caption">
        

      

      <h1>CSE.SNCF</h1>
      
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderForm">
          Inscrivez-vous
        </button>
      
      <div class="spacer1"></div>
      <div class="spacer1"></div>


    </div>




     

    </div>

    <div class="item">
      <img src="images/fond8.jpg" alt="Deuxieme photo">
      <div class="carousel-caption">
        <h1>CSE.SNCF</h1>
      
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderForm">
          Inscrivez-vous
        </button>
      
      <div class="spacer1"></div>
      <div class="spacer1"></div>



    </div>
  </div>

  <div class="item">
      <img src="images/fond.jpg" alt="Troisieme photo">
      <div class="carousel-caption">
        <h1>CSE.SNCF</h1>
      
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderForm">
          Inscrivez-vous
        </button>
      
      <div class="spacer1"></div>
      <div class="spacer1"></div>


    </div>
  </div>


<div class="item">
      <img src="images/fond6.jpg" alt="quatrieme photo">
      <div class="carousel-caption">
        <h1>CSE.SNCF</h1>
      
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderForm">
          Inscrivez-vous
        </button>
      
      <div class="spacer1"></div>
      <div class="spacer1"></div>


    </div>
  </div>

  <div class="item">
      <img src="images/fond10.jpg" alt="cinquieme photo">
      <div class="carousel-caption">
        <h1>CSE.SNCF</h1>
      
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderForm">
          Inscrivez-vous
        </button>
      
      <div class="spacer1"></div>
      <div class="spacer1"></div>



    </div>
  </div>

</div>


 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class=" right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>



</div>




























      

      <!-- Modal -->
<div class="modal fade" id="orderForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Page d'inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <form id="form6" name="form6" class="align" accept-charset="UTF-8" autocomplete="off"  method="post" novalidate="" action="php/addUser.php">
  
<header id="header" class="info">
  <h2 class="centerFormProp">Formulaire d'inscription</h2>
  <div class="centerFormProp">veuillez remplir les informations suivantes :</div>
</header>

  
<ul>
    
  
  
<li id="fo6li36" class="notranslate">
  <label class="desc" id="title36" for="Field36">
    Adresse électronique
      </label>
  <div>
    <input id="Field36" name="email" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="1" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="">
  </div>
  </li>



<li id="fo6li33" class="notranslate">
  <label class="desc" id="title33" for="Field33">
    Mot de passe
      </label>
  <div>
    <input id="Field33" name="regMdp" type="password" class="field text medium" value="" maxlength="255" tabindex="2" onkeyup="handleInput(this); " onchange="handleInput(this);" placeholder="">
      </div>
  </li>



<li id="fo6li34" class="notranslate       focused">
  <label class="desc" id="title34" for="Field34">
    identifiant
      </label>
  <div>
    <input id="Field34" name="regUserName" type="text" class="field text medium" value="" maxlength="255" tabindex="3" onkeyup="handleInput(this); " onchange="handleInput(this);" placeholder="">
      </div>
  </li>


 

  
  <li class="buttons ">
    <div>
                <input type="hidden" name="currentPage" id="currentPage" value="Ub9wuBe198rA2jOo0W8ktjudQpD0N6rkDk0UM6gYwuBefGLqM=">
      
                                                  <input id="saveForm" name="btnRegister" class="btTxt submit" type="submit" value="Soumettre" onmousedown="doSubmitEvents();">
          
    
    
        </div>
  </li>

    <li class="hide">
    <label for="comment">Do Not Fill This Out</label>
    <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
    <input type="hidden" id="idstamp" name="idstamp" value="PaOLq80nrKbvge/6UMxCUcmVKw+QR4dSrtMhgIKRQmI=">
        <input type="hidden" id="stats" name="stats" value="{&quot;errors&quot;:0,&quot;startTime&quot;:0,&quot;endTime&quot;:0,&quot;referer&quot;:&quot;http:\/\/localhost:8888\/eSNCF-github-pages\/&quot;}">
        <input type="hidden" id="clickOrEnter" name="clickOrEnter" value="">
      </li>
  </ul>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>





















             <div class="spacer1"></div>
              <div class="container text-center">
              <h10>________________________________________________________________________________</h10>
            </div>
                

                </div>
              </div>
            </div>
          
         
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 text-center">
                      <h2>Pour être au courant des dernière mise à jour sur les différents sites </h2>


                      <!-- Begin MailChimp Signup Form -->
                      <!-- Begin MailChimp Signup Form -->

<div id="mc_embed_signup">
<form action="https://csesncf.us18.list-manage.com/subscribe/post?u=992b7fac74386a95491eace6a&amp;id=365125c32f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
  
  <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="email address" required>
  <input type="submit" value="Suivez-nous" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></div>
    
</form>
</div>

          <div class="spacer2"></div>
          <div class="container text-center"></div>
              <h10>________________________________________________________________________________</h10>
            </div>


<!--End mc_embed_signup-->

<!--End mc_embed_signup-->
                    
                  </div>
                </div>
              </div>
            <div class="spacer"></div>


            
                  <div class="col-xs-6">

                   <img src="Images/logo_sncf.png" width="400">


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