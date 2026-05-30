# DK Address Use Supplement - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Address Use Supplement**

## CodeSystem: DK Address Use Supplement 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/address-use-dk-supplement | *Version*:3.7.0 |
| Active as of 2026-05-30 | *Computable Name*:AddressUse |

 
The use of an address 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "address-use-dk-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/address-use-dk-supplement",
  "version" : "3.7.0",
  "name" : "AddressUse",
  "title" : "DK Address Use Supplement",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-30T15:15:22+02:00",
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
  "description" : "The use of an address",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/address-use",
  "concept" : [{
    "code" : "home",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Hjem"
    }]
  },
  {
    "code" : "work",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Arbejde"
    }]
  },
  {
    "code" : "temp",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Midlertidig"
    }]
  },
  {
    "code" : "old",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Gammel / forkert"
    }]
  }]
}

```
