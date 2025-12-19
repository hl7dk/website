# DK Greenland Municipality Codes - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Greenland Municipality Codes**

## CodeSystem: DK Greenland Municipality Codes 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes-greenland | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:GreenlandMunicipalityCodes |

 
Greenland municipality codes as defined by https://www.iso.org/obp/ui/#iso:code:3166:GL and https://cpr.dk/cpr-systemet/kommunesammenlaegninger-opdeling/groenland-2018/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MunicipalityCodes](ValueSet-dk-core-MunicipalityCodes.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dk-core-municipality-codes-greenland",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes-greenland",
  "version" : "3.5.0",
  "name" : "GreenlandMunicipalityCodes",
  "title" : "DK Greenland Municipality Codes",
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
  "description" : "Greenland municipality codes as defined by https://www.iso.org/obp/ui/#iso:code:3166:GL and https://cpr.dk/cpr-systemet/kommunesammenlaegninger-opdeling/groenland-2018/",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "0955",
      "display" : "Kujalleq",
      "designation" : [
        {
          "language" : "da",
          "value" : "Kujalleq"
        }
      ]
    },
    {
      "code" : "0956",
      "display" : "Sermersooq",
      "designation" : [
        {
          "language" : "da",
          "value" : "Sermersooq"
        }
      ]
    },
    {
      "code" : "0957",
      "display" : "Qeqqata",
      "designation" : [
        {
          "language" : "da",
          "value" : "Qeqqata"
        }
      ]
    },
    {
      "code" : "0959",
      "display" : "Qeqertalik",
      "designation" : [
        {
          "language" : "da",
          "value" : "Qeqertalik"
        }
      ]
    },
    {
      "code" : "0960",
      "display" : "Avannaata",
      "designation" : [
        {
          "language" : "da",
          "value" : "Avannaata"
        }
      ]
    }
  ]
}

```
