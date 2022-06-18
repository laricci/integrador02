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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
