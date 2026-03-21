
<?php
/*Para conectar la base de datos primero debe crearse, para eso usaremos nuestro panel de control de xampp donde activaremos el apache para que el codigo funcione ya que activa el servidor en el local
y activamos el MySQL que es el motor de base de datos que donde se guardaran la información, en el MySQL activamos el admin que nos abrira el administrador de datos phpMyAdmin, es ahi donde crearemos 
nuestra base de datos.
Estando alli creamos una nueva base de datos que la llamaremos "taller_consulta" y le indicamos su cotejamiento que no es mas que la forma que le decimos como debe
leer y ordenar los caracteres en la base de datos, la mejor opción es la predeterminada "utf8mb4_general_ci".
Ahora antes de conectarlo debemos determinar */

$servername = "localhost"; //aqui se coloca el nombre del servidor que sera nuestra propia computadora//
$username = "root"; //aqui debemos colocar el nombre de usuario, por general toca crearlo pero xampp tiene uno por defecto que es root
$password = ""; // lo mismo pasa con la contraseña, debemos crear la contraseña pero xampp ya trae una y es vacia asi "", sin espacio en el medio
$dbname = "taller_consulta"; //aqui colocamos el nombre de nuestra base de datos que acabamos de crear en MyphpAdmin//

/* Se crea la variable $conn con la que haremos la conexion a la base de datos y aqui guardaremos lo que asignamos, se coloca el new indicando que estamos creando una nueva instancia,
la palabra mysql es la clase la cual sabe hablar con las bases de datos de MySQL y se agregan las 4 variables en el mismo orden que fueron definidas*/
$conn = new mysqli($servername, $username, $password, $dbname);
/* 
Verificamos si la conexión falló:
- connect_error detecta errores
- en dado caso de fallar el programa se detiene de indemdiato, haciendo que lo
  que este debajo de la esta linea no se ejecute, de esto se hace cargo el die*/
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

/* 
Si todo sale bien, mostramos mensaje de éxito
*/
echo "Conexión exitosa a la base de datos";

$conn->close(); /* la conexion se cierra cuando el script se termina pero para hacerlo antes o de forma manual para asegurarnos escribimos este codigo*/

?>

