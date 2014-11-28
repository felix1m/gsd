'use strict';


var url = 'http://www.changemakrs.com/api/v1/quotes?page_number=1&page_size=5&collection_id=52f682c5690a3c31920001c5&preset=loved_quotes&cb=139189304';
var quote;

function randomPick(array) {
  return array[Math.floor(Math.random() * array.length)];
}

function executeWhenReady(workToDo, data) {
  var tid = setInterval( function () {
    if ( document.readyState !== 'complete' ) {return}
    clearInterval( tid );
    workToDo(data);
  }, 100 );
}

function randomQuoteFromJSON (data) {
  var allQuotes = data.items;
  var randomElement = randomPick(allQuotes);

  return {
    'author': randomElement.actor.full_name,
    'text': randomElement.quote.text
  };
}

function updateDomWithQuote (quote) {
  $('#quote').text(quote.text);
  $('#author').text(quote.author);
  $('#quote-container').fadeIn(500);
}

var udpateWithData = function( data ) {
  var quote = randomQuoteFromJSON(data);
  executeWhenReady(updateDomWithQuote, quote);
};
