<?php
// Start the session
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>
<html>
<head>
<title>Pagina en PHP </title>
</head>
<body>
<?php
echo "!hola humano";
?>
<script language="php">
echo "Hola colombia !";
</script>
<br>
<?php
echo "yo quiero al php" 
?>
<br>
<?php
echo "A";
echo "B";
echo "C";
?>
<br>
<?php
echo "<strong>con strong se hace un texto en negrilla</strong>";
?>
<br>
<?php
echo "<p> Hola mundo </p>";
// esto es un comentario de una sola linea
echo "<p> estoy aprendiendo PHP </p>"; 
echo "<p> Este es mi primer programa :D</p>"; 
/*Este es un bloque de comentarios que 
abarca varias lineas*/
?>
<br>
<?php
// esto es para hacer variables
$name ='John';
$age ='24';
echo $name;
//Muestra john
?>
<br>
<?php
define ("MSG", "Hola programador");
echo MSG;
//Muestra hola programador
?>
<br>
<?php
define ("MSG", "Hola desarrollador",true);
echo msg;
//Muestra hola desarrollador
?>
<br>
<?php
//Cadena php
$string1 = "¡Hola mundo!"; // comillas dobles
$string2 = '¡Hola mundo!'; // comillas simples
?>
<br>
<?php
  $int1 = 42; //  numero positivo
  $int2 = -42; //  numero negativo
?>
<br>
<?php
  $x = 42.168;
?>
<br>
<?php
  $x = true; $y = false;
?>
<br>
<?php
$str = "10";
$int =20;
$sum = $str + $int;
echo ($sum);
//la salida es = 30
?>
<?php
/*Este script producirá un error, ya que la variable $ name tiene un alcance global y no es accesible dentro de la función getName () . 
<?php
$name = 'Daniela';
function getName(){
echo $name;
}
getName();
//Error variable indefinida
?>
*/
?>

<?php
$name ='Frann';
function getName(){
global $name;
}
getName();
//Muestra Frann
?>
<br>
<? php
$a='Hello';
$hello="Hi";
echo $$a;
//Muestra Hi
?>
<br>

<? php
$num1=8;
$num1=6;
//SUMA
echo $num1 + $num2;//14

//RESTA
echo $num1 - $num2;//2

//MULTIPLICACION
echo $num1 * $num2;//48

//DIVISION
echo $num1 / $num2;//1.333333
?>
<br>
<?php
$x = 14;
$y = 3;
echo $x % $y; //2
?>
<br>
<?php
$x++; // equivalent to $x = $x+1;
$x--; // equivalent to $x = $x-1; 
$x++; // incremento 
$x--; // post-decremento
++$x; // incremento previo 
--$x; // pre-decremento
$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3
?>
<br>
<?php
$x =50;
$x += 100;
echo $x;
//muestra :150
?>
<br>
<?php
//EJEMPLO DE UNA LISTA SIN MATRIZ
$nombre1 = "David"; 
$nombre2 = "Amy"; 
$nombre3 = "Juan";
?>
<?php
//Matriz numerica

$nombre = array ("David", "Amy", "John");
?>
<?php
//Indice manualmente
$nombres [0] = "David";
$nombres [1] = "Amy";
$nombres [2] = "Juan";
echo $nombres [1]; //Produce "amy"
?>
<br>
<?php
// matrices numericas
$myArray[0]="John";
$myArray[1]="<strong>PHP</strong>";
$myArray[2]=21;
echo "$myArray[0] tiene  $myArray[2] años y conoce
$myArray[1]";
//Muestra que John tiene 21 años y conoce php
?>
<br>
<?php
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";
$people= array("David"=>"27","Amy"=>"21","John"=>"42");
echo $people['Amy'];//Muestra 21
?>
<br>
<?php
//Matriz multidimensional
$people = array(
    'online'=>array('David', 'Amy'),
    'offline'=>array('John', 'Rob', 'Jack'),
    'away'=>array('Arthur', 'Daniel')
 );
echo $people['online'][0]; //Muestra David
echo $people['away'][1]; // Muestra Daniel
?>
<br>
<?php
/*
// Declaraciones condicionales
if (condition) {code to be executed if condition is true;
 } else {code to be executed if condition is false;
 }*/
?>
<?php
/*
$x = 10;
$y = 20;
if$x >= $y {
    echo $x;
} else {
    echo $y;
}
//muestra 20
//La declaración de Elseif
if (condition) {
    code to be executed if condition is true;
  } elseif (condition) {
    code to be executed if condition is true;
  } else {
     code to be executed if condition is false;
  }
*/
?>
<?php
//Ejemplo de declaracion de elseif
$age = 21;
if ($age <= 13){
    echo "niño";
}elseif ($age>13 && $age<19){
    echo "adolecente";
} else{
    echo "adulto";
}
//muestra adulto
?>
<br>
<?php
/*
//bucles
while (condition is true) {
    code to be executed;
 }*/
 //bucle while
 $i= 1;
 while ($i < 7){
     echo "El valor es $i <br/>";
    $i++;
 }
?>
<br>
<?php
/*El do ... while Loop
do {
  código a ejecutar;
} while (la condición es verdadera );
PHP
*/
//Ejemplo de bucle do..while Loop
$i= 5;
do{
    echo "El numero es".$i . "<br/>";
    $i++;
} while($i <=7);
//Salida
//El numero es 5
// El numero es 6
// El numero es 7
?>
<br>
<?php
//El bucle for
/*
for (init; test; increment) {
   código a ejecutar;
}
*/
//EJEMPLO DEL BUCLE FOR
for ($a =0;$a < 6; $a++){
    echo "valor de a : ".$a ."<br/>";
}
?>
<br>
<?php
//El bucle foreach
/*
foreach (matriz como $ valor) {
  código a ejecutar;
}
// o
foreach (matriz como $ clave => $ valor) {
   código a ejecutar;
}*/
//EJEMPLO DEL BUCLE FOREACH
$names = array("John","David","Amy");
foreach ($names as $name){
    echo $name.'<br/>';
}
//Jon
//David
//Amy
?>
<br>
<?php
// SENTENCIA SWITCH
$today ='tue';
switch ($today){
case "Mon":
echo "Hoy es lunes";
break;
case "tue":
echo "hoy es martes";
break;
 case "wed":
echo "hoy es miercoles";
break;
case "Thu":
 echo "hoy es Jueves";
break;
case "Fri":
echo "hoy es Viernes";
break;
case "sat":
echo "hoy es sabado";
break;
case "sun":
echo "hoy es Domingo";
break;
default:
echo "Dia invalido" ;
}
//Muestra hoy es martes
?>
<br>
<?php
//Default
$x=5;
switch ($x){
case 1:
echo "one";
break;
case 2:
echo "Two";
break;
default:
echo "No coincide";
}
?>
<br>
<?php
//Switch-Cambiar
$day ='Wed';
switch ($day) {
case 'Mon':
echo "Primer dia de la semana";
break;
case 'Tue':
case 'Wed': 
case 'Thu':
echo 'Dia de trabajo' ;
break;
case 'Fri':
echo 'Friday';
break;
default:
echo 'Weekend';
}
?>
<br>
<?php
//La declaración de descanso
$x=1;
switch ($x){
case 1:
echo "one";
case 2:
echo "Two";
case 3:
echo "Theree";
default :
echo "No coincide";
}
?>
<br>
<br>
<?php
for ($i=0;$i<10;$i++){
if ($i%2==0){
continue;
}
echo $i .'';
}
//Salida 1 3 5 7 9
?>
<?php
/*
//include
include 'header.php'; ?>
<p>Esto es un parrafo</p>
*/
?>s
<br>
<?php
//FUNCION
/*
function functionName () {    
 // código a ejecutar
}
*/
//EJEMPLO
function dihola(){
echo "Hola";
}
dihola();//llama la funcion
?>
<br>
<?php
//Function Parameters-Parámetros de función
function multiplyTwo($number){
  $answer = $number * 2;
  echo $answer;
} 
multiplyTwo(3);
//Muestra 6
?>
<br>
<?php
function multiply($num1,$num2){
  echo $num1 * $num2;
}
multiply(3,6);
//MUESTRA 18
?>
<br>
<?php
function setCounter ($num=10){
  echo "contador es".$num;
}
setCounter(42);//contador es 42
setCounter();//contador es 10
?>
<br>
<?php
//Return-Regreso
function mult($num1,$num2){
  $res = $num1 * $num2;
  return $res;
}
echo mult(8,3);
//Muestra 24
?>
<br>
<?php
//Variables predefinidas
echo $_SERVER['SCRIPT_NAME'];
//Muestra somefile.php
?>
<br>
<?php
//$ _SERVER
/*
echo $_SERVER['HTTP_HOST'];
//Outputs "localhost"

$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';

require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
*/
?>
<form action="first.php" method="post">
  <p>Nombre: <input type="text" name="Nombre" /></p>
  <p>Edad: <input type="text" name="Edad" /></p>
  <p><input type="Enviar" name="Enviar" value="Enviar" /></p>
</form>
<?php
//Welcome <?php echo $_POST["name"]; <br />
//Your age: <?php echo $_POST["age"]; 
?>
<?php
//ERROR
//echo "Hi ".$_GET['name'].". ";
//echo "You are ".$_GET['age']." years old.";
//SESIONES
// Start the session
?>
<?php
echo "Your name is " . $_SESSION['name'];
// Outputs "Your name is John"
?>
<?php
//Crear una cookie
//setcookie(name, value, expire, path, domain, secure, httponly);
//EJEMPLO
?>
<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>
<br>
<?php
$myfile = fopen("names.txt", "w");

$txt = "John\n";
fwrite($myfile, $txt);
$txt = "David\n";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
John
David
*/
//Agregar un archivo
$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);
//EJEMPLO DE AGREGAR UN ARCHIVO
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
?>
<form method="post">
  Nombre: <input type="text" Nombre="text" /> 
  <input type="submit" Nombre="submit" />
</form>
<br>
<?php
$read = file('names.txt');
foreach ($read as $line){
  echo $line .",";
}
?>
<?php
/*
//LEER UN ARCHIVO
$read= file('names.txt');
$count = count($read);
$i=1;
foreach ($read as $line){
echo $line;
if($1<$count){
echo ',';
}
$i++;
}*/
class Person {
public $age; //property
public function speak() { //method
echo "Hi!";
}
}
$p1 = new person();//Instanciar un objeto
$p1->age =23; //asignacion
echo $p1->age;//23
$p1->speak();//Hola bb
//$this-Esto
/*
class Dog{
  public $legs=4;
  public function display(){
    echo $this->legs;
  }
}
$d1 =new Dog();
$d2->display();//4

$d2 = new Dog();
$d2->legs = 2;
$d2->display();//2*/
//DESTRUCCION DE CLASES
/*
class person{
public function __destruct(){
  echo "Objeto destruido"
}
}
$p=nueva persona();*/
?>
<?php
//HERENCIAS DE CLASES
class Animal{
  public $name;
  public function hi(){
    echo "Hola de animal";
  }
}
class Dog extends Animal{

}
$d=new Dog();
$d->hi();
?>
<?php
/*
interface AnimalInterface{
  public function makeSound();
}

class Dog implements AnimalInterface {
  public function makeSound(){
    echo "woof <br/>";
  }
}
class Cat implements AnimalInterface{
  public function makeSound(){
    echo "Meow <br/>";
  }
}
$myObj1 = new Dog();
$myObj2->makeSound();*/
?>
<?php
abstract class Fruit{
  private $color;
  abstract public function eat();
  public function setColor($c){
    $this->color=$c;
  } 
}
//PALABRA CLAVE ESTATICA
class myClass {
  static $myStaticProperty = 42;
}

echo myClass::$myStaticProperty;
?>
</body>
</html>