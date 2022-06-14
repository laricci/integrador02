<template>
    <form @submit.prevent="submit">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" v-model="fields.nome" />
            <div v-if="errors && errors.nome" class="text-danger">{{ errors.nome[0] }}</div>
        </div>

        <div class="form-group">
            <label for="inscricao">CPF/CNPJ</label>
            <input type="text" class="form-control" name="inscricao" id="inscricao" v-model="fields.inscricao" />
            <div v-if="errors && errors.inscricao" class="text-danger">{{ errors.inscricao[0] }}</div>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" v-model="fields.email" />
            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
        </div>

        
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone" v-model="fields.telefone" />
            <div v-if="errors && errors.telefone" class="text-danger">{{ errors.telefone[0] }}</div>
        </div>

        
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" v-model="fields.endereco" />
            <div v-if="errors && errors.endereco" class="text-danger">{{ errors.endereco[0] }}</div>
        </div>

        
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade" v-model="fields.cidade" />
            <div v-if="errors && errors.cidade" class="text-danger">{{ errors.cidade[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" v-model="fields.estado" />
            <div v-if="errors && errors.estado" class="text-danger">{{ errors.estado[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" class="form-control" name="pais" id="pais" v-model="fields.pais" />
            <div v-if="errors && errors.pais" class="text-danger">{{ errors.pais[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" v-model="fields.cep" />
            <div v-if="errors && errors.cep" class="text-danger">{{ errors.cep[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="obs">Observação</label>
            <textarea class="form-control" id="obs" name="obs" rows="5" v-model="fields.obs"></textarea>
            <div v-if="errors && errors.obs" class="text-danger">{{ errors.obs[0] }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>

        <div v-if="success" class="alert alert-success mt-3">
            Message sent!
        </div>

        <div>
          {{ teste }}
        </div>
    </form>
</template>

<script>
export default {
  data() {
      return {
        fields: {},
        errors: {},
        success: false,
        loaded: true,
        action: '',
        teste: {},
      }
    },
  
    methods: {
  
      submit() {
        if (this.loaded) {
          this.loaded = false;
          this.success = false;
          this.errors = {};
          axios.post(this.action, this.fields).then(response => {
            this.fields = {}; //Clear input fields.
            this.loaded = true;
            this.success = true;
            //this.teste  = response.config.data;
            this.teste  = response;
          }).catch(error => {
            this.loaded = true;
            if (error.response.status === 422) {
              this.errors = error.response.data.errors || {};
              this.teste  = error.response || {};
            }
          });
        }
      },
    },
}

</script>