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