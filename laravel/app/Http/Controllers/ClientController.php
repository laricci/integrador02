<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firebase;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{

    /**
     * Diretório da Referência (completar com ID) 
     */
    protected $_directory = 'cadastros/clientes/';

    /**
     * Modelo de Validação
     */
    protected $_validationModel = [
        'cliente_razao_social'  => 'required|string',
        'cliente_nome_fantasia' => 'required|string',
        'cliente_tipo_pessoa'   => 'required|string',
        'cliente_inscricao'     => '',
        'cliente_endereco'      => '',
        'cliente_cidade'        => '',
        'cliente_uf'            => '',
        'cliente_nome_contato'  => '',
        'cliente_celular'       => '',
        'cliente_telefone'      => '',
        'cliente_email'         => 'email',
        'cliente_segmento'      => '',
        'cliente_obs'           => '',
    ];

    protected $_tableModel = [
        'cliente_razao_social',
        'cliente_nome_contato',
        'cliente_celular',
        'cliente_telefone',
        'cliente_segmento',

    ];

    public function tests() {

        $id = 'cliente_' . date("Ymdhis");
        $teste = [
            'cliente_id'            => $id,
            'cliente_razao_social'  => 'cliente_razao_social',
            'cliente_nome_fantasia' => 'cliente_nome_fantasia',
            'cliente_tipo_pessoa'   => 'cliente_tipo_pessoa',
            'cliente_inscricao'     => 'cliente_inscricao',
            'cliente_endereco'      => 'cliente_endereco',
            'cliente_cidade'        => 'cliente_cidade',
            'cliente_uf'            => 'cliente_uf',
            'cliente_nome_contato'  => 'cliente_nome_contato',
            'cliente_celular'       => 'cliente_celular',
            'cliente_telefone'      => 'cliente_telefone',
            'cliente_email'         => 'cliente_email',
            'cliente_adicional'     => 'cliente_adicional',
            'cliente_segmento'      => 'cliente_segmento',
            'cliente_obs'           => 'cliente_obs',
        ];

        $firebase = new Firebase($this->_validationModel, $this->_directory);
        $firebase->testAdd($teste, $id);
    }
    
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
        $addData['cliente_id'] = 'cliente_' . date("Ymdhis");

        foreach($this->_validationModel as $key => $value) {
            $addValue = $request->input($key);
            $addData[$key] = (!is_null($addValue)) ? $addValue : '';
        } 

        $firebase = new Firebase($this->_validationModel, $this->_directory);
        return $firebase->add($request, $addData, $addData['cliente_id']);
    }

    public function edit(Request $request, $id = null)
    {
        $editData = [];

        foreach($this->_validationModel as $key => $value) {
            $editValue = $request->input($key);
            $editData[$key] = (!is_null($editValue)) ? $editValue : '';
        } 

        if (isset($editData['cliente_id'])) unset($editData['cliente_id']);
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