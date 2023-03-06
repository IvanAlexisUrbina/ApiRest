# ApiRest

<h1>API RESTFUL CON LARAVEL</h1>
Esta API REST está diseñada para mostrar datos de una base de datos SQL en una aplicación web. Se han creado dos versiones de la API: la versión 1 muestra los recursos por defecto de la base de datos, mientras que la versión 2 da un formato diferente a los recursos.

Además, se ha implementado una autenticación sencilla utilizando Laravel Sanctum. Se valida el usuario por token, comprobando si existe en la base de datos, y se genera un token para acceder y visualizar los datos.

Para utilizar la API, simplemente debe enviarse una solicitud con el token generado por Laravel Sanctum. Para obtener la información deseada, se pueden enviar solicitudes a los diferentes endpoints que se han creado.

En el archivo de documentación de la API, se puede encontrar una lista completa de los endpoints disponibles, junto con ejemplos de solicitud y respuesta. Así como también información sobre cómo iniciar sesión y cómo generar el token necesario para acceder a los recursos protegidos.

Esta API es una herramienta útil para obtener datos de una base de datos SQL y mostrarlos en una aplicación web de manera segura y eficiente.

<h1>LOGIN (opcional)</h1>

POST http://127.0.0.1:8000/api/login

Este endpoint recibe los valores con las credenciales del usuario y devuelve un token de acceso que debe ser incluido en los encabezados de las solicitudes que requieren autenticación. Si las credenciales son incorrectas, se devuelve un código de estado HTTP 401 (Unauthorized).

Request:

form-data
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


Response:<br>
{<br>
"token":"1|Hv8IcN5dSY6TMvb7Mhul1xJpJLPp76eCBEbI91Qd",<br>
"message":"Success"<br>
}
