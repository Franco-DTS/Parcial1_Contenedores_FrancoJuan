INSTRUCCIONES

PASO 1
Lo primero que realizaremos sera levantar nuestro contenedor de la base de datos, por lo que
tendremos que abrir nuestra terminal, esta se debe encontrar en la ruta, es decir nuestra primera
carpeta que es la de "Parcial1_Contenedores_FrancoJuan", en nuestra terminal solo vamos a escribir
"docker-compose up" y por consecuencia se levantara el contenedor en nuestro docker desktop, en nuestro
caso ocuparemos MariaDB. Teniendo dicho enlace, ya podremos acceder a la base de datos atraves de tu gestor,
en mi caso utilize HeidiSql, procedemos a crear nuestra base de datos con la informacion que mostraremos en
nuestros servidores web que tendremos en nuestros otros dos contenedores.

PASO 2
Primero levantaremos nuestro contenedor llamado cont_hub, por lo que nos iremos a la carpeta de esta misma, nombrada
asi como mencione antes y abriremos nuestra terminal para ejecutar "docker-compose up", en la ruta de dicha carpeta.
No olvidemos que en esta carpeta se debe encontrar nuestro archivo docker-compose.yml al igual que nuestra carpeta app
en la que podremos modificar la pagina atraves de PHP y html, de igual manera que ya podremos acceder a la base de datos
mediante un enlace, es asi como nuestra segundo contenedor funcionara, el cont_hub, posteriormente podemos irnos a docker
desktop para verificar que este corriendo.

PASO 3
Ya por ultimo, levantaremos nuestro tercer contenedor, llamado "cont_dockerfile", el cual tambien nos mostrara una pagina.
Para esto, tendremos que abrir una terminal con direccion a la ruta de la carpeta, que llevara el nombre "cont_dockerfile"
y ejecutaremos docker-compose up, para levantar el segundo servidor.
Tomar en cuenta que en esta carpeta se deberan encontrar distintos archivos, al anterior servidor, debido a que en este nosotros
construimos manualmente, a comparacion del cont_hub que se hacia atraves de una imagen.
En el cont_dockerfile se debera encontrar un docker-compose.yml, nuestro archivo dockerfile y una carpeta app donde vamos a hacer
el diseño de la pagina y conectarla a la base de datos del primer contenedor para asi mostrar la informacion de dicha base.


El respaldo de la base de datos utilizada se encuentra en la ruta de la carpeta principal.