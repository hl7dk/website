# DK v2 Contact Role Supplement - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK v2 Contact Role Supplement**

## CodeSystem: DK v2 Contact Role Supplement 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/v2-0131-supplement | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:v2-0131DkSupplement |

 
CodeSystem supplement with danish translations for Contact Role 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v2-0131-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/v2-0131-supplement",
  "version" : "3.5.0",
  "name" : "v2-0131DkSupplement",
  "title" : "DK v2 Contact Role Supplement",
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
  "description" : "CodeSystem supplement with danish translations for Contact Role",
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
  "content" : "supplement",
  "supplements" : "http://terminology.hl7.org/CodeSystem/v2-0131",
  "concept" : [
    {
      "code" : "BP",
      "designation" : [
        {
          "language" : "da",
          "value" : "Faktureringskontaktperson"
        }
      ]
    },
    {
      "code" : "C",
      "designation" : [
        {
          "language" : "da",
          "value" : "Nødkontakt"
        }
      ]
    },
    {
      "code" : "CP",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kontaktperson"
        }
      ]
    },
    {
      "code" : "E",
      "designation" : [
        {
          "language" : "da",
          "value" : "Arbejdsgiver"
        }
      ]
    },
    {
      "code" : "EP",
      "designation" : [
        {
          "language" : "da",
          "value" : "Akut kontaktperson"
        }
      ]
    },
    {
      "code" : "F",
      "designation" : [
        {
          "language" : "da",
          "value" : "Føderalt agentur"
        }
      ]
    },
    {
      "code" : "I",
      "designation" : [
        {
          "language" : "da",
          "value" : "Forsikringsselskab"
        }
      ]
    },
    {
      "code" : "N",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pårørende"
        }
      ]
    },
    {
      "code" : "O",
      "designation" : [
        {
          "language" : "da",
          "value" : "Andet"
        }
      ]
    },
    {
      "code" : "PR",
      "designation" : [
        {
          "language" : "da",
          "value" : "Person, der forbereder henvisning"
        }
      ]
    },
    {
      "code" : "S",
      "designation" : [
        {
          "language" : "da",
          "value" : "Statsagentur"
        }
      ]
    },
    {
      "code" : "U",
      "designation" : [
        {
          "language" : "da",
          "value" : "Ukendt"
        }
      ]
    }
  ]
}

```
