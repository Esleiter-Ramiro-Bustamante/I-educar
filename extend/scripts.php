</main>

   <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
  </script>
 
 <script src="../pushjs/push.js"></script>
 <script  src="../js/materialize.js"> </script>
 <script  src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.js"> </script>
   

   <script>
   //script para buscar usuarios
   $('#buscar').keyup(function(event) {
     var contenido=new RegExp($(this).val(),'i'); //que acepte mayusculas y minisculas al momento de buscar
     $('tr').hide();
     $('tr').filter(function(){
      return contenido.test($(this).text());
     }).show();
     $('.cabecera').attr('style','');
   });



         $(".button-collapse").sideNav(); //habilita el menu sideNav

         $("select").material_select(); //inicializa el select del fomumario nivel de usuario de materialize

         //funcion que convierte a mayuscula los datos del formulario 
         function may(obj, id){
           obj=obj.toUpperCase();
           document.getElementById(id).value=obj;
         }


     var btn=document.getElementById('btn');
  btn.addEventListener('click',function(){
    Push.create("Escuela de santiago Tuxtla",{
      body:"Sesion Cerrada",
      icon:"../pushjs/cerrar.png" ,
      timeout:5000,
      onClick:function(){
        this.close();
      }
    });
  });


var bleep = new Audio();
bleep.src = '../pushjs/beep.mp3';

    </script>


