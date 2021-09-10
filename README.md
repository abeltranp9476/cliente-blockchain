### Criptomonedas soportadas

- Bitcoin (BTC)
- Litecoin (LTC)
- Bitcoincash (BCH)

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

## Ejemplo de uso 

```
include("cliente_blockchain.php"); /* Cargue la clase desde la ubicacion en que usted la tenga */

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
securityWord (string)
invoice_id (string)
isPayed (string : 'true' or string : 'false')
isConfirmed  (string : 'true' or string : 'false')

```