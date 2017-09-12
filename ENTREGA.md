<h1> TCC QR Security </h1>

<strong> Objetivo Principal da Sprint: </strong> <br />
Acertar a entrada de alunos no sistema
Fazer a dashboard do admin

<strong> Objetivos Intrínsecos: </strong> <br />
<ul>
<li>Modelar o banco de dados da entrada, (Matheus e Maxwell) </li>
<li>Adicionar o plugin WebCodeCamJS, (Matheus e Maxwell) </li>
<li>Autenticação (Matheus) </li>
<li>Montar a página HTML e Bootstrap (Lucas Manera, Caio e Wilgner)</li>
<li>"Gerenciamento" (Guilherme) </li>
<li>Tradução, Menus e NavBars (Lucas Sartorelli)</li>
<li>Consulta de Dados do Admin e do Usuário Comum (Matheus, Maxwell e Lucas Sartorelli)</li>
</ul>

<h1>Para teste, proceder da seguinte maneira:</h1>

<ul>
  <li>Na hora da migration, rodar o comando php artisan serve --seed</li>
  <li><h3>Administrador:</h3></li>
  <li>Login: admin@admin.com</li>
  <li>Senha: 123123</li>
  <li><h3>Usuário:</h3></li>
  <li>Login: binho@binho.com</li>
  <li>Senha: 123123</li>
  <li><h3>Passos:</h3></li>
  <li>Entre como admin e cadastre um aluno primeiramente</li>
  <li>No menu checar entrada, dê presença a ele</li>
  <li>Uma sala já foi cadastrada: 3º EMIA</li>
  <li>Se quiser cadastrar mais salas, utilize o phpmyAdmin</li>
  <li>Não faremos cadastro de salas pois um json já está sendo preparado para popular o banco automaticamente no momento do migrate</li>
  <li>Caso o botão Login Admin não estiver funcionando, apague no navegador os cookies gerados pelo laravel, e o site voltará ao normal (token e session)</li>
  <li><h1>P.S. Sistema de saída de alunos em desenvolvimento, porém quando pronto vai ser idêntico ao de entrada</li>
</ul>
