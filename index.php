<?php

require 'config/bootstrap.php';

require Router::load('routes.php')->direct(Request::uri());

/*

Home. Página de inicio. Muestra un listado de únicamente 5 videojuegos (actividad 3). (index.php)

Videojuego. Muestra el resultado de la actividad 2. (random-videogame.php)

Videojuegos. Muestra un listado de todos los videojuegos. Permite paginación de 5 elementos. La lista se podrá ordenar a través de filtros (actividad 5).  (videogames.php)

API_videojuegos. Acceso a la API (actividad 7) que muestra el resultado en formato json de la primera página de los videojuegos. Se abrirá en una nueva pestaña del navegador. (api/videogames/1)

API_videojuego. Acceso a la API (actividad 7) que muestra el resultado en formato json del videojuego cuyo identificador es 1. Se abrirá en una nueva pestaña del navegador. (api/videogame/1)

Login. Muestra el formulario de login (actividad 8). Sólo se mostrará cuando el usuario no está logueado. (login.php)

Sign up. Muestra un formulario que permite crear un nuevo usuario (actividad 9). Sólo se mostrará cuando el usuario no está logueado. (signup.php)

Perfil de usuario. Muestra un formulario que permite editar el perfil de usuario (actividad 9). Sólo se mostrará cuando el usuario está logueado. (edit.php) 

Logout. Cierra la sesión del usuario y redirige a la página de inicio. Sólo se mostrará cuando el usuario está logueado. (logout.php)

*/

?>

