<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Sortable - Default functionality</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>
</head>
<body>

<ul id="sortable">
  <li><span></span>Item 1</li>
  <li><span></span>Item 2</li>
  <li><span></span>Item 3</li>
  <li><span></span>Item 4</li>
  <li><span></span>Item 5</li>
  <li><span></span>Item 6</li>
  <li><span></span>Item 7</li>
</ul>


</body>
</html>