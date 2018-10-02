Instalación en Local !!!

1- Config / Database : (Configuramos nuestra base de datos en local)
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => ‘discografica’,
…….

	);
2- En Config / Autoload para no tener que declararlo constantemente lo dejamos así:
	   $autoload['libraries'] = array('database');
   $autoload['helper'] = array('url');

3- Config / Routes : Aquí definimos la página principal, por defecto lo dejo como está:
$route['default_controller'] = 'welcome';

4- Config / Constants : Defino la constante local CDN donde almaceno toda la plantilla :
define('CDN', "http://127.0.0.1/web/GitHub/DISCOGRAFICA/CDN");

5- En la carpeta CDN tenemos la subcarpeta \assets con todo el contenido CSS, IMG, JavaScrip. Por ello como indico en el punto anterior hemos definido una constante para poder hacer referencia a esa carpeta de contenido.
En la landingpage.php dentro de la carpeta (View) hacemos esa llamada tipo :
	<?php echo CDN;?>/assets/ ……..

6- Añadido de JScript en ( vista_registro_lp-php )para obligar a introducir un nombre de artista en el formulario de nuevo LP:

  <script>
  function displayArtista() {

         var selectElem = document.getElementById('id_artista')
         var resultado = selectElem.value;
         
         var e = document.getElementById("id_nombre");

         if (  resultado != 0 ){
           console.log("hay algo, activa el menú"); 
          e.removeAttribute("disabled");   
          }else{
           console.log("no hay nada, sigue sin activar el menú");
           e.setAttribute('disabled','disabled');
          }
  }
  </script> 


La base de datos a instalar (discografica.sql) se encuentra en este repositorio.

