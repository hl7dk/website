# DK Publication Status - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Publication Status**

## CodeSystem: DK Publication Status 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/publication-status-dk-supplement | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:PublicationStatus |

 
The lifecycle status of a Value Set or Concept Map. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "publication-status-dk-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/publication-status-dk-supplement",
  "version" : "3.5.0",
  "name" : "PublicationStatus",
  "title" : "DK Publication Status",
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
  "description" : "The lifecycle status of a Value Set or Concept Map.",
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
  "supplements" : "http://hl7.org/fhir/publication-status",
  "concept" : [
    {
      "code" : "draft",
      "designation" : [
        {
          "language" : "ru",
          "value" : "черновик"
        },
        {
          "language" : "nl",
          "value" : "ontwerp"
        },
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Udkast"
        }
      ]
    },
    {
      "code" : "active",
      "designation" : [
        {
          "language" : "ru",
          "value" : "активный"
        },
        {
          "language" : "nl",
          "value" : "actief"
        },
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Aktiv"
        }
      ]
    },
    {
      "code" : "retired",
      "designation" : [
        {
          "language" : "ru",
          "value" : "удалён"
        },
        {
          "language" : "nl",
          "value" : "verouderd"
        },
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Udgået"
        }
      ]
    },
    {
      "code" : "unknown",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "900000000000013009"
          },
          "value" : "Ukendt"
        }
      ]
    }
  ]
}

```
