  <!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
  <meta charset="UTF-8">



  <!-- ------------------- Graficas ------------------- -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="../../code/highcharts.js"></script>
  <script src="../../code/highcharts-3d.js"></script>
  <script src="../../code/modules/export-data.js"></script>
  <script src="<?php echo base_url();?>js/accessibility.js"></script>
  <!-- -------------------Fin Graficas ------------------- -->


  <script src="<?php echo base_url();?>js/html2pdf.bundle.min.js"></script>
  <script src="<?php echo base_url();?>js/script.js"></script>


  <!-- ------------------- Bootrap ------------------- -->

  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  <!-- -------------------Fin  Bootrap ------------------- -->



  <!-- ------------------- Libreria Excel ------------------- -->



  <!-- -------------------Fin Libreria Excel ------------------- -->  


</head>
<body>



  <!-- ------------------- Bootrap ------------------- -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- -------------------Fin  Bootrap ------------------- -->




  <style>

/* ----------------- Menu CSS ----------------------------------------------*/
nav{
  position: relative;
  background: rgb(0,0,0);
  background: linear-gradient(59deg, rgba(0,0,0,0) 2%, 
    rgba(0,0,0,0.13776848630077032) 16%, rgba(0,0,0,1) 30%, 
    rgba(0,0,0,1) 67%, rgba(0,0,0,0.12936512495623254) 83%, 
    rgba(0,0,0,0) 98%); 
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




/*  ------------------------- Registro  sesion ----------------------  */
.registro{
  position: fixed;
  top: 0px;
  left: 0px;
  right: -40px;
  bottom: -40px;
  width: 100%;
  height: 100%;
  background-image: url(
    https://fondosmil.com/fondo/21960.jpg);
  background-size: cover;
  -webkit-filter: blur(2px);
  z-index:-2 ;
}

.regr{
  margin-top: 18%;
  margin-left: 36%;      
  height: 150px;
  width: 350px;
  padding: 10px;s
  z-index: 2;
}

.regr input[type=text]{
  width: 250px;
  height: 30px;
  background: white;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: black;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
}

.regr input[type=password]{
  width: 250px;
  height: 30px;
  background: ;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: black;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
  margin-top: 10px;
}

.regr input[type=button]{
  width: 260px;
  height: 35px;
  background: #fff;
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 2px;
  color: #a18d6c;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
}

.regr input[type=button]:hover{
  opacity: 0.8;
}

.regr input[type=button]:active{
  opacity: 0.6;
}

.regr input[type=text]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.regr input[type=password]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.regr input[type=button]:focus{
  outline: none;
}

::-webkit-input-placeholder{
  color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
  color: rgba(255,255,255,0.6);
}

::placeholder {
  color: gray;

}
/*  ------------------------- FIN Registro  sesion ----------------------  */









/*  ------------------------- Inicio de sesion ----------------------  */

.klk{
  position: fixed;
  top: 0px;
  left: 0px;
  right: -40px;
  bottom: -40px;
  width: 100%;
  height: 100%;
  background-image: url(https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80);
  background-size: cover;
/*  -webkit-filter: blur(4px);*/
z-index:-2 ;
}





.login input[type=text]{
  width: 250px;
  height: 30px;
  background: white;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: black;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
}

.login input[type=password]{
  width: 250px;
  height: 30px;
  background: ;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: black;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
  margin-top: 10px;
}

.login input[type=button]{
  width: 260px;
  height: 35px;
  background: #fff;
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 2px;
  color: #a18d6c;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
}

.login input[type=button]:hover{
  opacity: 0.8;
}

.login input[type=button]:active{
  opacity: 0.6;
}

.login input[type=text]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
  outline: none;
}

::-webkit-input-placeholder{
  color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
  color: rgba(255,255,255,0.6);
}

::placeholder {
  color: gray;

}

/*  -------------------------FIN Inicio de sesion ----------------------  */




/*  -------------------------FOTO PERFIL  ----------------------  */

.imgRedonda {
  width:200px;
  height:200px;
  border-radius:150px;
}
/*  -------------------------FIN FOTO PERFIL----------------------  */





/*  -------------------------Boton potente FOTO PERFIL----------------------  */

@import url("https://fonts.googleapis.com/css?family=Lato:100,300,400");
@import url("https://fonts.googleapis.com/css?family=Roboto:100");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.header {
  text-align: center;
  font-family: 'Roboto', sans-serif;
  font-size: 34px;
  margin-top: 12vh;
}

.footer {
  text-align: center;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  font-size: 20px;
  margin-top: 15vh;
}

.button-container-1 {
  position: relative;
  width: 60px;
  height: 25px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 6vh;
  overflow: hidden;
  border: 1px solid;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  font-size: 10px;
  transition: 0.5s;
  letter-spacing: 1px;
}
.button-container-1 button {
  width: 100%;
  height: 100%;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  font-size: 10px;
  letter-spacing: 1px;
  background: white;
  -webkit-mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/nature-sprite.png");
  mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/nature-sprite.png");
  -webkit-mask-size: 2300% 100%;
  mask-size: 2300% 100%;
  border: none;
  color: black;
  cursor: pointer;
  -webkit-animation: ani2 0.7s steps(22) forwards;
  animation: ani2 0.7s steps(22) forwards;
}
.button-container-1 button:hover {
  -webkit-animation: ani 0.7s steps(22) forwards;
  animation: ani 0.7s steps(22) forwards;
}



.mas {
  position: absolute;
  color: #000;
  text-align: center;
  width: 100%;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  position: absolute;
  font-size: 10px;
  overflow: hidden;
}

@-webkit-keyframes ani {
  from {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
  to {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
}
@keyframes ani {
  from {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
  to {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
}
@-webkit-keyframes ani2 {
  from {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
  to {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
}
@keyframes ani2 {
  from {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
  to {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
}
a {
  color: #00ff95;
}

/*  ------------------------- FIN Boton potente FOTO PERFIL----------------------  */






/*--------------------------Fotos Fichas --------------------------*/


input[type=radio] {
  display: none;
}

.card2 {
  border-color: white;
  position: absolute ;
  width: 85%;
  height: auto;
  left: 0;
  right: 0;
  margin: auto;
  transition: transform .4s ease;
  cursor: pointer;
  margin-right: 900px;
  margin-left: 100px;
}


.cards {
  position: relative;
  width: 100%;
  height: 100%;
  margin-bottom: 20px;
}



#item-1:checked ~ .cards #song-3, #item-2:checked ~ .cards #song-1, #item-3:checked ~ .cards #song-2 {
  transform: translatex(-20%) scale(.8);
  opacity: .4;
  z-index: 0;
}

#item-1:checked ~ .cards #song-2, #item-2:checked ~ .cards #song-3, #item-3:checked ~ .cards #song-1 {
  transform: translatex(20%) scale(.8);
  opacity: .4;
  z-index: 0;
}

#item-1:checked ~ .cards #song-1, #item-2:checked ~ .cards #song-2, #item-3:checked ~ .cards #song-3 {
  transform: translatex(0) scale(1);
  opacity: 1;
  z-index: 1;
  
}

/*-------------------------- Fin Fotos Fichas --------------------------*/




.titulo{

  font-family: "Title-Font";
  font-weight: normal;
  font-stretch: normal;
  letter-spacing: normal;
  font-size: 26px;
  line-height: 1.2em;
  text-transform: uppercase;
}

.tamtable{
  font-family: "Title-Font";
  font-weight: normal;
  font-stretch: normal;
  font-size: 16px;
  text-transform: uppercase;
}











2


/*--------------------- Galeria de imagenes ---------------------*/


#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
.thumb{
  margin-bottom: 30px;
}

.page-top{
  margin-top:85px;
}


img.zoom {
  width: 100%;
  height: 200px;
  border-radius:5px;
  object-fit:cover;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  -ms-transition: all .3s ease-in-out;
}


.transition {
  -webkit-transform: scale(1.2); 
  -moz-transform: scale(1.2);
  -o-transform: scale(1.2);
  transform: scale(1.2);
}
.modal-header {

 border-bottom: none;
}
.modal-title {
  color:#000;
}
.modal-footer{
  display:none;  
}

/*--------------------- Fin Galeria de imagenes ---------------------*/

</style>