# cvr - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **cvr**

## NamingSystem: cvr 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/NamingSystem/cvr | *Version*:3.7.0 |
| Active as of 2023-10-01 | *Computable Name*:DK Central Business Register (CVR) |

 
Det Centrale Virksomhedsregister (CVR) er statens stamregister for virksomhedsoplysninger. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "cvr",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://hl7.dk/fhir/core/NamingSystem/cvr"
  },
  {
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
    "valueString" : "3.7.0"
  }],
  "name" : "DK Central Business Register (CVR)",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2023-10-01",
  "publisher" : "HL7 Denmark",
  "contact" : [{
    "name" : "HL7 Denmark",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.hl7.dk"
    },
    {
      "system" : "email",
      "value" : "dk-affiliate@hl7.dk"
    }]
  }],
  "responsible" : "Erhvervsstyrelsen",
  "description" : "Det Centrale Virksomhedsregister (CVR) er statens stamregister for virksomhedsoplysninger.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "uniqueId" : [{
    "type" : "uri",
    "value" : "http://cvr.dk"
  },
  {
    "type" : "oid",
    "value" : "urn:oid:1.3.184"
  }]
}

```
