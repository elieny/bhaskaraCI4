<?php

namespace App\Controllers;

//use App\Models;

class Bhaskara extends BaseController
{
    public function Inserir()
    {
        $a = $this->request->getPost()['a'];
        $b = $this->request->getPost()['b'];
        $c = $this->request->getPost()['c'];

        $calcModel = new \App\Models\BhaskaraModel();

        $data = 
        [
           'a'=> $a,
           'b'=> $b,
           'c'=> $c
        ];
        
        $calcModel ->save($data);
        
    }

    public function formInsert()
    {
        echo view('create');
    }

    public function ler()
    {
        $bhasModel = new \App\Models\BhaskaraModel();
        $todos = $bhasModel->findAll();
        
        foreach ($todos as $key => $linha)
        {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['id'] . '"> DELETAR </a>' ;
        }
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['id'] . '"> ALTERAR </a>';
        } 
        $data['tabela'] = $todos;
        echo view('bhaskaraView', $data);

    }

    public function excluir($id = FALSE )
    {
		
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$resultado = $bhasModel->delete($id);		
		var_dump($resultado);     
    }
    public function editar($id)
    {
        $bhasModel = new \App\Models\BhaskaraModel();

      $todos = $bhasModel->find($id);
      $resultado['alterar'] = $todos;
        var_dump($resultado);   
        
    }
}