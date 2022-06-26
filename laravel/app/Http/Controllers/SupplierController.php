<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firebase;

class supplierController extends Controller
{

    /**
     * Diretório da Referência (completar com ID) 
     */
    protected $_directory = 'cadastros/fornecedores/';

    /**
     * Modelo de Validação
     */
    protected $_validationModel = [
        'fornecedor_razao_social'  => 'required|string',
        'fornecedor_nome_fantasia' => 'required|string',
        'fornecedor_tipo_pessoa'   => 'required|string',
        'fornecedor_inscricao'     => '',
        'fornecedor_endereco'      => '',
        'fornecedor_cidade'        => '',
        'fornecedor_uf'            => '',
        'fornecedor_nome_contato'  => '',
        'fornecedor_celular'       => '',
        'fornecedor_telefone'      => '',
        'fornecedor_email'         => 'email',
        'fornecedor_segmento'      => '',
        'fornecedor_obs'           => '',
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $firebase = new Firebase($this->_validationModel, $this->_directory);
        return $firebase->list();
    }

    public function add(Request $request)
    {
        $addData = [];
        $addData['fornecedor_id'] = 'fornecedor_' . date("Ymdhis");

        foreach($this->_validationModel as $key => $value) {
            $addValue = $request->input($key);
            $addData[$key] = (!is_null($addValue)) ? $addValue : '';
        } 

        $firebase = new Firebase($this->_validationModel, $this->_directory);
        return $firebase->add($request, $addData, $addData['fornecedor_id']);
    }

    public function edit(Request $request, $id = null)
    {
        $editData = [];

        foreach($this->_validationModel as $key => $value) {
            $editValue = $request->input($key);
            $editData[$key] = (!is_null($editValue)) ? $editValue : '';
        } 

        if (isset($editData['fornecedor_id'])) unset($editData['fornecedor_id']);
        $firebase = new Firebase($this->_validationModel, $this->_directory);

        return $firebase->edit($request, $editData, $id);
    }

    public function view(Request $request, $id = null)
    {
        $firebase = new Firebase($this->_validationModel, $this->_directory);
        return $firebase->view($request, $id);

    }

    public function remove(Request $request, $id = null)
    {
        $firebase = new Firebase($this->_validationModel, $this->_directory);
        return $firebase->delete($request, $id);
    }

}