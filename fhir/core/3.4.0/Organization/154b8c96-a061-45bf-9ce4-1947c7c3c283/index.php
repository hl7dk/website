<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/core/3.4.0/Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.html');
else 
  Redirect('http://hl7.dk/fhir/core/3.4.0/Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
