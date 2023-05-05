<?php

namespace RickAndMorty\Controllers;

use RickAndMorty\Core\View;
use RickAndMorty\Models\ApiClient;

class ApiController
{
    private ApiClient $client;

    public function __construct()
    {
        $this->client = new ApiClient();
    }
    public function search() : View
    {
        $data = $this->client->fetchCharacters();
        return new View('search', $data);
    }
}