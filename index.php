<?php 
class Movie {
    public $title;
    public $productionCountry;
    public $genre;

    function __construct($_title, $_productionCountry, $_genre)
    {
        $this -> title = $_title;
        $this -> productionCountry = $_productionCountry;
        $this -> genre = $_genre;
    }

    

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of productionCountry
     */ 
    public function getProductionCountry()
    {
        return $this->productionCountry;
    }

    /**
     * Set the value of productionCountry
     *
     * @return  self
     */ 
    public function setProductionCountry($productionCountry)
    {
        $this->productionCountry = $productionCountry;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }
}



$movie1 = new Movie("Jurassic Park", "USA", "avventura, fantascienza, azione, thriller" );

$movie2 = new Movie("Jurassic World - Il dominio", "USA", "Sci-fi/Azione");

//var_dump($movie1);
//var_dump($movie2);

echo "Il film " . $movie1 -> getTitle() . " è stato prodotto negli " . $movie1 -> getProductionCountry() . " ed è un genere di " . $movie1 -> getGenre();
echo "<br>";
echo "Il film " . $movie2 -> getTitle() . " è stato prodotto negli " . $movie2 -> getProductionCountry() . " ed è un genere " . $movie2 -> getGenre();
