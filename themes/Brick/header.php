<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$config->title?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=$config->theme_virtual?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?=$config->theme_virtual?>css/business-casual.css" rel="stylesheet">
    <?=$config->loadhead?>


<style>
      #mainNav .navbar-nav>li.nav-item>a.active {
        background: #000;
        color:#fff;
        opacity: .5;
        height:100%;
      }
      #mainNav .navbar-nav>li.nav-item>a:hover {
        background: #333;
        color:#fff;
        opacity: .5;
        height:100%;
      }
</style>
  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">

      <?=$config->siteName?>

    </div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">

      <strong><?=$config->slogan?></strong>

    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">


<!--?=makeLinks($navMain);?-->

                <?=bc_links($config->navMain)?>



          </ul>
        </div>
      </div>
    </nav>

<?=$config->bannerAd?>

    <div class="container">
        <div class="bg-faded p-4 my-4">
            <?=showFeedback();?>
      <!-- header ends here -->
            
<?php
/*
function to create navigation from 
as associative array

*/
function bc_links($nav1){
    
    global $config;
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        //$url = $config->virtual_path . $url; //add virtual path
        if(THIS_PAGE == $url)
        {//current page - add highlight
              $myReturn .= '
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded active" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }else{//no highlight



             $myReturn .= '
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }




    }
    
    return $myReturn;

}//end bc_links()
         
   
?>
        
        
        
        