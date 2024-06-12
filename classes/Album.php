<?php

class album
{

    private ?int $id;

    private string $naam;

    private string $artiest;

    private string $release_datum;

    private string $url;

    private ?string $afbeelding;

    private string $prijs;

    /**
     * @param int|null $id
     * @param string $naam
     * @param string $artiest
     * @param string $release_datum
     * @param string $url
     * @param string $afbeelding
     * @param string $prijs
     */
    public function __construct(?int $id, string $naam, string $artiest, string $release_datum, string $url, ?string $afbeelding, string $prijs)
    {
        $this->id = $id;
        $this->naam = $naam;
        $this->artiest = $artiest;
        $this->release_datum = $release_datum;
        $this->url = $url;
        $this->afbeelding = $afbeelding;
        $this->prijs = $prijs;
    }

    public static function getAll(PDO $db): array
    {
        // Voorbereiden van de query
        $stmt = $db->query("SELECT * FROM album");

        // Array om personen op te slaan
        $albums = [];

        // Itereren over de resultaten en personen toevoegen aan de array
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $album = new Album(
                $row['ID'],
                $row['Naam'],
                $row['Artiesten'],
                $row['Release_datum'],
                $row['URL'],
                $row['Afbeelding'],
                $row['Prijs']
            );
            $albums[] = $album;
        }

        // Retourneer array met personen
        return $albums;
    }
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->naam;
    }

    /**
     * @param string $naam
     */
    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
    }

    /**
     * @return string
     */
    public function getArtiest(): string
    {
        return $this->artiest;
    }

    /**
     * @param string $artiest
     */
    public function setArtiest(string $artiest): void
    {
        $this->artiest = $artiest;
    }

    /**
     * @return string
     */
    public function getReleaseDatum(): string
    {
        return $this->release_datum;
    }

    /**
     * @param string $release_datum
     */
    public function setReleaseDatum(string $release_datum): void
    {
        $this->release_datum = $release_datum;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getAfbeelding(): ?string
    {
        return $this->afbeelding;
    }

    /**
     * @param string $afbeelding
     */
    public function setAfbeelding(string $afbeelding): void
    {
        $this->afbeelding = $afbeelding;
    }

    /**
     * @return string
     */
    public function getPrijs(): string
    {
        return $this->prijs;
    }

    /**
     * @param string $prijs
     */
    public function setPrijs(string $prijs): void
    {
        $this->prijs = $prijs;
    }



}