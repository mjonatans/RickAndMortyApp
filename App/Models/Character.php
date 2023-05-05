<?php declare(strict_types=1);

namespace RickAndMorty\Models;
class Character
{
    private string $name;
    private string $species;

    private string $status;
    private string $gender;
    private string $location;
    private string $firstSeen;
    private string $imageURL;

    public function __construct
    (
        string $name,
        string $species,
        string $status,
        string $gender,
        string $location,
        string $firstSeen,
        string $imageURL
    )
    {
        $this->name = $name;
        $this->species = $species;
        $this->status = $status;
        $this->gender = $gender;
        $this->location = $location;
        $this->firstSeen = $firstSeen;
        $this->imageURL = $imageURL;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getSpecies(): string
    {
        return $this->species;
    }
    public function getStatus(): string
    {
        return $this->status;
    }
    public function getGender(): string
    {
        return $this->gender;
    }
    public function getLocation(): string
    {
        return $this->location;
    }
    public function getFirstSeen(): string
    {
        return $this->firstSeen;
    }
    public function getImageURL(): string
    {
        return $this->imageURL;
    }

}