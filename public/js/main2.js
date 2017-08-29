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
  var request = $.get('/saida/fetch/' + siteName)
  var nome = request.done(function(response){
      
    
    console.log(response);
      nome = response.nome;
      console.log(nome);


    var bookmark = {
      name: nome,
      url: siteUrl
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

  // Clear form
  document.getElementById('chamada').reset();

  // Re-fetch bookmarks
  fetchBookmarks();
  })

}

// Delete bookmark
function deleteBookmark(url){
  // Get bookmarks from localStorage
  var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
  // Loop throught bookmarks
  for(var i =0;i < bookmarks.length;i++){
    if(bookmarks[i].url == url){
      // Remove from array
      bookmarks.splice(i, 1);
    }
  }
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

  // Build output
  bookmarksResults.innerHTML = '';
  for(var i = 0; i < bookmarks.length; i++){
    var name = bookmarks[i].name;
    var url = bookmarks[i].url;

    bookmarksResults.innerHTML += '<div class="well">'+
                                  '<h3>'+name+
                                  ' <a class="btn btn-default" target="_blank" href="'+url+'">Visit</a> ' +
                                  ' <a onclick="deleteBookmark(\''+url+'\')" class="btn btn-danger" href="#">Delete</a> ' +
                                  '</h3>'+
                                  '</div>'+
                                  '<input type="submit" name="submit" class="btn btn-block btn-default">';

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
