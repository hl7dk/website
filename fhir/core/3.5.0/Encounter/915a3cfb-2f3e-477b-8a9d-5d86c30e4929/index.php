<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.5.0/Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
