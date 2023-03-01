<?php

class rss {
    private $url;

    public function __construct($url) {
        $this->url = $url;
    }

    public function Feed() {
        libxml_use_internal_errors(true);

        $rss_feed = simplexml_load_file($this->url);

        if ($rss_feed === false) {
            echo "Failed loading RSS feed\n";
            foreach(libxml_get_errors() as $error) {
                echo "\t", $error->message;
            }
        }else if($rss_feed===""){
                echo "";
            
        } else {
            echo "<pre>";
            print_r($rss_feed);
            echo "</pre>";
        }

    }
}
$url = $_POST['rssurl'];
$rss = new rss($url);
$rss->Feed();

?>