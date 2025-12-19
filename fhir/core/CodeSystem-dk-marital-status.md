# DK Marital Statuses - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Marital Statuses**

## CodeSystem: DK Marital Statuses 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/dk-marital-status | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkMaritalStatus |

 
DK marital statuses 

 This Code system is referenced in the content logical definition of the following value sets: 

* 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dk-marital-status",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/dk-marital-status",
  "version" : "3.5.0",
  "name" : "DkMaritalStatus",
  "title" : "DK Marital Statuses",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-19T17:27:08+01:00",
  "publisher" : "HL7 Denmark",
  "contact" : [
    {
      "name" : "HL7 Denmark",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.hl7.dk"
        },
        {
          "system" : "email",
          "value" : "dk-affiliate@hl7.dk"
        }
      ]
    }
  ],
  "description" : "DK marital statuses",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "P",
      "display" : "Registered partnership",
      "designation" : [
        {
          "language" : "da",
          "value" : "Registreret partnerskab"
        }
      ]
    },
    {
      "code" : "O",
      "display" : "Dissolved partnership",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ophævet partnerskab"
        }
      ]
    }
  ]
}

```
