<div class="modal hide" id="modal_container">
    <div class="modal__body">

        <form id="form_cliente" action="#">

            <!-- Form Modal Header -->
            <div class="modal__header">
                <span id="modal_title">Adicionar Cliente</span>
                <div onclick="hideModal(clientFields)" class="btn_close">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>

            <!-- Form Modal Content -->
            <div class="modal__content">

                <div>
                    <div class="form__label">Identificação</div>
                    <div class="form__group" id="cliente_identificacao">
            
                        <div class="form__item">
                            <label for="cliente_razao_social">Razão Social:</label>
                            <input type="text" id="cliente_razao_social" name="cliente_razao_social" >
                        </div>
                
                        <div class="form__item">
                            <label for="cliente_nome_fantasia">Nome Fantasia:</label>
                            <input type="text" id="cliente_nome_fantasia" name="cliente_nome_fantasia" >
                        </div>
                
                        <div class="form__item">
                            <label for="cliente_tipo_pessoa">Tipo de Pessoa:</label>
                            <input type="text" id="cliente_tipo_pessoa" name="cliente_tipo_pessoa" >
                        </div>
                
                        <div class="form__item">
                            <label for="cliente_inscricao">CNPJ / CPF:</label>
                            <input type="text" id="cliente_inscricao" name="cliente_inscricao" >
                        </div>
            
                    </div>
                </div>
        
                <div>
                    <div class="form__label">Endereço</div>
                    <div class="form__group" id="cliente_endereco">
            
                        <div class="form__item">
                            <label for="cliente_endereco">Endereço:</label>
                            <input type="text" id="cliente_endereco" name="cliente_endereco">
                        </div>
            
                        <div class="form__item">
                            <label for="cliente_cidade">Cidade:</label>
                            <input type="text" id="cliente_cidade" name="cliente_cidade">
                        </div>
            
                        <div class="form__item">
                            <label for="cliente_uf">UF:</label>
                            <input type="text" id="cliente_uf" name="cliente_uf">
                        </div>
            
                    </div>
                </div>
        
                <div>
                    <div class="form__label">Contato</div>
                    <div class="form__group" id="cliente_contato">
            
                        <div class="form__item">
                            <label for="cliente_nome_contato">Nome do contato:</label>
                            <input type="text" id="cliente_nome_contato" name="cliente_nome_contato">
                        </div>
            
                        <div class="form__item">
                            <label for="cliente_celular">Celular:</label>
                            <input type="text" id="cliente_celular" name="cliente_celular">
                        </div>
            
                        <div class="form__item">
                            <label for="cliente_telefone">Telefone:</label>
                            <input type="text" id="cliente_telefone" name="cliente_telefone">
                        </div>
            
                        <div class="form__item">
                            <label for="cliente_email">E-mail:</label>
                            <input type="text" id="cliente_email" name="cliente_email">
                        </div>
            
                    </div>
                </div>
        
                <div>
                    <div class="form__label">Dados Adicionais</div>
                    <div class="form__group" id="cliente_adicional">
            
                        <div class="form__item">
                            <label for="cliente_segmento">Segmento de Atuação:</label>
                            <input type="text" id="cliente_segmento" name="cliente_segmento">
                        </div>
            
                        <div class="form__item">
                            <label for="cliente_obs">Observações:</label>
                            <input type="text" id="cliente_obs" name="cliente_obs">
                        </div>
            
                    </div>
                </div>
                
            </div>

            <!-- Form Modal Control -->
            <div class="modal__control">
                <div class="control__left" id="control_save">
                    <button type="button" class="btn__save" id="btn_save">Salvar</button>
                    <button type="reset" class="btn__reset" id="btn_reset">Redefinir</button>
                    <button type="button" class="btn__remove" id="btn_remove">Excluir</button>
                </div>
                <div class="control__right">
                    <div onclick="hideModal(clientFields)" class="btn__cancel">Cancelar</div>
                </div>
            </div>

        </form> 

    </div>
</div>