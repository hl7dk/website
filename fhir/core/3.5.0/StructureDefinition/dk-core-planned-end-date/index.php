<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-dk-core-planned-end-date.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-dk-core-planned-end-date.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-dk-core-planned-end-date.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-dk-core-planned-end-date.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-dk-core-planned-end-date.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-dk-core-planned-end-date.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-dk-core-planned-end-date.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
