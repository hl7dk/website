# DK Decentralised eCPR Systems - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Decentralised eCPR Systems**

## CodeSystem: DK Decentralised eCPR Systems 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/dk-core-d-ecpr-codes | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreDeCPRCodes |

 
DK 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DkCoreDeCPRValueSet](ValueSet-DkCoreDeCPRValueSet.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dk-core-d-ecpr-codes",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-d-ecpr-codes",
  "version" : "3.5.0",
  "name" : "DkCoreDeCPRCodes",
  "title" : "DK Decentralised eCPR Systems",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-19T17:20:16+01:00",
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
  "description" : "DK ",
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
  "count" : 6,
  "concept" : [
    {
      "code" : "urn:oid:1.2.208.176.1.6.1.3",
      "display" : "D-eCPR"
    },
    {
      "code" : "urn:oid:1.2.208.176.1.6.1.3.177",
      "display" : "D-eCPR fra Region Sjælland"
    },
    {
      "code" : "urn:oid:1.2.208.176.1.6.1.3.179",
      "display" : "D-eCPR fra Region Nordjylland"
    },
    {
      "code" : "urn:oid:1.2.208.176.1.6.1.3.181",
      "display" : "D-eCPR fra Region Midtjylland"
    },
    {
      "code" : "urn:oid:1.2.208.176.1.6.1.3.183",
      "display" : "D-eCPR fra Region Syddanmark"
    },
    {
      "code" : "urn:oid:1.2.208.176.1.6.1.3.187",
      "display" : "D-eCPR fra Region Hovedstaden"
    }
  ]
}

```
