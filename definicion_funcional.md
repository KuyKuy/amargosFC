#Definición funcional
 
 
Una aplicación para poder determinar cuales son los jugadores y los equipos más amargos de la argentina
 
Para esto contarán un una persona (Administrador) encargada de cargar los datos de la aplicación como ser:
* Jugadores
* Equipos
* Calificaciones
etc
 
Por otro lado la aplicación será utilizada por otros usuarios (Usuarios de consulta) para consultar la información. Estos usuarios no podrán cargar ni modificar la información.
 
 
##Descripción de funcionalidades
 
###Pantalla de Registración
 
En esta pantalla se podrán registrar los usuarios de consulta con los siguientes datos:
* Nombre
* Correo electrónico
* Contraseña
* Confirmar contraseña
 
La contraseña debe tener como mínimo 6 caracteres y máximo 12 caracteres.
Cabe aclarar que el usuario administrador no debe registrase ya que es generado por el sistema de forma automática.
 
###Pantalla de Login
 
Esta pantalla se presentará a los usuarios cada vez que intenten acceder al sistema y no se hayan logueado previamente.
 
Desde esta pantalla los usuarios podrán Loguearse, ingresando su usuario y su contraseña.
En caso que los datos ingresados sean válidos se redirigirá al usuario a la página principal.
En caso contrario se mostrará un mensaje indicando que el usuario o la clave son incorrectos
 
Debe existir un link(enlace) para poder recuperar la contraseña en caso que el usuario la haya olvidado. Cuando se presione este link se redirigirá a la pantalla de recuperación de contraseña.
 
 
### Pantalla de Recuperación de contraseña
 
En esta pantalla se solicitará al usuario que ingrese la dirección de email que utilizó para registrarse y presione el botón recuperar contraseña. Una vez realizado esto el sistema deberá validar si la dirección de mail ingresada pertenece a algún usuario registrado en el sistema.
En caso positivo el sistema enviará los datos de acceso a dicha cuenta de email y mostrará el mensaje "Te hemos enviado las instrucción al sistema por correo, revisa tu correo y vuelve a intentarlo.".
En caso contrario mostrará el mensaje "No existe usuario registrado con esa cuenta de email en nuestro sistema".
 
 
### Pantalla principal (Ranking)
 
La pantalla principal consta de un menú desde el cual se podrá acceder a tres pantallas:
Ranking
* Jugadores 
* Equipos
 
Este menú sólo estará visible si el usuario que está loguedo es el usuario Administrador.
 
Debajo del menú aparecerá la tabla de posiciones, esta tabla contará con las siguientes columnas:
 
Posición, Nombre y Apellido del Jugador, Club al que pertenece, índice de amargura.
 
Los datos de la tabla deben estar ordenados por posición y se deben mostrar un máximo de 10 filas.
En la primer posición estará el Jugador con mayor índice de amargura.
 
### Pantalla de Jugadores
 
Desde esta pantalla se podrá registrar un nuevo jugador, modificar sus datos o eliminarlo.
Los datos que se deben ingresar para registrar un jugador son:
* Nombre
* Apellido
* Apodo
* FechaNacimiento
* Equipo (combo)
 
Cada jugador tendrá un link a sus calificaciones. Al hacer click en ese link se abrirá la pantalla en donde se podrá agregar, modificar o eliminar calificaciones del jugador (una por fecha)
 
También se podrá ver una lista de todos los jugadores registrados en el sistema y buscar por su nombre y/o apellido
 
 
 
### Pantalla de Clubes
 
Desde esta pantalla se podrá registrar un nuevo club, modificar sus datos o eliminarlo.
Los datos que se deben ingresar para registrar un club son:
<Definición de campos>
 
También se podrá ver una lista de todos los clubes registrados en el sistema y buscar por su nombre.
 
 
 
 

