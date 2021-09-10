<?php
use GuzzleHttp\Client as HttpClient;

class cBlockchain
{   
    protected $apiVersion=1;
    protected $url= 'https://blockchain.detecton.us/api';

    public function create_invoice($data){
        try
        {
        $point= 'create';
        $client = new HttpClient();
        $res = $client->request('GET', $this->url.'/v'.$this->apiVersion.'/'.$point, ['query' => $data]);
          return $res->getStatusCode();
        } catch(Exception $ex) {
            //echo $ex;
        }
    } 

}