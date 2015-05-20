<?php

namespace OS\Tabelas;

class Area 
{
    protected $id;
    
    protected $nome;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}
