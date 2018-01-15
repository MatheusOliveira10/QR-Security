<p align="center"><h1>QR Security</h1><img src="https://github.com/MLuiz1992/QR-Security/blob/master/public/images/LogoDefinitivoQR.png?raw=true"></p>

## Sobre o Projeto

O QR Security é um projeto de conclusão de curso (TCC), feito durante o ano de 2017 na ETEC Pedro Ferreira Alves no curso de Ensino Médio Integrado a Informática para Internet. Trata-se de um sistema para controle de fluxo de alunos na escola por meio de códigos QR (Quick Response Code), que estarão nas carteirinhas dos alunos possibilitando também que seus responsáveis tenham ciência da frequência do aluno. O objetivo é propiciar melhor relação entre pais e escola, além de melhorar os meios de combate a evasão escolar.

## Para Testar o sistema (Localmente)
<h3>Softwares Necessários</h3>
<ul>
  <li>Composer</li>
  <li>XAMPP/WAMP</li>
  <li>Laravel</li>
</ul>

<h3>Passos:</h3>
<ul>
  <li>Na raiz do projeto há um arquivo chamado .env, entre nele e configure o banco de dados, com o nome do banco vazio criado, o nome de usuário e senha para acesso aos BDs</li>
  <li>Abra o terminal de comando(cmd)</li>
  <li>Entre na pasta do projeto</li>
  <li>Rodar os seguintes comandos</li>
  <li>composer install (em caso de erro, rode o comando composer update)</li>
  <li>php artisan key:generate</li>
  <li>php artisan migrate --seed</li>
  <li>Um usuário administrador e um usuário normal já estão cadastrados previamente no sistema</li>
  <li><h3>Administrador</h3></li>
  <li>Login: admin@admin.com</li>
  <li>Senha: 123123</li>
  <li><h3>Usuário</h3></li>
  <li>Login: pai@pai.com</li>
  <li>Senha: 123123</li>
  <li>Entre como administrador e cadastre um aluno primeiramente;</li>
  <li>Na página checar entrada, dê presença a ele;</li>
  <li>Todas as salas já foram cadastradas;</li>
  <li>Se quiser cadastrar mais salas, utilize o phpmyAdmin.(localhost/phpmyadmin)</li>
  <li><h3>Observações:</h3></li>
  <li>Em caso de problemas com o login, apague no navegador os cookies gerados pelo laravel(token e session), e o site voltará ao normal;</li>
  <li>Para testes, necessário WebCam e um código QR que remete ao RM do aluno cadastrado;</li>
  <li>Para obter o QR Code acesse http://br.qr-code-generator.com/ e crie um QR do tipo texto com o valor remetente ao RM do aluno cadastrado.</li>
</ul>
