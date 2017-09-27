// Listen for form submit
document.getElementById('chamada').addEventListener(resultFunction, saveBookmark);

// Save Bookmark
function saveBookmark(e){
  // Get form values
  var siteUrl = new Date();
  var dia = siteUrl.getDate();
  var mes = siteUrl.getMonth()+1;
  var ano = siteUrl.getFullYear();
  var hora = siteUrl.getHours();
  var minuto = siteUrl.getMinutes();
  var segundo = siteUrl.getSeconds();
  if(dia<10)
  {
    dia = '0' + dia;
  }

  if(mes<10)
  {
    mes = '0' + mes;
  }

  if(segundo<10)
  {
    segundo = '0' + segundo;
  }

  if(minuto<10)
  {
    minuto = '0' + minuto;
  }

  if(hora<10)
  {
    hora = '0' + hora;
  }

  siteUrl = ano + '-' + mes + '-' + dia + ' ' + hora + ':' + minuto + ':' + segundo

  var nome = '';

  var siteName = document.getElementById('aluno').value;
  var request = $.get('/saida/fetch/' + siteName);
  var nome = request.done(function(response){
      
    
    console.log(response);
      nome = response.nome;
      console.log(nome);


    var bookmark = {
      aluno_id: siteName,
      name: nome,
      created_at: siteUrl,
      updated_at: siteUrl,
      index: ""
    }  

  /*
    // Local Storage Test
    localStorage.setItem('test', 'Hello World');
    console.log(localStorage.getItem('test'));
    localStorage.removeItem('test');
    console.log(localStorage.getItem('test'));
  */

  // Test if bookmarks is null
  if(localStorage.getItem('bookmarks') === null){
    // Init array
    var bookmarks = [];
    // Add to array
    bookmarks.push(bookmark);
    // Set to localStorage
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
  } else {
    // Get bookmarks from localStorage
    var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
    // Add bookmark to array
    bookmarks.push(bookmark);
    // Re-set back to localStorage
    localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
  }

  // Re-fetch bookmarks
  fetchBookmarks();
  })

}

// Delete bookmark
function deleteBookmark(index){
  // Get bookmarks from localStorage
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
  // Loop throught bookmarks
  for(var i =0;i < bookmarks.length;i++){
      // Remove from array
      bookmarks.splice(i, 1);
  }

  $.ajax(
    {
      type: 'POST',
      url: '/api/saida/delete',
      data: {aluno_id:index},
      success: function(submit)
      {
        console.log(submit);
      },
    });
      // Re-set back to localStorage
  localStorage.setItem('bookmarks', JSON.stringify(bookmarks));


  // Re-fetch bookmarks
  fetchBookmarks();
}

// Fetch bookmarks
function fetchBookmarks(){
  // Get bookmarks from localStorage
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
  // Get output id
  var bookmarksResults = document.getElementById('bookmarksResults');
  
    var siteName = document.getElementById('aluno').value;

  // Build output
  bookmarksResults.innerHTML = '';
  for(var i = 0; i < bookmarks.length; i++){
    var id = bookmarks[i].aluno_id;
    var name = bookmarks[i].name;
    var url = bookmarks[i].created_at;
    var index = i;

    bookmarksResults.innerHTML += '<div class="well">'+
                                  '<h3>' + id + ' - ' + name+
                                  '<a onclick="deleteBookmark(\''+index+'\')" class="pull-right btn btn-danger" href="#">Ignorar Presença</a> ' +
                                  '</h3>'+
                                  '</div>';
                                  

  var objetoDados = document.getElementById('created_at');
	objetoDados.value = bookmarks;

  }
}

// Validate Form
function validateForm(siteName, siteUrl){
  if(!siteName || !siteUrl){
    alert('Please fill in the form');
    return false;
  }

  var expression = /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;
  var regex = new RegExp(expression);

  if(!siteUrl.match(regex)){
    alert('Please use a valid URL');
    return false;
  }

  return true;
}

function submitS()
{
var siteUrl = new Date();
  var dia = siteUrl.getDate();
  var mes = siteUrl.getMonth()+1;
  var ano = siteUrl.getFullYear();
  var hora = siteUrl.getHours();
  var minuto = siteUrl.getMinutes();
  var segundo = siteUrl.getSeconds();
  if(dia<10)
  {
    dia = '0' + dia;
  }

  if(mes<10)
  {
    mes = '0' + mes;
  }

  if(segundo<10)
  {
    segundo = '0' + segundo;
  }

  if(minuto<10)
  {
    minuto = '0' + minuto;
  }

  if(hora<10)
  {
    hora = '0' + hora;
  }

  siteUrl = ano + '-' + mes + '-' + dia + ' ' + hora + ':' + minuto + ':' + segundo

  var aluno = $("#aluno").val();

  $.ajax(
    {
      type: 'POST',
      url: '/api/saida/store',
      data: {aluno_id:aluno, created_at: siteUrl},
      success: function(submit)
      {
        console.log(submit);
      },
    });
}

function submitF()
{
    var siteUrl = new Date();
  var dia = siteUrl.getDate();
  var mes = siteUrl.getMonth()+1;
  var ano = siteUrl.getFullYear();
  var hora = siteUrl.getHours();
  var minuto = siteUrl.getMinutes();
  var segundo = siteUrl.getSeconds();
  if(dia<10)
  {
    dia = '0' + dia;
  }

  if(mes<10)
  {
    mes = '0' + mes;
  }

  if(segundo<10)
  {
    segundo = '0' + segundo;
  }

  if(minuto<10)
  {
    minuto = '0' + minuto;
  }

  if(hora<10)
  {
    hora = '0' + hora;
  }

  siteUrl = ano + '-' + mes + '-' + dia + ' ' + hora + ':' + minuto + ':' + segundo

  var aluno = $("#aluno").val();

  $.ajax(
    {
      type: 'POST',
      url: '/api/frequencia/store',
      data: {aluno_id:aluno, created_at: siteUrl},
      success: function(submit)
      {
        console.log(submit);
      },
    });
}