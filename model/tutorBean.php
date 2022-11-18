<?php

class tutorBean
{ 
    public $MATRICULA;
    public $NOME;
    public $EMAIL;
    public $TELEFONE;
    public $MATERIA;
    public $SENHA;    

    function __construct($m, $n, $e, $t, $mate, $s)
    {
        $this->MATRICULA = $m;
        $this->NOME = $n;
        $this->EMAIL = $e;
        $this->TELEFONE = $t; 
        $this->MATERIA = $mate;
        $this->SENHA = $s;
    }
}
