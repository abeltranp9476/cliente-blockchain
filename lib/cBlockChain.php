<?php
namespace Cripto;

use GuzzleHttp\Client as HttpClient;

class cBlockChain
{
    protected $apiVer= 1;
    protected $url= 'https://blockchain.detecton.us/api';
    private $token= '';

    private function __construct($token)
    {
        $this->token= $token;
    }

    public function create_invoice($data)
    {
        try
        {
        $endPoint= 'create'; /* Endpoint del API */
        $url= $this->url . '/v' . $this->apiVer . '/' . $endPoint;
        $data['token']= $this->token;
        $client = new HttpClient();
        $res = $client->request('GET', $url, ['query' => $data]);
            return $res->getStatusCode();
        } catch(\Exception $ex) {
            //echo $ex;
        }
    }

}
