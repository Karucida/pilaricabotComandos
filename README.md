Para crear un comando se debe hacer un pull requests añadiendo tu propia carpeta:

El comando es el nombre de la carpeta fichero y clase 

Si queremos crear un comando simple por ejemplo:

!patata el nombre de la carpeta, fichero y clase debe ser patata/patata.php y la clase también debe ser patata
 
La clase debe extender de command e implementar el método doMagic para que vosotros hagáis vuestra magia el cargador de comandos hará el resto.

El objeto command recibe un array que viene del JSON que envia telegram un ejemplo del JSON es:
```
{
  "update_id": 467514016,
  "message": {
    "message_id": 42872172,
    "from": {
      "id": 4147572,
      "is_bot": false,
      "first_name": "Karu",
      "username": "Karucida",
      "language_code": "es"
    },
    "chat": {
      "id": 4147572,
      "first_name": "Karu",
      "username": "Karucida",
      "type": "private"
    },
    "date": 1543272792,
    "text": "moláis"
  }
}
```
si os descargaís este repositorio y qureís probarlo en local con añadir en autoloadCommand la variable y cargarlo devolverá el texto:
```
$telegramMessage['message']['text'] = <Texto que quereis procesar>;
```
ej:
```
$telegramMessage['message']['text'] = "!patata";
```
La versión del servidor es PHP 5.5.9
