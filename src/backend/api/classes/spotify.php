<?php 
    require "./classes/fetch.php";
    class SpotifyService {
        function __construct(
            string $clientId, 
            string $clientSecret, 
            string $redirectUri
        ) {
            $this->clientId = $clientId;
            $this->clientSecret = $clientSecret;
            $this->redirectUri = $redirectUri;
        }
    }
?>