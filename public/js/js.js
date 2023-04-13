$(document).on('click', '.add-to-cart', function (e) {
    var tekst = $('<div id="message-success"><p>Привет! у тебя новый отклик!)</p></div>'),
        linc = $('#jGrowl');
    linc.html(tekst).fadeIn();
    setTimeout(function() {linc.fadeOut();}, 4000);
  });

  $(document).on('click', '.add-to-cart1', function (e) {
    var tekst = $('<div id="message-success"><p>Заказ создан!)</p></div>'),
        linc = $('#jGrowl');
    linc.html(tekst).fadeIn();
    setTimeout(function() {linc.fadeOut();}, 4000);
  });
