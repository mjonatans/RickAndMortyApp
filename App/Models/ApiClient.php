<?php declare(strict_types=1);

namespace RickAndMorty\Models;
use GuzzleHttp\Client;

class ApiClient
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client(
            ['verify' => false]
        );
    }

    public function fetchCharacters() : array
    {
        $response = $this->client->get('https://rickandmortyapi.com/api/character');

        /*
        echo "<pre>";
        var_dump(json_decode($response->getBody()->getContents())->results);die;
        */

        return $this->createCollection(json_decode($response->getBody()->getContents())->results);
    }

    private function createCollection(array $fetchedRecords) : array
    {
        $collection = [];
        foreach ($fetchedRecords as $character) {
            $collection[] = new Character(
                $character->name,
                $character->species,
                $character->status,
                $character->gender,
                $character->origin->name,
                $character->episode[0],
                $character->image
            );
        }
        return $collection;
    }

}