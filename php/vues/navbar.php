
   <nav class="navbar navbar-default navbar-transparent navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
      
      <a class="navbar-brand" href="index.php"><img src="Images/logo2.png" class="logo" width="90"></a>
    </div>




    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


      
<ul class="nav navbar-nav ">
<?php
include('php/session-manager.php');

if(isset($_SESSION["userID"])){

echo('
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sites Extérieurs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="site_dreux.php">Site de Dreux</a>
          <div class="spacer4"></div>
          <a class="dropdown-item" href="site_chartres.php">Site de Chartres</a>
          <div class="spacer4"></div>
          <a class="dropdown-item" href="site_rambouillet.php">Site de Rambouillet</a>
          <div class="spacer4"></div>
          <a class="dropdown-item" href="site_vouille.php">Site de Vouille</a>
          <div class="spacer4"></div>
          <a class="dropdown-item" href="site_montparnasse.php">Site de Montparnasse</a>
          <div class="spacer4"></div>
          <a class="dropdown-item" href="site_montrouge.php">Site de Montrouge</a>
          <div class="spacer4"></div>
        </div>
      </li>

');
}
?>


</ul>

<form method="POST">
      <ul class="nav navbar-nav navbar-right">
        
      <!--  <li><a href="connexion.php">Connexion</a></li> -->
       <?php if(isset($_SESSION["userID"])){

echo('<li><a href="#"><button class="nav-boutton" type="submit" name="btnDeco">Déconnexion</button></a></li>');
     }else{
     echo('<li><a href="connexion.php">Connexion</a></li>');
     }
?>
       <li><a href="contact.php">Contact</a></li>   
          
           
            

          </ul>
        </form>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>