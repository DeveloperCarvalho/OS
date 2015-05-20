<?php

namespace OS\Tabelas;

class Usuarios 
{
    protected $id;
    
    protected $login;
    
    protected $senha;
    
    protected $nome;
    
    protected $area_id;
    
    public function __get($name) 
    {
        echo "voce tentou pegar em {$name}";
    }
    
    public function __set($name, $value) 
    {
        echo "Voce setou a variavel {$name} com o valor {$value}";
//        $this->$name = $value;
    }
    
    public function __call($name, $arguments) {
        
        echo "voce chamou a função {$name}, com o parametro ".
                implode('', $arguments);
    }
    
    public function setHora($par)
    {
        echo "Muito bem!!!";
    }
}

function getId() {
    return $this->id;
}

 function getLogin() {
    return $this->login;
}

 function getSenha() {
    return $this->senha = md5($senha);
}

 function getNome() {
    return $this->nome;
}

 function getArea() {
    return $this->area_id;
}

 function setId($id) {
    $this->id = $id;
}

 function setLogin($login) {
    $this->login = $login;
}

 function setSenha($senha) {
    $this->senha = $senha;
}

 function setNome($nome) {
    $this->nome = $nome;
}

 function setArea(Area $area_id) {
    $this->area_id = $area_id;
}


