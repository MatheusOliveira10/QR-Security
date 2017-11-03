function marcarlida(){
{
  var request = $.get('/marcarlida');
  request.done(function(response){
     $('.badge').fadeOut();
  });
}
}
