### Criptomonedas soportadas

- Bitcoin (BTC)
- Litecoin (LTC)
- Bitcoincash (BCH)
- Dash (DASH)
- Zcash (ZEC)

### Requerimientos

- PHP version >= 7.3
- Composer
- guzzlehttp/guzzle

## Datos a enviar

```
$data= [
    'token' => '', /* Su token */
    'security_word' => '', /* Palabra de seguridad */
    'address' => '', /* Direccion (clave publica) de la wallet  */
    'amount' => '', /* Monto de la transaccion */
    'invoice_id' => '' /* Identificador de su orden */
];

```

### Instalación
- Instalar el paquete a través de Composer

```
composer require abeltranp9476/cliente-blockchain
```

## Ejemplo de uso 

```
require_once __DIR__ . '/vendor/autoload.php';
use Cripto\cBlockChain;
$cBlockChain= new cBlockChain();
$cBlockChain->create_invoice([
    'token' => 'abcdefghijklmnopqrstuvwxyz',
    'securityWord' => 'clavedeseguridad',
    'address' => $address,
    'amount'  => $price,
    'invoice_id' => $idInvoice
]);

```


## Respuesta del webhook

- La respuesta viene como solicitud tipo GET con los siguientes datos:

```
securityWord (string) /* Este dato sirve para autenticar la respuesta */
invoice_id (string) 
isPayed (string : 'true' or string : 'false') /* Si el pago fue registrado en la blockchain devuelve true */
isConfirmed  (string : 'true' or string : 'false') /* Si el pago tiene 6 o mas confirmaciones devuelve true */

```

## Info para comprobar funcionamiento

Mande a comprobar que existe un pago de **0.0001923** BTC a la direccion: **1ACorxkWSD7mx7V6MuLjXE5W7p3w9VyUYa**