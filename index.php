<!DOCTYPE html>
<html>
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.1.1/css/foundation.min.css" media="all" rel="stylesheet" type="text/css" />
  <link href="style.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
  <section>
    <div class="row">
      <div class="large-12 columns text-center">
        <h1>Hey there! :)</h1><br>
        <h4>Think about how you want to spend your time. How about you</h4>
        <ul class="span4">
          <li>do some coding</li>
          <li>read a book</li>
          <li>play an instrument</li>
          <li>talk to people</li>
          <li>go outside</li>
          <li>watch a good movie</li>
        </ul>
         <h6>This inspirational quote may help:</h6>
      </div>
    </div>
    <div class="row">
      <blockquote id="quote-container" class="large-6 hide">
        <p>
          <p id="quote"></p>
          <cite id="author"></cite>
        </p>
      </blockquote>
    </div>
  </section>
</body>
<footer>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.js"></script>
  <script type="text/javascript" src="script.js"></script>
<?php
  $url = 'http://www.changemakrs.com/api/v1/quotes?page_number=0&page_size=300&collection_id=52f682c5690a3c31920001c5&preset=loved_quotes&cb=139189304';
  $data = file_get_contents($url);
?>
  <script type="text/javascript">
  var data = <?= $data ?>;
  udpateWithData(data);
  </script>
</footer>
</html>
