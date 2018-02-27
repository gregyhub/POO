<?php
class Movie extends Modele {

    private $id;
    private $slug;
    private $title;
    private $year;
    private $genres;
    private $synopsis;
    private $directors;
    private $actors;
    private $writers;
    private $runtime;
    private $mpaa;
    private $rating;
    private $popularity;
    private $modified;
    private $created;
    private $poster_flag;
    private $cover;

    public function setId($id) {
        $this->id = $id;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function setTitle($title) {
        $this->title = $title;
    }


    public function getId() {
        return $this->id;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getTitle() {
        return $this->title;
    }


    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getGenres() {
        return $this->genres;
    }

    public function setGenres($genres) {
        $this->genres = $genres;
    }

    public function getSynopsis() {
        return $this->synopsis;
    }

    public function setSynopsis($synopsis) {
        $this->synopsis = $synopsis;
    }

    public function getDirectors() {
        return $this->directors;
    }

    public function setDirectors($directors) {
        $this->directors = $directors;
    }

    public function getActors() {
        return $this->actors;
    }

    public function setActors($actors) {
        $this->actors = $actors;
    }

    public function getWriters() {
        return $this->writers;
    }

    public function setWriters($writers) {
        $this->writers = $writers;
    }

    public function getRuntime() {
        return $this->runtime;
    }

    public function setRuntime($runtime) {
        $this->runtime = $runtime;
    }

    public function getMpaa() {
        return $this->mpaa;
    }

    public function setMpaa($mpaa) {
        $this->mpaa = $mpaa;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getPopularity() {
        return $this->popularity;
    }

    public function setPopularity($popularity) {
        $this->popularity = $popularity;
    }

    public function getModified() {
        return $this->modified;
    }

    public function setModified($modified) {
        $this->modified = $modified;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function getPosterFlag() {
        return $this->poster_flag;
    }

    public function setPosterFlag($poster_flag) {
        $this->poster_flag = $poster_flag;
    }

    public function getCover() {
        return $this->cover;
    }

    public function setCover($cover) {
        $this->cover = $cover;
    }
}