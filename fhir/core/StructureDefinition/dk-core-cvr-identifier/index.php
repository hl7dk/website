<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/StructureDefinition-dk-core-cvr-identifier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/StructureDefinition-dk-core-cvr-identifier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/StructureDefinition-dk-core-cvr-identifier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/StructureDefinition-dk-core-cvr-identifier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/StructureDefinition-dk-core-cvr-identifier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/StructureDefinition-dk-core-cvr-identifier.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.4.0/StructureDefinition-dk-core-cvr-identifier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
