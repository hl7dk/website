<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.5.0/Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
