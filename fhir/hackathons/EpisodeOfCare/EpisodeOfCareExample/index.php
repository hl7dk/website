<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/EpisodeOfCare-EpisodeOfCareExample.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/EpisodeOfCare-EpisodeOfCareExample.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/EpisodeOfCare-EpisodeOfCareExample.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/EpisodeOfCare-EpisodeOfCareExample.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/EpisodeOfCare-EpisodeOfCareExample.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/EpisodeOfCare-EpisodeOfCareExample.html');
else 
  Redirect('http://hl7.dk/fhir/hackathons/1.0.0/EpisodeOfCare-EpisodeOfCareExample.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
