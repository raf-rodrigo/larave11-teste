### Sistema de Cadastro de Sócio

Esta rodando em docker - o Docker precisa ser instalado no Sistema Operacional

#### dar um alias para o comando ./vendor/bin/sail
1. passo: pelo terminal acessar sistema Linux acessa o arquivo .bashrc -> nano ~/.bashrc - colocar dentro do arquivo a seguinte instrução __alias sail='bash ./vendor/bin/sail'__ - salvar e sair.<br>

2. passo: subir o container como o comando sail up -d.<br>
   Obs.: subindo os container o comando php artisan serve já foi realizado e a página é **localhost**

3. passo: migrar o bando de dados - sail php artisan migrate

4. passo: rodar o comando sail npm run dev.
Obs.: todos os comando de ser rodados com: __sail {código}__
