<?php

class Livro {
    private $titulo;
    private $autor;
    private $ano;
    private $editora;
    private $numpags;
    private $genero;

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getAno() {
        return $this->ano;
    }

    function getEditora() {
        return $this->editora;
    }

    function getNumpags() {
        return $this->numpags;
    }

    function getGenero() {
        return $this->genero;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setEditora($editora) {
        $this->editora = $editora;
    }

    function setNumpags($numpags) {
        $this->numpags = $numpags;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }
   
}

 