# Danish Health Professionals Authorization Identifier - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Health Professionals Authorization Identifier**

## Data Type Profile: Danish Health Professionals Authorization Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-authorization-identifier | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:AuthorizationIdentifier |

 
Identifier holding the official[authorization identifier](https://en.stps.dk/en/health-professionals-and-authorities/online-register-registered-health-professionals/)for a practitioner. 

**Usages:**

* Use this DataType Profile: [Danish Core Practitioner Profile](StructureDefinition-dk-core-practitioner.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-authorization-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-authorization-identifier.csv), [Excel](StructureDefinition-dk-core-authorization-identifier.xlsx), [Schematron](StructureDefinition-dk-core-authorization-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-authorization-identifier",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-authorization-identifier",
  "version" : "3.5.0",
  "name" : "AuthorizationIdentifier",
  "title" : "Danish Health Professionals Authorization Identifier",
  "status" : "active",
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
  "description" : "Identifier holding the official [authorization identifier](https://en.stps.dk/en/health-professionals-and-authorities/online-register-registered-health-professionals/) for a practitioner.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Identifier",
        "path" : "Identifier"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "https://autregweb.sst.dk"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "maxLength" : 5,
        "constraint" : [
          {
            "key" : "authorization-id-format",
            "severity" : "error",
            "human" : "Authorization ID consists of exactly 5 consonants and Y and or numbers in any order. See https://stps.dk/da/autorisation/om-autorisationer/autorisations-id/",
            "expression" : "matches('^([b-df-hj-np-tv-zB-DF-HJ-NP-TV-Z0-9]){5}$')",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-authorization-identifier"
          }
        ]
      }
    ]
  }
}

```
