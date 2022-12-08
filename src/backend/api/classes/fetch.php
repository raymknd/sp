<?php 
    class FetchService {
        function __construct(string $url) {
            $this->url = $url;
        }
        function fetch() {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, $this->url);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }
        function parseJson(mixed $input) {
            return json_decode($input);
        }
    }
?>