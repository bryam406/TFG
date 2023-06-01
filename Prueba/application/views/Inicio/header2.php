<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
  <meta charset="UTF-8">



  <!-- ------------------- Graficas ------------------- -->
  <script src="../../code/highcharts.js"></script>
  <script src="../../code/highcharts-3d.js"></script>
  <script src="../../code/modules/export-data.js"></script>
  <script src="http://proyecto.prueba.com/code/modules/accessibility.js"></script>
    <!-- -------------------Fin Graficas ------------------- -->





  <!-- ------------------- Bootrap ------------------- -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- -------------------Fin  Bootrap ------------------- -->



  <!-- ------------------- Libreria Excel ------------------- -->



  <!-- -------------------Fin Libreria Excel ------------------- -->  

  <link rel="stylesheet" href="<?php echo base_url();?>css/pagina_principal.css">



</head>
<body>



  <!-- ------------------- Bootrap ------------------- -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- -------------------Fin  Bootrap ------------------- -->




  <style>

/* ----------------- Menu CSS ----------------------------------------------*/
nav{
  position: absolute;
  background: rgb(0,0,0);
  background: linear-gradient(59deg, rgba(0,0,0,0) 2%, rgba(0,0,0,0.13776848630077032) 16%, rgba(0,0,0,1) 30%, rgba(0,0,0,1) 67%, rgba(0,0,0,0.12936512495623254) 83%, rgba(0,0,0,0) 98%); 
}
nav a{

  color:#fff;
  margin:0 15px;
  letter-spacing:1px;
  position:relative;
  display:inline-block;
  transition: font-size 0.3s ease-in-out;
  font-size: 0.9rem;
  font-weight:200;
  color: #ffffff;
  text-transform: uppercase;
  text-align: center;
}
nav a:before{
  content:'';
  position: absolute;
  width: 100%;
  height: 3px;
  background:#be9c35;
  top:47%;
  animation:out 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
}
nav a:hover:before{
  animation:in 0.2s cubic-bezier(1, 0, 0.58, 0.97) 1 both;
}
@keyframes in{
  0%{
    width: 0;
    left:0;
    right:auto;
  }
  100%{
    left:0;
    right:auto;
    width: 100%;
  }
}
@keyframes out{
  0%{
    width:100%;
    left: auto;
    right: 0;
  }
  100%{
    width: 0;
    left: auto;
    right: 0;
  }
}
@keyframes show{
  0%{
    opacity:0;
    transform:translateY(-10px);
  }
  100%{
    opacity:1;
    transform:translateY(0);
  }
}
/* -------------- Fin  Menu CSS -------------------------------------- */


</style>