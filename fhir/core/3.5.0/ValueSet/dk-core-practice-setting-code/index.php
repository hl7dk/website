<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/ValueSet-dk-core-practice-setting-code.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/ValueSet-dk-core-practice-setting-code.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/ValueSet-dk-core-practice-setting-code.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/ValueSet-dk-core-practice-setting-code.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/ValueSet-dk-core-practice-setting-code.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/ValueSet-dk-core-practice-setting-code.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.5.0/ValueSet-dk-core-practice-setting-code.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
