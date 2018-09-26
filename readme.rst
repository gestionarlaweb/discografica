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
2- Config / Autoload :  (para no tener que declarar el database en cada llamada a la BBDD) 
cambiar la línea :	$autoload['libraries'] = array();
por                     :      	$autoload['libraries'] = array('database');

3- Config / Routes : Aquí definimos la página principal, por defecto lo dejo como está:
$route['default_controller'] = 'welcome';

4- Config / Constants : Defino la constante local CDN donde almaceno toda la plantilla :
define('CDN', "http://127.0.0.1/web/GitHub/DISCOGRAFICA/CDN");

5- En la carpeta CDN tenemos la subcarpeta \assets con todo el contenido CSS, IMG, JavaScrip. Por ello como indico en el punto anterior hemos definido una constante para poder hacer ferencia a esa carpeta de contenido.
En la landingpage.php dentro de la carpeta (View) hacemos esa llamada tipo :
	<?php echo CDN;?>/assets/ ……..
