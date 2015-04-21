# Pontetium
FrameWork que sigue la filosofía Pontetium
# ¿Como usuar el framework?
##Configurar el framework
Ir a app configuracion.ini y modificar:
baseDeDatos, usuario y clave; según su información..
##Crear un constructor
1. Extender de Controller el controlador.
2. Crear una función llamada darReglasDeAcceso()
Que va a tener esta estructura:
```
		function darReglasDeAcceso(){
 			$reglas  = array();
 			$regla1  = array("admin"=> array("listing","add","delete","modify"));
 			array_push($reglas, $regla1);
			return $reglas;
		}
```
Todas las funciones que puedas llamar desde la dirección, ejemplo:
```
index.php/User/modify/?id=1
```
Se pondrá en el arreglo.
Cuando realicé el framework, no corregí la diferencia de admin o un usuario normal, entonces todas las funciones que hagan;	pónganlas en admin.
