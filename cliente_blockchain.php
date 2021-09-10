<?php
use GuzzleHttp\Client as HttpClient;

class cBlockChain
{
    protected $apiVersion=1;

    public function create_invoice($data)
    {
        try
        {
        $url= 'https://blockchain.detecton.us/api/v1/create';
        $client = new HttpClient();
        $res = $client->request('GET', $url, ['query' => $data]);
          return $res->getStatusCode();
        } catch(Exception $ex) {
            //echo $ex;
        }
    }

}
