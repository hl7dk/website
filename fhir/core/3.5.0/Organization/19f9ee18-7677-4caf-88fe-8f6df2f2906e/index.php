<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
