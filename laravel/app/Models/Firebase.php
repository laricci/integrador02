<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Firebase
{
    //## CONSTANTS #################################################################################

    /**
     * Tipos de mensagem
     */
    const MSG_ERROR             = 'error';
    const MSG_EMPTY             = 'empty';
    const MSG_INVALID           = 'invalid';
    const MSG_SUCCESS_ADD       = 'success_add';
    const MSG_SUCCESS_EDIT      = 'success_edit';
    const MSG_SUCCESS_REMOVE    = 'success_remove';
    const MSG_NO_RESULTS        = 'no_results';

    //## ATTRIBUTES ################################################################################

    /**
     * Modelo de Validação
     */
    protected $_model = array();

    /**
     * Diretório do banco de dados
     */
    protected $_reference = '';

    /**
     * Conexão com o banco de dados
     */
    protected $_database;

    /**
     * Mensagens de Retorno
     */
    private $_private_messages = [
        'error'             => 'Houve algum erro. Por favor, tente novamente.',
        'empty'             => 'Nenhum campo foi preenchido. Por favor, revise o formulário.',
        'invalid'           => 'Valores inválidos. Por favor, revise o formulário.',
        'success_add'       => 'Cadastro adicionado com sucesso!',
        'success_edit'      => 'Cadastro atualizado com sucesso!',
        'success_remove'    => 'Cadastro removido com sucesso!',
        'no_results'        => 'Não foi localizado nenhum resultado para esta pesquisa.',
    ];

    //## SETTERS AND GETTERS #######################################################################

    public function __construct($model, $reference)
    {
        $this->_model     = $model;
        $this->_reference = $reference;
        $this->_database  = \App\Services\FirebaseService::connect();

        return $this;
    }
    
    public function getModel(){
        return $this->_model;
    }

    public function getReference(){
        return $this->_reference;
    }
    
    //## PUBLIC METHODS ############################################################################

    public function testAdd($addData, $id){

        $this->_database
                ->getReference($this->_reference . $id)
                ->set($addData);
    }

    public function list() 
    {
        $result = $this->_getSingleMessage(self::MSG_NO_RESULTS);
        $data   = $this->_database
            ->getReference($this->getReference())
            ->getValue();

        if ($data) $result = $data;

        return response()->json($result, 200);
    }

    public function add(Request $request, $addData, $id) 
    {
        $model      = $this->getModel();
        $reference  = $this->getReference();
        // $validator  = Validator::make($addData, $model);

        // if ($validator->fails()) {
        //     return response()->json($this->_getSingleMessage(self::MSG_INVALID), 422);
        // }

        $msg = $this->_getSingleMessage(self::MSG_EMPTY);
        if (count($addData)){
            $msg = $this->_getSingleMessage(self::MSG_SUCCESS_ADD);
            $this->_database
                ->getReference($reference . $id)
                ->set($addData);
        }
        
        return response()->json(['msg' => $msg], 200);
    }

    public function edit(Request $request, $editData, $id) 
    {
        $model      = $this->getModel();
        $reference  = $this->getReference();
        // $validator  = Validator::make($request->all(), $model);

        // if ($validator->fails()) {
        //     return response()->json($this->_getSingleMessage(self::MSG_INVALID), 422);
        // }

        // $editData   = array();
        // $postData   = $request->post();
        $msg        = $this->_getSingleMessage(self::MSG_EMPTY);

        // foreach ($model as $field => $rule){
        //     if (isset($postData[$field])){
        //         $editData[$field] = $postData[$field];
        //     }
        // }

        if (count($editData)){
            $msg = $this->_getSingleMessage(self::MSG_SUCCESS_EDIT);
            $this->_database
                ->getReference($reference . $id)
                ->update($editData);
        }

        return response()->json($msg, 200);
    }

    public function delete(Request $request, $id)
    {
        $this->_database
            ->getReference($this->getReference() . $id)
            ->remove();

        return response()->json($this->_getSingleMessage(self::MSG_SUCCESS_REMOVE), 200);
    }

    public function view(Request $request, $id)
    {
        $result = $this->_getSingleMessage(self::MSG_NO_RESULTS);
        $data   = $this->_database
            ->getReference($this->getReference() . $id)
            ->getValue();

        if ($data) $result = $data;

        return response()->json($result, 200);
    }

    //## PROTECTED METHODS #########################################################################

    protected function _getSingleMessage($index){

        $msg = '';
        if (isset($this->_private_messages[$index])){
            $msg = $this->_private_messages[$index];
        }

        return $msg;
    }

    //## PRIVATE METHODS ###########################################################################

}
