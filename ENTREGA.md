<h1> TCC QR Security </h1>

<strong>Grupo:</strong> <br />
<ul>
  <li>Caio Gianotto de Melo</li>
  <li>Guilherme Oliveira Lombardi</li>
  <li>Lucas Eduardo Manera</li>
  <li>Lucas Sartorelli Leinatti</li>
  <li>Matheus Luiz de Oliveira</li>
  <li>Maxwell Arruda</li>
  <li>Wilgner Ferreira Delfino</li>
</ul>

<strong> Objetivo Principal da Sprint: </strong> <br />
<ul>
  <li>Implementar AJAX no sistema</li> 
  <li>Finalizar Design</li>
  <li>Melhorar Informações Usuário Normal</li>
</ul>

<strong> Objetivos Intrínsecos: </strong> <br />
<ul>
<li>AJAX páginas de Entrada e Saída, (Matheus e Maxwell) </li>
<li>CRUD AJAX Alunos, (Matheus e Lucas Sartorelli) </li>
<li>Fix das páginas de login (Lucas Manera e Wilgner)</li>
<li>Montar página index [Usuário não-logado] (Lucas Manera e Caio)</li>
<li>Adicionar informações à pagina index [Usuário logado] (Matheus e Maxwell) </li>
</ul>

<h1>Para teste, proceder da seguinte maneira:</h1>

<ul>
  <li>Colocar o comando composer dump-autoload</li>
  <li>Colocar o comando composer install,se der erro, rodar composer update</li>
  <li>Na hora da migration, rodar o comando php artisan migrate --seed</li>
  <li><h3>Administrador:</h3></li>
  <li>Login: admin@admin.com</li>
  <li>Senha: 123123</li>
  <li><h3>Usuário:</h3></li>
  <li>Login: binho@binho.com</li>
  <li>Senha: 123123</li>
  <li><h3>Passos:</h3></li>
  <li>Entre como admin e cadastre um aluno primeiramente;</li>
  <li>No menu checar entrada, dê presença a ele;</li>
  <li>Todas as salas já foram cadastradas;</li>
  <li>Se quiser cadastrar mais salas, utilize o phpmyAdmin.</li>
  <li><h3>Observações:</h3></li>
  <li>Não faremos cadastro de salas pois um json já foi preparado para popular o banco automaticamente no momento do migrate;</li>
  <li>Caso o botão Login Admin não estiver funcionando, apague no navegador os cookies gerados pelo laravel, e o site voltará ao normal (token e session);</li>
  <li>Para testes, necessário WebCam e um código QR que remete ao RM do aluno cadastrado;</li>
  <li>Há um bug que foi consertado porém um merge desfez a correção, quando um usuário é cadastrado pelo administrador, a sessão se fecha, deslogando o admin.</li>
</ul>
