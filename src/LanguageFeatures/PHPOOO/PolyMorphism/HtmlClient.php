<?php
namespace DemoDI;

class HtmlClient
{
    public static function get($url):string
    {
        $ch = curl_init($url);
        // return the transfer as a string. instead of output it directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //set to 1 to tell the library to include the header in the body output for requests with this handle.
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}

// Work inside of constructor.
class DocumentHardtoTest
{
    public $html;
    public function __construct($url)
    {
        // It's hard to override HtmlClient
        $this->html = HtmlClient::get($url);
    }
}

class DocumentEasytoTest
{
    public $html;
    public function __construct($htmlClient, $url)
    {
        //we can test now
        $this->html = $htmlClient::get($url);
    }
}

class DocumentBetter
{
    private $html;
    public function __construct($html)
    {
        $this->html = $html;
    }
}

class DocumentInjectory
{
    private $client;
    public function __construct($client)
    {
        $this->client = $client;
    }
    public function documentBuild($url):DocumentBetter
    {
        return new DocumentBetter($this->client::get($url));
    }
}

$client = new HtmlClient();
$documentInjectory = new DocumentInjectory($client);
$DocumentBetter = $documentInjectory->documentBuild('https://tw.yahoo.com/');
