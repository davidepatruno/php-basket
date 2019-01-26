$(document).ready(function(){
  $.ajax({
    url: 'http://localhost/php-basket/database.php',
    method : 'GET',
    success : function(data)
    {
      var players = JSON.parse(data);
      console.log(players);

      printData(players);


    },
    error : function(err){
      alert("si è verificato un errore");
    },
  });

  function printData(data){
    for (var i = 0; i < data.length; i++) {
      var stats = data[i];
      $('.container').append(`
        <ul>
          <li>
            `+ stats.codice +`
            <ul>
              <li> punti totali: `+ stats.puntitotali +`</li>
              <li> tiri totali: `+ stats.tiritotali +`</li>
              <li> % tiri da 3: `+ stats['% tiri da 3'] +`</li>
              <li> % tiri da 2: `+ stats['% tiri da 2'] +`</li>
              <li> rimbalzi: `+ stats.rimbalzi +`</li>
              <li> falli: `+ stats.falli +`</li>
            </ul>
          </li>
        </ul>
        `);
    };
  };
});
