<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/StructureDefinition-TelemedicinePatient.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/StructureDefinition-TelemedicinePatient.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/StructureDefinition-TelemedicinePatient.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/StructureDefinition-TelemedicinePatient.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/StructureDefinition-TelemedicinePatient.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/StructureDefinition-TelemedicinePatient.html');
else 
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/StructureDefinition-TelemedicinePatient.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
