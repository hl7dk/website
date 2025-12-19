<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-ipa-dk-core-condition.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-ipa-dk-core-condition.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-ipa-dk-core-condition.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-ipa-dk-core-condition.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-ipa-dk-core-condition.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-ipa-dk-core-condition.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.5.0/StructureDefinition-ipa-dk-core-condition.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
