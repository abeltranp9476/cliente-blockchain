
## Que es esto?
cBlockchain es un cliente escrito en PHP para hacer uso de la pararela de pagos criptos que he desarrollado. Este cliente cuenta con 2 funciones:

- **create_invoice**

Esta funcion es para usuarios que deseen manejar todo el algoritmo de generacion de direcciones y reciclaje por su cuenta. Esto hace que sea mas complejo integrar los pagos en su web, pero le permite tener total seguridad. Solamente mi servicio se encargaria de notificar cuando a determinada direccion le llegue determinado monto mediante un webhook.

### Criptomonedas soportadas y su identificador

- Bitcoin (btc)
- Litecoin (ltc)
- Bitcoincash (bch)
- Dash (dash)
- Zcash (zcash)

### Datos a enviar

```
$data= [   
    'security_word' => '', /* Palabra de seguridad */
    'address' => '', /* Direccion (clave publica) de la wallet  */
    'amount' => '', /* Monto de la transaccion en la cripto correspondiente a la direccion */
    'invoice_id' => '' /* Identificador de su orden */
];

```

### Ejemplo de uso 

```
require_once __DIR__ . '/vendor/autoload.php';
use Cripto\cBlockChain;
$cBlockChain= new cBlockChain('abcdefghijklmnopqrstuvwxyz'); /* Se le pasa el token al constructor de la clase */
$cBlockChain->create_invoice([
    'securityWord' => 'clavedeseguridad',
    'address' => $address,
    'amount'  => $price,
    'invoice_id' => $idInvoice
]);

```

La otra funcion es:

- **create_invoice_from_pub**

### Criptomonedas soportadas y su identificador

- Bitcoin (btc)
- Litecoin (ltc)
- Dash (dash)
- Zcash (zcash)

Esta es la opcion mas facil de implementar, puesto que simplifica mucho el trabajo. De esta manera, mi sistema se encarga de todo lo relacionado con el pago. Usted envia una peticion donde envia:

### Datos a enviar

```
$data= [   
    'description' => '', /* Descripcion de la factura*/
    'pub' => '', /* MasterKey de la criptomoneda en su wallet  */
    'cripto' => '', /* Identificador de la criptomoneda  */
    'security_word' => '', /* Palabra de seguridad */
    'amount' => '', /* Monto en USD */
    'invoice_id' => '', /* Identificador de su orden */
];

```

### Ejemplo de uso 

```
require_once __DIR__ . '/vendor/autoload.php';
use Cripto\cBlockChain;
$cBlockChain= new cBlockChain('abcdefghijklmnopqrstuvwxyz'); /* Se le pasa el token al constructor de la clase */
$cBlockChain->create_invoice([
    'description' => '',
    'pub' => '',
    'security_word' => '',
    'amount' => '',
    'invoice_id' => '',
]);

```

De manera muy sencilla, obtiene como resultado de esa peticion una respuesta json que contiene:

- status
- address
- amount
- payment

Solo debe redireccionar en caso de haber sido satisfactorio, hacia la url que viene en **payment**. Esto lleva hacia un formulario con toda la informacion para que su cliente efectue el pago.


### Requerimientos

- PHP version >= 7.3
- Composer
- guzzlehttp/guzzle



### Instalación
- Instalar el paquete a través de Composer

```
composer require abeltranp9476/cliente-blockchain
```



### Respuesta del webhook es la misma para cualquiera de las 2 funciones

- La respuesta viene como solicitud tipo GET con los siguientes datos:

```
securityWord (string) /* Este dato sirve para autenticar la respuesta */
invoice_id (string) 
isPayed (string : 'true' or string : 'false') /* Si el pago fue registrado en la blockchain devuelve true */
isConfirmed  (string : 'true' or string : 'false') /* Si el pago tiene 6 o mas confirmaciones devuelve true */

```

## Info para comprobar funcionamiento

Mande a comprobar que existe un pago de **0.0001923** BTC a la direccion: **1ACorxkWSD7mx7V6MuLjXE5W7p3w9VyUYa**