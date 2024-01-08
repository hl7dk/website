<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.1.0/ValueSet-dk-core-NPUBasicObservation.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.1.0/ValueSet-dk-core-NPUBasicObservation.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.1.0/ValueSet-dk-core-NPUBasicObservation.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.1.0/ValueSet-dk-core-NPUBasicObservation.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.1.0/ValueSet-dk-core-NPUBasicObservation.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.1.0/ValueSet-dk-core-NPUBasicObservation.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.1.0/ValueSet-dk-core-NPUBasicObservation.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
