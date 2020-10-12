<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="stylesheet" href="style.css">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<title>Test</title>
</head>
<body>
	<div id="jam"></div>
  <a href="login.php">Login</a>
	<button onclick="statusLog()">Hello</button>
  <div id="status"></div>
	<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
            </div>
        </div>
    </footer>
    <script>
		setInterval(
		   function(){
		   $.get("jam_realtime.php", function(Jam){
		            var xJam = Jam;
		            var x = document.getElementById('jam');
		                  x.innerHTML = xJam;
		      });
		   },1000);
		</script>
    <script>
      function statusLog($name, $time){
          document.getElementById('status').innerHTML = "Hai $name login pada $time";
        }
    </script>
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>
    
    
