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


## Respuesta del webhook

- La respuesta viene como solicitud tipo GET con los siguientes datos:

```
securityWord (string)
invoice_id (string)
isPayed (string : 'true' or string : 'false')
isConfirmed  (string : 'true' or string : 'false')

```