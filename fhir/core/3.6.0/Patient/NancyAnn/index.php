<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.6.0/Patient-NancyAnn.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.6.0/Patient-NancyAnn.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.6.0/Patient-NancyAnn.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.6.0/Patient-NancyAnn.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.6.0/Patient-NancyAnn.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.6.0/Patient-NancyAnn.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.6.0/Patient-NancyAnn.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
