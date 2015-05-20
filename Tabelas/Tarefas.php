<?php

namespace OS\Tabelas;

class Tarefas 
{
    protected $id;
    protected $usuario_id_criado;
    protected $usuario_id_atribuido;
    protected $area_id;
    protected $datacriacao;
    protected $observacao;
    protected $descricao;
    protected $status;
    protected $prioridade;
    protected $prazo;
    
    public function setArea(\OS\Tabelas\Area $objArea)
    {
        $this->area_id = $objArea->getId();
    }
    
    public function setUsuarioCriado(Usuarios $objUsuario)
    {
        $this->usuario_id_criado = $objUsuario;
    }
    
    public function setUsuarioAtribuido(Usuarios $objUsuario)
    {
        $this->usuario_id_atribuido = $objUsuario;
    }
    public function setDataCriacao (\DateTime $data){
        
        $this->datacriacao = $data;
        
    }
    
    public function setDescricao($valor){
        
        $this->descricao = $valor;
        
    }
     public function setStatus($status){
        
        $this->status = $valor;
        
    }
     public function setPrioridade($prioridade){
        
        $this->prioridade = $prioridade;
        
    }
     public function setPrazo($prazo){
        
        $this->prazo = $prazo;
        
    }
    
     public function getId(){
        
        $this->id = $id;
        
    }
         public function getUsuario_Id_Criado(){
        
        $this->usuario_id_criado = $usuario_id_criado;
        
    }
         public function getUsuario_Id_Atribuido(){
        
        $this->usuario_id_atribuido = $usuario_id_atribuido;
        
    }
           public function getArea_Id(){
        
        $this->area_id = $area_id;
        
    }
           public function getDataCriacao(){
        
        $this->datacriacao= $datacriacao;
        
    }
           public function getObservacao(){
        
        $this->observacao = $observacao;
        
    }
           public function getDescricao(){
        
        $this->descricao = $descricao;
        
    }
           public function getStatus(){
        
        $this->status = $status;
        
    }
           public function getPrioridade(){
        
        $this->prioridade = $prioridade;
        
    }
             public function getPrazo(){
        
        $this->prazo = $prazo;
        
    }
}
