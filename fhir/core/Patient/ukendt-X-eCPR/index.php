<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Patient-ukendt-X-eCPR.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Patient-ukendt-X-eCPR.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Patient-ukendt-X-eCPR.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Patient-ukendt-X-eCPR.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Patient-ukendt-X-eCPR.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Patient-ukendt-X-eCPR.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.5.0/Patient-ukendt-X-eCPR.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
