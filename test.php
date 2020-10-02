<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Alert</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <!-- scripts -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/sweetalert.js"></script>
</head>
<body>

<h2>Original Examples</h2>

      <h4>Basic example</h4>
      <div class="row">
        <div class="col-sm-2 text-center">
          <p><button class="btn btn-primary sweet-1" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Try It</button></p>
        </div>
        <div class="col-sm-10">
          <pre class="code">swal("Here's a message!")</pre>
        </div>
      </div>

      <h4>A title with a text under</h4>
      <div class="row">
        <div class="col-sm-2 text-center">
          <p><button class="btn btn-primary sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Try It</button></p>
        </div>
        <div class="col-sm-10">
          <pre>swal("Here's a message!", "It's pretty, isn't it?")</pre>
        </div>
      </div>

      <h4>A success message!</h4>
      <div class="row">
        <div class="col-sm-2 text-center">
          <p><button class="btn btn-primary sweet-3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Try It</button></p>
        </div>
        <div class="col-sm-10">
          <pre>swal("Good job!", "You clicked the button!", "success")</pre>
        </div>
      </div>

      <script>
         document.querySelector('.sweet-1').onclick = function(){
             swal("Here's a message!");
         }

         document.querySelector('.sweet-2').onclick = function(){
             swal("Here's is a message", "It's pretty, isn't it?");
         }

         document.querySelector('.sweet-3').onclick = function(){
             swal("Good job!", "You clicked the button!", "success");
         }
      </script>

</body>
</html>