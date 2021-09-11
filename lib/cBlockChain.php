<?php
namespace Cripto;

use GuzzleHttp\Client as HttpClient;

class cBlockChain
{
    protected $apiVer= 1;
    protected $url= 'https://blockchain.detecton.us/api';
    
    public function create_invoice($data)
    {
        try
        {
        $endPoint= 'create'; /* Endpoint del API */
        $url= $this->url . '/v' . $this->apiVer . '/' . $endPoint;
        $client = new HttpClient();
        $res = $client->request('GET', $url, ['query' => $data]);
          return $res->getStatusCode();
        } catch(\Exception $ex) {
            //echo $ex;
        }
    }

}
