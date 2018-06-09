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


 <div class="spacer1"></div> 
  <div class="spacer4"></div> 
   <div class="spacer4"></div> 
 


      <form id="form7" name="form7" class="align" accept-charset="UTF-8"  method="post" novalidate="" action="php/test-connexion.php">
        
      <header id="header" class="info">
        <h2 class="centerFormProp">Page de connexion</h2>
        <div class="centerFormProp">pour se connecter veuillez rentrer les informations suivantes :</div>
      </header>

        
      <ul>
          
        
        
      <li id="fo7li4" class="notranslate      ">
        <label class="desc" id="title4" for="Field4">
          Identifiant
            </label>
        <div>
          <input id="Field4" name="userName" type="text" class="field text medium" value="" maxlength="255" tabindex="1" onkeyup="handleInput(this); " onchange="handleInput(this);" placeholder="">
            </div>
        </li>



      <li id="fo7li5" class="notranslate       focused">
        <label class="desc" id="title5" for="Field5">
          Mot de passe
            </label>
        <div>
          <input id="Field5" name="psw" type="password" class="field text medium" value="" maxlength="255" tabindex="2"  placeholder="">
            </div>
        </li>


       

        
        <li class="buttons ">
          <div>
                      <input type="hidden" name="currentPage" id="currentPage" value="Ub9wuBe198rA2jOo0W8ktjudQpD0N6rkDk0UM6gYwuBefGLqM=">
            
                                                        <input id="saveForm" name="btnLogin" class="btTxt submit" type="submit" value="Connexion" onmousedown="doSubmitEvents();">
                
          
          
              </div>
        </li>

          <li class="hide">
          <label for="comment">Do Not Fill This Out</label>
          <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
          <input type="hidden" id="idstamp" name="idstamp" value="n5UBz2ESMYReXlrg6PoMi8uyX4N779lEOJ6+/xezhCM=">
              <input type="hidden" id="stats" name="stats" value="{&quot;errors&quot;:0,&quot;startTime&quot;:0,&quot;endTime&quot;:0,&quot;referer&quot;:null}">
              <input type="hidden" id="clickOrEnter" name="clickOrEnter" value="">
            </li>
        </ul>
      </form>


<img src="Images/fond12.jpg">






    <div class="spacer1"></div> 
    
    



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





              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>

    