   <script src="../pushjs/push.js"></script>
   
   <nav class="blue">
       <a href="" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>     
        </nav>
    <ul id="menu" class="side-nav fixed ">
     <li>
     <div class="userView">
       <div class="background">
          <img src="../img/bin.jpg"> 
       </div>  
       <a href="../perfil/index.php" > <img src="../usuarios/<?php echo $_SESSION['foto'];?>" alt="" class="circle"></a>
       <a href="" class="white-text"><?php echo $_SESSION['nombre'];?></a>
       <br>
       <a href="" class="white-text"><?php echo $_SESSION['correo'];?></a>
     </div>    
     </li>
      <li><a href="../inicio"><i class="material-icons green-text">home</i>INICIO</a></li> 
      <li><div class="divider"></div></li>
      <li><a href="../usuarios"><i class="material-icons blue-text">contacts</i>USUARIOS</a></li> 
      <li><div class="divider"></div></li>
      <li><a href="../login/salir.php" id="btn" onmousedown="bleep.play()"><i class="material-icons red-text">power_settings_new</i>SALIR</a></li> 
      <li><div class="divider"></div></li>
       
      
    </ul>

   