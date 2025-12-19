# DK Regional Subdivision Codes - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Regional Subdivision Codes**

## CodeSystem: DK Regional Subdivision Codes 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/dk-core-regional-subdivision-codes | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DKCoreRegionalSubdivisionCodes |

 
Subdivision codes (Regional codes) used in Denmark as found on https://www.iso.org/obp/ui/#iso:code:3166:DK 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RegionalSubdivisionCodes](ValueSet-dk-core-RegionalSubDivisionCodes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dk-core-regional-subdivision-codes",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-regional-subdivision-codes",
  "version" : "3.5.0",
  "name" : "DKCoreRegionalSubdivisionCodes",
  "title" : "DK Regional Subdivision Codes",
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
  "description" : "Subdivision codes (Regional codes) used in Denmark as found on https://www.iso.org/obp/ui/#iso:code:3166:DK",
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
  "count" : 5,
  "concept" : [
    {
      "code" : "DK-84",
      "display" : "Capital Region of Denmark",
      "designation" : [
        {
          "language" : "da",
          "value" : "Hovedstaden"
        }
      ]
    },
    {
      "code" : "DK-82",
      "display" : "Central Denmark Region",
      "designation" : [
        {
          "language" : "da",
          "value" : "Midtjylland"
        }
      ]
    },
    {
      "code" : "DK-81",
      "display" : "Nord Denmark Region",
      "designation" : [
        {
          "language" : "da",
          "value" : "Nordjylland"
        }
      ]
    },
    {
      "code" : "DK-85",
      "display" : "Region Zealand",
      "designation" : [
        {
          "language" : "da",
          "value" : "Sjælland"
        }
      ]
    },
    {
      "code" : "DK-83",
      "display" : "Region of Southern Denmark",
      "designation" : [
        {
          "language" : "da",
          "value" : "Syddanmark"
        }
      ]
    }
  ]
}

```
