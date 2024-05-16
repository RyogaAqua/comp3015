# comp3015, Pagina de Web de Sistema de Inventarios
Programacion Web con Bases de Datos, Pagina de Web de Sistema de Inventarios

Creador Emmanuel A. Arguelles Ocasio

Es una Pagina de Web que gestiona una base de datos llamada inventario cual esta en un servidor local que tiene 3 tablas la cuales son Producto, Usuario y Suplidor.

Las funcionalidades de la pagina de web es crear, actualizar o borrar datos en las differentes tablas de la base de dato que estan en el servidor.

La base de datos contiene las siguientes tablas:

producto
suplidor
usuario

La tabla de producto contiene la informacion de los productos cuales son:

Id(Int)
nombre(varchar)
suplidor(varchar)
precio(double)
cantidad(double)

La tabla de usuario contiene la informacion de los usuarios cuales son:

Id(Int)
nombre(varchar)
email(varchar)
clave(varchar)

La tabla de suplidor contiene la informacion de los suplidores cuales son:

Id(Int)
nombre(varchar)
email(varchar)
telefono(varchar)

Diagrane ER: 

3-Tier Model

Presentation: Apache, HTML, CSS, Javascript
^
| HTTP
Application: Python, PHP
^
| JDBC
Database: MySQL

En esta pagina se puede ver como se ve una tabla en la pagina de web
![alt text](<Screenshot 2024-05-16 173035.png>)

En esta pagina se puede ver la parte de crear un producto nuevo en la base de datos cual tiene un diseño similar a la de actualizar y borrar.
![alt text](<Screenshot 2024-05-16 191930.png>)










