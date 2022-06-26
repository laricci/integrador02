<div class="modal hide" id="modal_container">
    <div class="modal__body">

        <form id="form_fornecedor" action="#">

            <!-- Form Modal Header -->
            <div class="modal__header">
                <span id="modal_title">Adicionar Fornecedor</span>
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
                    <div class="form__group" id="fornecedor_identificacao">
            
                        <div class="form__item">
                            <label for="fornecedor_razao_social">Razão Social:</label>
                            <input type="text" id="fornecedor_razao_social" name="fornecedor_razao_social" >
                        </div>
                
                        <div class="form__item">
                            <label for="fornecedor_nome_fantasia">Nome Fantasia:</label>
                            <input type="text" id="fornecedor_nome_fantasia" name="fornecedor_nome_fantasia" >
                        </div>
                
                        <div class="form__item">
                            <label for="fornecedor_tipo_pessoa">Tipo de Pessoa:</label>
                            <input type="text" id="fornecedor_tipo_pessoa" name="fornecedor_tipo_pessoa" >
                        </div>
                
                        <div class="form__item">
                            <label for="fornecedor_inscricao">CNPJ / CPF:</label>
                            <input type="text" id="fornecedor_inscricao" name="fornecedor_inscricao" >
                        </div>
            
                    </div>
                </div>
        
                <div>
                    <div class="form__label">Endereço</div>
                    <div class="form__group" id="fornecedor_endereco">
            
                        <div class="form__item">
                            <label for="fornecedor_endereco">Endereço:</label>
                            <input type="text" id="fornecedor_endereco" name="fornecedor_endereco">
                        </div>
            
                        <div class="form__item">
                            <label for="fornecedor_cidade">Cidade:</label>
                            <input type="text" id="fornecedor_cidade" name="fornecedor_cidade">
                        </div>
            
                        <div class="form__item">
                            <label for="fornecedor_uf">UF:</label>
                            <input type="text" id="fornecedor_uf" name="fornecedor_uf">
                        </div>
            
                    </div>
                </div>
        
                <div>
                    <div class="form__label">Contato</div>
                    <div class="form__group" id="fornecedor_contato">
            
                        <div class="form__item">
                            <label for="fornecedor_nome_contato">Nome do contato:</label>
                            <input type="text" id="fornecedor_nome_contato" name="fornecedor_nome_contato">
                        </div>
            
                        <div class="form__item">
                            <label for="fornecedor_celular">Celular:</label>
                            <input type="text" id="fornecedor_celular" name="fornecedor_celular">
                        </div>
            
                        <div class="form__item">
                            <label for="fornecedor_telefone">Telefone:</label>
                            <input type="text" id="fornecedor_telefone" name="fornecedor_telefone">
                        </div>
            
                        <div class="form__item">
                            <label for="fornecedor_email">E-mail:</label>
                            <input type="text" id="fornecedor_email" name="fornecedor_email">
                        </div>
            
                    </div>
                </div>
        
                <div>
                    <div class="form__label">Dados Adicionais</div>
                    <div class="form__group" id="fornecedor_adicional">
            
                        <div class="form__item">
                            <label for="fornecedor_segmento">Segmento de Atuação:</label>
                            <input type="text" id="fornecedor_segmento" name="fornecedor_segmento">
                        </div>
            
                        <div class="form__item">
                            <label for="fornecedor_obs">Observações:</label>
                            <input type="text" id="fornecedor_obs" name="fornecedor_obs">
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