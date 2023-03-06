# ApiRest

<h1>API RESTFUL CON LARAVEL</h1>
Esta API REST está diseñada para mostrar datos de una base de datos SQL en una aplicación web.<br> Se han creado dos versiones de la API: la versión 1 muestra los recursos por defecto de la base de datos, mientras que la versión 2 da un formato diferente a la coleccion de recursos.<br>

Además, se ha implementado una autenticación sencilla utilizando Laravel Sanctum. Se valida el usuario por token, comprobando si existe en la base de datos, y se genera un token para acceder y visualizar los datos.<br>

Para utilizar la API, simplemente debe enviarse una solicitud con el token generado por Laravel Sanctum. Para obtener la información deseada, se pueden enviar solicitudes a los diferentes endpoints que se han creado.<br>

En este archivo de documentacion de la API, se puede encontrar una lista completa de los endpoints disponibles, <br>
junto con ejemplos de solicitud y respuesta.<br> 
Así como también información sobre cómo iniciar sesión y cómo generar el token necesario para acceder a los recursos protegidos.<br>

Esta API es una herramienta útil para obtener datos de una base de datos SQL y mostrarlos en una aplicación web de manera segura y eficiente.<br>

<h1>LOGIN (opcional)</h1>

strong>Método: </strong>POST<br>
<strong>Endpoint: </strong> http://127.0.0.1:8000/api/login



Este endpoint recibe los valores con las credenciales del usuario y devuelve un token de acceso que debe ser incluido en los encabezados de las solicitudes que requieren autenticación. Si las credenciales son incorrectas, se devuelve un código de estado HTTP 401 (Unauthorized).

Request:<br>
Abre la pestaña "Body" en POSTMAN y selecciona la opción "form-data".<br>
A continuación, ingresa los valores correspondientes. <br>
En este caso, los valores son tomados de la tabla de usuarios en la base de datos <b>apirest</b>.<br>
Por ejemplo, <br>
para el campo "email", selecciona un correo electrónico de la tabla de <b>users</b> y escríbelo en el campo "VALUE".<br>
en el campo password añadimos "password" de nuevo, ya que estos son datos quemados para que acepte password.<br>
y el ultimo dato dato escribimos un dispositivo de ejemplo.

<b>BODY:</b><br>
*FORM DATA <br>

<table>
  <tr>
    <th style="font-weight: bold;">KEY</th>
    <th style="font-weight: bold;">VALUE</th>
  </tr>
  <tr>
    <td>email</td>
    <td>emory.cremin@example.com</td>
  </tr>
  <tr>
    <td>password</td>
    <td>password</td>
  </tr>
    <tr>
    <td>device</td>
    <td>iphone</td>
  </tr>
</table>


<b>Response:</b><br>
{<br>
"token":"1|Hv8IcN5dSY6TMvb7Mhul1xJpJLPp76eCBEbI91Qd",<br>
"message":"Success"<br>
}<br>
<br>
<h1>Obtener información de usuario</h1>

Para obtener la información de un usuario en particular, debemos utilizar el método GET y especificar el id del usuario en el endpoint. Además, es importante incluir el token de autenticación en los <b>headers</b> de la solicitud de la siguiente manera:<br>

<table>
  <tr>
    <td><strong>Authorization</strong></td>
    <td><strong>Bearer [Token]</strong></td>
  </tr>
</table><br>
Es necesario reemplazar [Token] con el token que se generó al momento de realizar el inicio de sesión del usuario correspondiente. <br>Esto garantiza que sólo los usuarios autenticados puedan acceder a la información.<br>

Además, es necesario agregar los siguientes valores a los <b>headers</b> de la solicitud para que la simulación sea correcta y la API sepa que nos estamos conectando desde allí:

<table>
  <tr>
    <td><strong>Accept</strong></td>
    <td><strong>application/json</strong></td>
  </tr>
</table><br>
Con estos valores en los headers, la API sabrá que la solicitud está hecha para obtener datos en formato JSON, lo que permitirá que la respuesta se ajuste a este formato.<br>
y asi mandarnos un mensaje de satisfaccion de no esta autorizado.

<strong>Método: </strong>GET<br>
<strong>Endpoint V1 RECURSO: </strong>http://127.0.0.1:8000/api/v1/posts/1</strong><br>
<strong>Endpoint V1 COLLECTION: </strong>http://127.0.0.1:8000/api/v1/posts</strong><br>
<strong>Endpoint V2 RECURSO: </strong>http://127.0.0.1:8000/api/v2/posts/1</strong><br>
<strong>Endpoint V2 COLLECTION: </strong>http://127.0.0.1:8000/api/v2/posts</strong><br>
