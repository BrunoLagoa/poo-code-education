# poo-code-education
Curso POO Code Education

POO Orientação a Objeto

# Fase 2 do projeto
<b>Cadastro de clientes</b>

- Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endereço, etc.

- Crie um array de objetos de clientes, com 10 clientes dentro.

- Crie uma página e faça a listagem geral dos clientes. Quando clicar sobre o cliente, você deverá mostrar os dados específicos do cliente selecionado.

- Nessa listagem você também deverá ter a opção de ordenar os clientes pelo seu índice de forma ascendente e descendente.

<b>Obs:</b>
<i>Por favor, observe os pontos da segunda fase do projeto:</i>

- Agora que você já tem seu cadastro de cliente, você deverá também aceitar clientes Pessoa Jurídica em sua listagem.

- Não se esqueça de trabalhar com os modificadores de acesso e os getters e setters.

- No momento da listagem dos clientes, você deve indicar em uma das colunas se o cliente é pessoa física ou jurídica.

- Ambos os tipos devem implementar uma interface onde seja possível classificar o grau de importância do cliente para a empresa (ex: cliente 1,2,3,5 estrelas).

- Você também terá a opção de criar clientes que utilizão endereço específico de cobrança, nesse caso, crie uma interface para que esses tipos de clientes possam implementar.
<hr>

# Fase 3 do projeto
<b>Tipos de clientes</b>

 - Agora que você já tem seu cadastro de cliente, você deverá também aceitar clientes Pessoa Jurídica em sua listagem.

 - Não se esqueça de trabalhar com os modificadores de acesso e os getters e setters.

 - No momento da listagem dos clientes, você deve indicar em uma das colunas se o cliente é pessoa física ou jurídica.

 - Ambos os tipos devem implementar uma interface onde seja possível classificar o grau de importância do cliente para a empresa (ex: cliente 1,2,3,5 estrelas).

 - Você também terá a opção de criar clientes que utilizão endereço específico de cobrança, nesse caso, crie uma interface para que esses tipos de clientes possam implementar.

 <b>Obs:</b>
 <i>Por favor, observe os pontos da segunda fase do projeto:</i>

 - O exercício pede para implementar uma interface para Grau de Importância e outra para Endereço de Cobrança.

 - Quando falamos em interfaces, é recomendado ter diversas interfaces com um ou dois métodos ao invés de uma interface com diversos métodos. Isso porque uma classe pode implementar mais de uma interface, por isso separamos por responsabilidade, uma interface para isso, outra para aquilo, etc.

  - Aproveitando a deixa, seria interessante que a classe abstrata implementasse essas interfaces e que as classes de PF e PJ implementassem interfaces para PF e PJ, respectivamente, ex.:

```PHP
 inteface PFInterface
 {
       public function setCPF($cpf);
       public function getCPF();
 }

 interface PJInterface
 {
       public function setCNPJ($cnpj);
       public function getCNPJ();
 }
 ```
 <hr>

 # Fase 4 do projeto
 <b>Refatoração</b>

  - Refatore as classes utilizadas de seu projeto para que as mesmas trabalhem com namespaces.

  - Verifique se dentro de seu projeto há a necessidade de se trabalhar com classes abstratas.

  - Não se esqueça de criar a estrutura de diretórios, nome de arquivos e classes seguindo a PSR-0 (www.php-fig.org).

  - Faça a implementação do autoload para que você não precise mais trabalhar com require/include para a chamada de suas classes.

  - Deixe todo o fonte de sua aplicação no mesmo nível que o DocumentRoot do servidor web. Deixe a pasta que está visível para web (seu DocumentRoot) apenas com o index.php e os demais assets(css, javascript e imagens).
  
  ------------------------------------------------------------------------------------------
  [Bruno Castro](http://www.bhzautomacao.com.br) - Web design e development