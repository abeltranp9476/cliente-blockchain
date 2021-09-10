### Requerimientos

- PHP version >= 7.3
- Composer

## Datos a enviar

```
$data= [
    'security_word' => $data['securityWord'], /* Palabra de seguridad */
    'address' => $data['address'], /* Direccion (clave publica) de la wallet  */
    'amount' => $data['amount'], /* Monto de la transaccion */
    'invoice_id' => $data['invoice_id'] /* Identificador de su orden */
];

```


## Respuesta del webhook

- La respuesta viene como solicitud tipo GET con los siguientes datos:

```
**securityWord** (string)
**invoice_id** (string)
**isPayed** (string : 'true' or string : 'false')
**isConfirmed**  (string : 'true' or string : 'false')

```