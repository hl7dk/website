<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/smart/1.0.0/CapabilityStatement-example-ipa-server.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/smart/1.0.0/CapabilityStatement-example-ipa-server.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/smart/1.0.0/CapabilityStatement-example-ipa-server.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/smart/1.0.0/CapabilityStatement-example-ipa-server.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/smart/1.0.0/CapabilityStatement-example-ipa-server.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/smart/1.0.0/CapabilityStatement-example-ipa-server.html');
else 
  Redirect('http://hl7.dk/fhir/smart/1.0.0/CapabilityStatement-example-ipa-server.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
