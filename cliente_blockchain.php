<?php
use GuzzleHttp\Client as HttpClient;

class cBlockChain
{   
    protected $apiVersion=1;
    protected $url= 'https://blockchain.detecton.us/api';

    public function create_invoice($data){
        try
        {
        $endPoint= 'create';
        $client = new HttpClient();
        $res = $client->request('GET', $this->url.'/v'.$this->apiVersion.'/'.$endPoint, ['query' => $data]);
          return $res->getStatusCode();
        } catch(Exception $ex) {
            //echo $ex;
        }
    } 

}