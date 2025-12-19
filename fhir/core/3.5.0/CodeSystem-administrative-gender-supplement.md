# DK Administrative Gender Supplement - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Administrative Gender Supplement**

## CodeSystem: DK Administrative Gender Supplement 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/administrative-gender-supplement | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:AdministrativeGenderDkSupplement |

 
CodeSystem supplement with danish translations for administrative gender 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "administrative-gender-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/administrative-gender-supplement",
  "version" : "3.5.0",
  "name" : "AdministrativeGenderDkSupplement",
  "title" : "DK Administrative Gender Supplement",
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
  "description" : "CodeSystem supplement with danish translations for administrative gender",
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
  "supplements" : "http://hl7.org/fhir/administrative-gender",
  "concept" : [
    {
      "code" : "male",
      "designation" : [
        {
          "language" : "da",
          "value" : "Mand"
        }
      ]
    },
    {
      "code" : "female",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kvinde"
        }
      ]
    },
    {
      "code" : "other",
      "designation" : [
        {
          "language" : "da",
          "value" : "Andet"
        }
      ]
    },
    {
      "code" : "unknown",
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
