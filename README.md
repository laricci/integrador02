# integrador02
Sistema de CRM Básico - Projeto Integrador II Univesp

Referências:
 - 13/04/2022 https://levelup.gitconnected.com/how-to-set-up-and-use-vue-in-your-laravel-8-app-2dd0f174e1f8
 - 13/04/2022 https://www.twilio.com/blog/create-restful-crud-api-php-using-laravel-google-firebase
 - 13/04/2022 https://www.w3schools.com/js/js_validation.asp
 - 13/04/2022 https://stackoverflow.com/questions/69631437/error-cannot-find-module-webpack-lib-rules-descriptiondatamatcherruleplugin-r
 - 13/04/2022 https://stackoverflow.com/questions/29822686/curl-error-60-ssl-certificate-unable-to-get-local-issuer-certificate
 
PHP:
 - Ativar extension=sodium
 - Atualizar curl.cainfo e openssl.cafile

Firebase:
 - Gere uma nova chave em Seu Projeto -> Configurações do Projeto -> Contas de Serviço
 - Renomeie o arquivo .json gerado para credentials.json e cole em 'storage\app\firebase'
 - Em .env, altere <FIREBASE_URL> para a URL de sua Realtime Database (localizada na aba Dados)
 - php artisan vendor:publish --provider="Kreait\Laravel\Firebase\ServiceProvider" --tag=config