<?
  $url = "http://169.254.170.2/v2/"; 
  $url .= urldecode($_GET['path']);
  print("metadata<p/>");
  print("$url<p/>");
  print(file_get_contents($url));
  

