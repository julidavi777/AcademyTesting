# MANUAL TÉCNICO

### INTRODUCCIÓN 

Este proyecto forma parte de una serie de proyectos propuestos por el Departamento de Informática Senita orientados al desarrollo de una academia virtual. El dominio que aquí se ha tratado ha sido “Drawing Academy”. 

En los últimos años, el dominio de Informática para exigencias artísticas ha tenido un importante auge gracias a los avances técnicos de la informática, que permiten desarrollar aplicaciones para suplir cada vez mayor las necesidades de experiencia de usuario, medios audiovisuales, el modelado 3d y el desarrollo gráfico.  

Se ha hecho un estudio para la extracción de requisitos. El concepto de reutilización proporciona unos beneficios inherentes en lo tocante a la calidad del software, productividad del desarrollador y coste general del sistema. Sin embargo, es preciso Análisis de dominio Software para Este sistema en línea, se creó a partir de la necesidad de lo vivido hoy en dia como lo es la virtualización y el estudio a distancia, gracias a ello ahora podemos disfrutar de clases en vivo con instructores disponibles en todo momento.  


### OBJETIVOS

- Crear un sistema de registro y control de Cursos, Docentes y Estudiantes, acorde a los requisitos exigidos por la academia de dibujo. 

- Guardar la información respectiva de cada curso, docente y estudiante. 
- Ver la información respectiva de cada curso, docente y estudiante. 
- Editar la información respectiva de cada curso, docente y estudiante. 
- Eliminar la información respectiva de cada curso, docente y estudiante. 
- Implementar normas de validación para los formularios.


### ALCANCE

- Para poder utilizar el sistema es requerido registrarse.

- Los paises disponibles son Colombia y Venezuela.

- Los departamentos disponibles para Venezuela son:

	- Carabobo.
	- Aragua.

- Los departamentos disponibles para Colombia son:

	- Antioquia.
	- Cundinamarca.
	- Risaralda.

- El sistema está diseñado para funcionar con MySQL.
- El sistema esta configurado para funcionar sin front-end. 
- Los estudiantes solo se pueden registrar si son de los paises y departamentos mencionados.  
- Los instructores y estudiantes deben enviar su documento de identidad en formato PDF.  
- Los instructores deben subir una imagen y solo es permitido en formato jpg y png .

### USUARIOS

En esta fase de proyecto, no existen privilegios de usuarios administrativos, tampoco existen usuarios invitados. Todos los usuarios tienen los mismos privilegios.

**Estudiantes**: Son todos aquellos jóvenes que se han registrado en Drawing Academy, lo pueden hacer con su tipo de documento, número de documento, adjuntando un PDF con su documento escaneado por la lado y lado, fecha y lugar de expedición de este, nombres, apellidos, género, fecha y lugar de nacimiento, y el curso al cual desea inscribirse. 

**Docentes**: Son todos aquellos profesores que serán los encargados de dictar los cursos en Drawing Academy, se pueden registrar con sus nombres apellidos, edad, título profesional, fecha de contrato, foto, y adjuntando el documento de identidad escaneado por ambas partes en formato PDF. 

**Cursos**: Son todos aquellos cursos que se dictaran en Drawing academy, se pueden registrar con una foto alusiva al curso, el nombre del curso, una descripción, y su duración en horas 


### HERRAMIENTAS UTILIZADAS EN EL DESARROLLO

##### IDES o Editores
**- Visual Studio Code**: Es un IDE desarrollado. Se utilizó la versión 1.71.1 (user setup )cuya descarga se obtuvo de [Visual Studio Code](http://https://code.visualstudio.com/download "Visual Studio Code")

##### Plugins instalados
**- Bootstrap Snippets **

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/bootstrap%20v4%20snipets.PNG?raw=true)

**- Laravel extensión Pack: incluye: Laravel Blade, laravel snippets **

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/laravel%20extension%20pack.PNG?raw=true)

##### Framework Laravel

En la instalación se indicó que el ejecutable de php se encuentra en la carpeta de XAMPP, en la ruta: C:\xampp\php, se instaló el framework Laravel a traves del comando: composer create-project laravel/laravel Drawing-Academy. 

### METODOLOGÍA DE PROYECTO 

**- SCRUM **: Para el desarrollo de este proyecto de software se utilizó la metodología SCRUM, la cual es también una metodología incremental que divide los requisitos y tareas de forma similar a Kanban. Se itera sobre bloques de tiempos cortos y fijos (entre dos y cuatro semanas) para conseguir un resultado completo en cada iteración. Las etapas son: planificación de la iteración (planning sprint), ejecución (sprint), reunión diaria (daily meeting) y demostración de resultados (sprint review). Cada iteración por estas etapas  se denomina también sprint. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/scrum.PNG?raw=true)


### REQUISITOS TÉCNICOS PARA DESARROLLAR EL SISTEMA 

Para el correcto desarrollo del proyecto se usaron 2 Computadores con las siguientes características: 

- **RAM**:  64GB 
- **Disco** Duro: NVMe 256 GB 
- **Procesador**: XENON 2.80 Gz 
- **Pantalla**: 14”  
- **Servidores de prueba**: se trabajó lanzando un servidor a través de XAMPP usando el host 127.0.0.1:8000 
- **base de datos en SQL**: Esta base de datos debe tener como nombre academy para que el proyecto pueda funcionar a cabalidad. 

### REQUISITOS TÉCNICOS PARA LA EJECUCIÓN DEL SISTEMA 

- La página web con todas sus funcionalidades, se podrá acceder desde cualquier computador que tenga mínimo estas características: 

	- **Procesador**: Intel Celeron 2.40 GHz 
	- **RAM**: 2 Gb 
	- **Disco dur**o: 500 Gb  

- Se ha probado que el sistema funciona correctamente en los siguientes navegadores: 

	- Google Chrome en su última versión 
	- Mozilla Firefox 
	- Brave 
	- Microsoft Edge 

- **Ancho de banda**: 20Mb 


### DETALLES DE DISTRIBUCIÓN DE CARPETAS Y ARCHIVOS 

##### Distribución de carpetas en el backend 

**- Controladores de recursos :**Dentro de Http tenemos la carpeta Controllers, donde a su vez tenemos los siguientes controladores que son de recursos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/controladores%20de%20recursos.PNG?raw=true)

- **CourseController.php:** Se encarga de manejar toda la lógica para la tabla Courses del sistema, donde se programan las acciones de crear nuevo curso, editar curso, y mostrar curso seleccionado. 
- **StudentController.php**: Se encarga de manejar toda la lógica para la tabla Studentsdel sistema, donde se programan las acciones de crear nuevo estudiante, editar estudiante, y mostrar estudiante seleccionado. 
- ** TeacherController.php:** Se encarga de manejar toda la lógica para la tabla Teachers del sistema, donde se programan las acciones de crear nuevo docente, editar docente, y mostrar docente seleccionado. 

**- Migraciones:**En el proyecto se pueden apreciar las siguientes migraciones, dentro de la ruta databases->Migrations

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migrations.PNG?raw=true)


- **Create_courses_table**: Esta migración se refiere a la tabla Courses, donde se describen los campos tales como: 

	- **ID**: Llave primaria de la tabla, e identificador para cada curso. 
	- **Name**: Nombre del Curso. 
	- **Description**: Breve descripción del curso. 
	- **Duration**: Duración del curso en horas. 

- **Add_imagen_to_courses:** Esta migración se usó para añadir el campo imagen a la tabla cursos, ya que en el momento de realizar la anterior migración no lo habíamos incluido. 

	- **Image**: Imagen del curso. 

- **Create_subjects_table**: Esta migración se refiere a la tabla Subjects, donde se describen los campos tales como: 

	- **ID**: Llave primaria de la tabla, e identificador para cada materia. 
	- **Name**: Nombre de la Materia. 
	- **Hourly_intensity**: Intensidad horaria de la materia. 

- **Create_teachers_table: **

	- **ID**: Llave primaria de la tabla, e identificador para cada docente. 
	- **Name**: Nombre del docente. 
	- **Last_name**: Apellidos del Docente.  
	- **College_degree**: Título profesional. 
	- **Age**: Edad. 
	- **Contract_date**: Fecha de contrato. 
	- **Image**: Foto. 
	- **Identify_document**: Documento de identidad en formato PDF. 

- **Create_countries_table: **

	- **ID**: Llave primaria de la tabla, e identificador para cada País. 
	- **Name**: Nombre del País. 

- **Create_departments_table:** 

	- **ID**: Llave primaria de la tabla, e identificador para cada Departamento. 
	- **Name**: Nombre del Departamento. 
	- **Country_id**: Llave primaria de la tabla Countries, que sirve para relacionar un Departamento a un País. 

- **Create_municipalities_table: **

	- **ID**: Llave primaria de la tabla, e identificador para cada Municipio. 
	- **Name**: Nombre del Departamento. 
	- **Department_id**: Llave primaria de la tabla Departments, que sirve para relacionar un Municipio a un Departamento. 

- **Create_course_subjects_table: **

	- **Course_id**: Llave primaria de la tabla Courses, que sirve para relacionar un Curso con una Materia. 
	- **Subject_id**: Llave primaria de la tabla Subjects, que sirve para relacionar una Materia a un Curso. 

- **Create_students_table: **

	- **ID**: Llave primaria de la tabla, e identificador para cada Estudiante. 
	- **Document_type**: Tipo de documento de identificación. 
	- **Document_number**: Número del documento de identificación.  
	- **Identify_document**: Documento de identificación escaneado en formato PDF. 
	- **Expedition_date**: Fecha de expedición del documento de identificación. 
	- **Id_exped_muni**: Municipio de expedición del documento de identificación. 
	- **Names**: Nombres del Estudiante. 
	- **Last_name1**: Primer apellido del Estudiante. 
	- **Last_name2**: Segundo apellido del Estudiante.  
	- **Gender**: Género. 
	- **Birth_date**: Fecha de nacimiento.  
	- **Id_birth_muni**: Municipio de nacimiento. 
	- **Stratum**: Estrato socioeconómico. 
	- **Id_course**: Llave primaria de la tabla Courses, que sirve para relacionar a un Estudiante con un Curso. 

**- Rutas principales para el proyecto Laravel :**

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/routes.PNG?raw=true)

Dentro del archivo web.php que está en routes, encontramos las rutas principales del proyecto como: 

- /**courses**: esta ruta provee acceso a la interface de cursos, desde ahí tendrán todas las funcionalidades requeridas por los mismos, El controlador de recursos que manupula dichas funciones se llama CourseController 
- /**teachers**: esta ruta provee acceso a la interface de instructores, desde ahí tendrán todas las funcionalidades requeridas por mismos, El controlador de recursos que manupula dichas funciones se llama TeacherController 
- /**students**: esta ruta provee acceso a la interface de estudiantes, desde ahí tendrán todas las funcionalidades requeridas por mismos, El controlador de recursos que manupula dichas funciones se llama StudentController 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/routes%202.PNG?raw=true)


### CONFIGURACIÓN DE LA BASE DE DATOS 

- Para el caso particular se usó MySQL y, específicamente, PhpMyadmin, herramienta contenida en Xampp. 
- Para poder trabajar en producción con la base de datos, se deben habilitar los servicios de Apache y  Mysql, dando clic en los botones start del panel de control. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/configuraci%C3%B3n%20base%20de%20datos.PNG?raw=true)

- Si algún puerto está ocupado, se hace el respectivo cambio usando el botón Admin. 
- Los datos de acceso a la base de datos son: 

	- **Host**: 127.0.0.1 
	- **Usuario**: root 
	- **Clave**:  
	- **Nombre de la BD**: academy 

- Para la correcto configuración del proyecto Laravel y su conexión con la base de datos se agrega la información respectiva en el archivo .env  

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/conexion%20a%20la%20base%20de%20datos%20env.PNG?raw=true)

- A través del siguiente panel se pueden hacer configuraciones en la base de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/configuracion%20base%20de%20datos%20php%20myadmin.PNG?raw=true)

- La base de datos funciona con tablas relacionales, las relaciones son: 

	- Teacher se conecta con Subject con una relacion de uno a muchos  
	- Subject se conecta con Course a traves de una tabla pivote con una relacion de muchos a muchos 
	- Course se conecta con Student con una relacion de uno a muchos 
	- Student se conecta con Municipality con una relacion de muchos a uno  
	- Municipality se conecta con Department con una relacion de uno a muchos 
	- Department se conecta con Country con una relacion de muchos  a uno  


##### Detalles de los modelos y migraciones Laravel: 

- **Migración students y modelo Student**

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20estudiante.PNG?raw=true)

Esta migración contiene toda la información para la tabla Students, para la cual se han definido los siguientes campos y tipos de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20estudiante%202.PNG?raw=true)

El modelo respectivo se llama Student 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/modelo%20estudiante.PNG?raw=true)

- **Migración courses y modelo Course: **

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20curso.PNG?raw=true)

Esta migración contiene toda la información para la tabla Courses, para la cual se han definido los siguientes campos y tipos de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20curso%202.PNG?raw=true)

El modelo respectivo se llama Course 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/modelo%20curso.PNG?raw=true)

- **Migración subjects y modelo Subject:**

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20materias.PNG?raw=true)

Esta migración contiene toda la información para la tabla Subjects, para la cual se han definido los siguientes campos y tipos de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20materias%202.PNG?raw=true)

El modelo respectivo se llama Subject 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/modelo%20materia.PNG?raw=true)

- **Migración tecahers y modelo Teacher:**

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20docentes.PNG?raw=true)

Esta migración contiene toda la información para la tabla Teachers, para la cual se han definido los siguientes campos y tipos de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20docentes%202.PNG?raw=true)

El modelo respectivo se llama Teacher 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/modelo%20docente.PNG?raw=true)

- **Migración countries y modelo Country:**

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20paises.PNG?raw=true)

Esta migración contiene toda la información para la tabla Countries, para la cual se han definido los siguientes campos y tipos de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20paises%202.PNG?raw=true)

El modelo respectivo se llama Country 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/modelo%20pais.PNG?raw=true)

- **Migración departments y modelo Department:**

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20departamentos.PNG?raw=true)

Esta migración contiene toda la información para la tabla Departments, para la cual se han definido los siguientes campos y tipos de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20departamentos%202.PNG?raw=true)

El modelo respectivo se llama Department 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/modelo%20departamento.PNG?raw=true)

- **Migración municipalities y modelo Municipality:**

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20municipios.PNG?raw=true)

Esta migración contiene toda la información para la tabla Municipalities, para la cual se han definido los siguientes campos y tipos de datos: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/migracion%20municipios%202.PNG?raw=true)

El modelo respectivo se llama Municipality 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/modelo%20municipio.PNG?raw=true)


### DETALLES TÉCNICOS MÓDULOS DEL SISTEMA 

##### Módulo Estudiantes

Este módulo se ha creado con el fin de que cualquier persona se pueda registrar, la información aquí suministrada se guardará en la tabla Students de la base de datos ya mencionada. Los campos han sido configurados para que en nombre y apellidos solo acepte letras. El campo para contraseña debe contener mínimo 8 caracteres, entre este mínimo una mayúscula, minúsculas y números. 

Este modulo esta conectado con el de municipio porque todo alumno debe tener asociado el documento de identificación con la ciudad de expedicion y de la misma manera toda ciudad debe conectarse con el departamento al que pertenece y cada departamento se conecta con el pais en el que está ubicado  

Al entrar a este módulo desde el navegador se vería así: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/indexStudent.png?raw=true)

La vista (view) en Laravel que permite renderizar esta vista es index.blade.php. Ubicada en la carpeta Students.  Además, existen otras vistas, dentro de la carpeta estudiantes, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son: 

Create.blade.php Vista que provee el siguiente formulario en el navegador: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/createStudent.png?raw=true)

Show.blade.php Vista que permite ver los detalles de los estudiantes que se han registrado en el sistema, de forma individual 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/showStudent.png?raw=true)

Edit.blade.php Vista que permite ver y editar los detalles de los estudiantes que se han registrado en el sistema, de forma individual 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/editStudent.png?raw=true)

##### Modulo Cursos.

Este módulo esta pensado para crear cursos en los que los estudiantes puedan entrar, la información aquí suministrada se guardará en la tabla Courses de la base de datos ya mencionada. Los campos han sido configurados para que en nombre solo acepte letras y no sea mayor a 15 caracteres. La descripción no debe ser mayor a 60 caracteres, la duración debe ser entre 1 y 99 horas. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/indexCourses.png?raw=true)

Create.blade.php Vista que provee el siguiente formulario en el navegador: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/createCourse.png?raw=true)

Show.blade.php Vista que permite ver los detalles de los cursos que se han registrado en el sistema, de forma individual, tambien permite su eliminacion y su edicion 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/ShowCourse.png?raw=true)

Edit.blade.php Vista que permite ver y editar los detalles de los cursos que se han registrado en el sistema, de forma individual 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/editCourse.png?raw=true)

##### Módulo Docentes

Este módulo se ha creado con el fin de que los instructores que trabajen para la compañía se puedan registrar, la información aquí suministrada se guardará en la tabla Teachers de la base de datos ya mencionada. Los campos han sido configurados para que en nombre y apellidos solo acepte letras y un máximo de 45 caracteres. El titulo debe tener como máximo 50 caracteres. La edad solo es valida entre 18 y 99 años  

Este módulo esta conectado con el de materias, porque el instructor solo puede estar asociado a una materia y de la misma manera la materia debe estar asociada a un curso y el curso asociado directamente con el estudiante.  

Al entrar a este módulo desde el navegador se vería así: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/indexTeacher.png?raw=true)

La vista (view) en Laravel que permite renderizar esta vista es index.blade.php. Ubicada en la carpeta Teachers.  Además, existen otras vistas, dentro de la carpeta teachers, relacionadas con este módulo, los cuales permiten realizar el respectivo CRUD, como son: 

Create.blade.php Vista que provee el siguiente formulario en el navegador: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/createTeacher.png?raw=true)

Show.blade.php Vista que permite ver los detalles de los cursos que se han registrado en el sistema, de forma individual, tambien permite su eliminacion y su edicion 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/showTeacher.png?raw=true)

Edit.blade.php Vista que permite ver y editar los detalles de los docentes que se han registrado en el sistema, de forma individual 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/editTeacher.png?raw=true)

### MODELO RELACIONAL BD DEL SISTEMA 

- La base de datos para este sistema, como ya se informó se llama Academy y el modelo es el siguiente: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/trabjo%20en%20equipo.png?raw=true)

### DICCIONARIO DE DATOS 

- Se anexa documento Diccionario_de_datos_academy.pdf , anexo 1 

### CLASES, LIBRERIAS Y MÉTODOS UTILIZADOS 

##### Clases utilizadas 

- No se usaron clases especiales en este proyecto, salvo las que trae por default el framework, las clases usadas fueron las siguientes:

Las clases utilizadas en este proyecto son:  

- Country 
- Course 
- Department 
- Municipality  
- Student  
- Teacher 
- Use 

##### Métodos utilizados

- Para este proyecto en la mayoría de controladores se utilizaron los siguientes métodos: 

	- **Método index**: Método que lanza un listado de todos los registros de la tabla que se está trabajando. 
	- **Método create**: Método ue permite la creacion de nuevos cursos, docentes o estudiantes según sea el caso. 
	- **Método store**: Método que permite almacenar la información de un curso, docente o estudiante según sea requerido. 
	- **Método show**: Método que permite mostrar la lista de cursos, docentes o estudiantes según sea el módulo que se está usando. 
	- **Método update**: Método que permite editar y actualizar la información de un curso, docente o estudiante según le módulo que se este usando. 

### ERRORES COMUNES Y SOLUCIONES 
- Al intentar acceder a una vista desde el navegador lanza el error SQLSTATE[HY000] [2002] No se puede establecer una conexión

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/error%20sql%20state.PNG?raw=true)

### CONTINUACIÓN DEL PROYECTO O MEJORAS EN EL MISMO 

**Para agregar columnas nuevas a las tablas**: Para los siguientes casos, se asume que el programador ejecutará nuevamente las migraciones con un fresh, reconstruyendo todas las tablas de la base de datos. 

- **Agregar columnas nuevas a la tabla Cursos**

Para esto, diríjase a la ruta database/migration, al archivo 2022_07_29_131143_create_courses_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/tabla%20cursos.PNG?raw=true)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, ubicas la línea seleccionada y añades el nombre de la nueva columna. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20curso%20store.PNG?raw=true)

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20curso%20update.PNG?raw=true)

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nuevas%20columnas%20modelo%20curso.PNG?raw=true)

- **Agregar columnas nuevas a la tabla materias**

Para esto, diríjase a la ruta database/migration, al archivo 2022_08_11_080615_create_subjects_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20materias.PNG?raw=true)

Como está tabla no tiene su controlador de recurso, si llegado el caso lo necesita para crear materias desde la interfaz, créelo con el siguiente comando en la terminal: php artisan make:controller SubjectController –resource. También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, ubicas la línea seleccionada y añades el nombre de la nueva columna. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20materias%20modelo.PNG?raw=true)

- **Agregar columnas nuevas a la tabla Docentes**

Para esto, diríjase a la ruta database/migration, al archivo 2022_08_11_080617_create_teachers_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20docentes.PNG?raw=true)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, ubicas la línea seleccionada y añades el nombre de la nueva columna. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20docentes%20store.PNG?raw=true)

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20docentes%20update.PNG?raw=true)

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20docentes%20modelo.PNG?raw=true)

- **Agregar columnas nuevas a la tabla Estudiantes**

Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_122919_create_students_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20estudiante.PNG?raw=true)

También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, ubicas la línea seleccionada y añades el nombre de la nueva columna. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20estudiante%20store.PNG?raw=true)

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20estudiante%20update.PNG?raw=true)

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20estudiante%20modelo.PNG?raw=true)

- **Agregar columnas nuevas a la tabla Países**

Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_122559_create_countries_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20paises.PNG?raw=true)

Como está tabla no tiene su controlador de recurso, si llegado el caso lo necesita para crear materias desde la interfaz, créelo con el siguiente comando en la terminal: php artisan make:controller CountryController –resource. También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, ubicas la línea seleccionada y añades el nombre de la nueva columna. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20paises%20modelo.PNG?raw=true)

- **Agregar columnas nuevas a la tabla Departamentos**

Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_122638_create_departments_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20departamentos.PNG?raw=true)

Como está tabla no tiene su controlador de recurso, si llegado el caso lo necesita para crear materias desde la interfaz, créelo con el siguiente comando en la terminal: php artisan make:controller DepartmentController –resource. También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, ubicas la línea seleccionada y añades el nombre de la nueva columna. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20departamentos%20modelo.PNG?raw=true)

- **Agregar columnas nuevas a la tabla Municipios **

Para esto, diríjase a la ruta database/migration, al archivo 2022_08_25_122708_create_municipalities_table. Los campos actuales aparecen desde la línea 17. Agregue el o los campos deseados en la posición que prefiera. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20municipios.PNG?raw=true)

Como está tabla no tiene su controlador de recurso, si llegado el caso lo necesita para crear materias desde la interfaz, créelo con el siguiente comando en la terminal: php artisan make:controller MunicipalityController –resource. También, debe especificar si es permitido manipular estos campos, por ejemplo, para una actualización de datos (Update dentro del CRUD), para lo cual debe dirigirse al modelo Curso, ubicas la línea seleccionada y añades el nombre de la nueva columna. 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/nueva%20columna%20municipios%20modelo.PNG?raw=true)

### CAMBIO DE IDIOMA 

- Descargar el paquete con el idioma que se desee trabajar el proyecto y pegarlo dentro del directorio lang (en nuestro caso el paquete de idioma nos lo suministró el supervisor del proyecto), en este caso encontramos español e inglés como lo podemos ver en la siguiente captura: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/idiomas.PNG?raw=true)

- Ubicamos el fichero app.php dentro del directorio config 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/cambio%20de%20idioma%201.PNG?raw=true)

- Dentro de este fichero ubicamos los siguientes puntos y los modificamos según el lenguaje que hayamos elegido para nuestro proyecto: 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/cambio%20de%20idioma%202.PNG?raw=true)

- Después de hacer esto nuestro proyecto ya contara con el idioma que hayamos elegido. 

### LICENCIA

| **Programa**  | **Autor**  | **Version** | **Software libre**   | **Licencia** |
| -----------  | ------  | --------  | ---------------- | --------- |
| VS Code   | Microsoft Corp   | 1.71   | SI   |  MIT Freeware  |
|  Php | The PHP Group   | 8.1.6   | SI   | The PHP License   |
| Bootstrap   | Twitter  | 5.1.3   | SI  | MIT license (Apache License)   |
| Laravel    | Taylor OTwell   | 4.2.16   | SI   | MIT   |
| Drawing Academy   | Rafael José Arenas Julian David Anturi   | 1.0   | NO  | ©DAcademy   |


### COLABORACIÓN

Pasos para colaborar en este proyecto  

- Clonar el repositorio original con el comando git clone [GitHub RafArenas](http://https://github.com/RafArenas/Academy.git "GitHub RafArenas")

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/1.png?raw=true)

- Se abre la carpeta resultante de la operación anterior 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/2.png?raw=true)

- Se ejecuta el editor de texto, en este caso el visual studio code  

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/3.png?raw=true)

- Se debe configurar  el archivo .env extrayando el “.example”  

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/4.png?raw=true)

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/5.png?raw=true)

- Se instala las dependencias y componentes faltantes del composer con el comando **composer install** o **composer update** 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/6.png?raw=true)

- Se genera el key con el comando  php artisan key:generate  

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/7.png?raw=true)

- Se crea una base de datos con el nombre correspondiente academy 

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/8.png?raw=true)

- Se corren las migraciones con los seeders así:  

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/9.png?raw=true)

- Para visualizar las imágenes correctamente se ejecuta el siguiente comando :

![](https://github.com/RafArenas/Capturas-manual-tecnico/blob/master/img/10.png?raw=true)

