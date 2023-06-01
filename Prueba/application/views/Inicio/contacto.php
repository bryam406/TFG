
<style type="text/css">
    .contact_form{  
        width: 460px; 
        height: auto;
        margin: 80px auto;
        border-radius: 10px;  
        padding-top: 30px;
        padding-bottom: 20px;  
        background-color: #fbfbfb; 
        padding-left: 30px; 
    }
    input{
        background-color: #fbfbfb; 
        width: 408px; 
        height: 40px; 
        border-radius: 5px;  
        border-style: solid; 
        border-width: 1px; 
        border-color: #ab4493; 
        margin-top: 10px;  
        padding-left: 10px;
        margin-bottom: 20px; 
    }
    textarea{
      background-color: #fbfbfb; 
      width: 405px; 
      height: 150px; 
      border-radius: 5px;  
      border-style: solid; 
      border-width: 1px; 
      border-color: #ab4493; 
      margin-top: 10px;  
      padding-left: 10px;
      margin-bottom: 20px; 
      padding-top: 15px; 
  }
  label{
      display: block; 
      float: center;  
  }
  button{
    height: 45px; 
    padding-left: 5px;
    padding-right: 5px;     
    margin-bottom: 20px; 
    margin-top: 10px;   
    text-transform: uppercase;
    background-color: black; 
    border-color: #ab4493; 
    border-style: solid; 
    border-radius: 10px;    
    width: 420px;   
    cursor: pointer;
}
button p{
    color: #fff; 
}
span{
    color: #ab4493; 
}
.aviso{
    font-size: 13px;  
    color: #0e0e0e;  
}
h1{
    font-size: 39px;  
    text-align: letf; 
    padding-bottom: 20px; 
    color: black;
}
h3{
    font-size: 16px; 
    padding-bottom: 30px;
    color: #0e0e0e;   
}
p{
    font-size: 14px; 
    color: #0e0e0e; 
}
::-webkit-input-placeholder {
 color: #a8a8a8;
}
::-webkit-textarea-placeholder {
 color: #a8a8a8;
}
.formulario input:focus{
    outline:0;
    border: 1px solid #97d848;
}
.formulario textarea:focus{
    outline:0;
    border: 1px solid #97d848;
}
.box {
  background: 
  linear-gradient(105deg, 
    rgba(255,255,255,.2) 39%, 
    rgba(51,56,57,1) 96%) center center 
  / 400px 200px no-repeat,
  url(big-star.png) center no-repeat, 
  rebeccapurple;
}
</style>


<!-- formulario de contacto en html y css -->  
<div class="container" style="margin-top:50px">
    <div class="contact_form">
        <div class="formulario">            
          <h1>Formulario de contacto</h1>
          <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
          <form action="submeter-formulario.php" method="post">               
            <p>
                <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                </label>
                <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
            </p>
            <p>
                <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                </label>
                <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
            </p>
            <p>
                <label for="telefone" class="colocar_telefono">Teléfono
                </label>
                <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
            </p>        
            <p>
                <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                </label>
                <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
            </p>        
            <p>
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
                <p class="aviso">
                    <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>                   
            </form>
        </div>  
    </div>
</div>

