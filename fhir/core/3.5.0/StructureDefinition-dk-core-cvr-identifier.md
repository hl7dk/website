# Danish Central Business Register (CVR) Identifier - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Central Business Register (CVR) Identifier**

## Data Type Profile: Danish Central Business Register (CVR) Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-cvr-identifier | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:CVRIdentifier |

 
Identifier holding a danish[CVR](https://datacvr.virk.dk/data/)number. 

**Usages:**

* Use this DataType Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-cvr-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-cvr-identifier.csv), [Excel](StructureDefinition-dk-core-cvr-identifier.xlsx), [Schematron](StructureDefinition-dk-core-cvr-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-cvr-identifier",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-cvr-identifier",
  "version" : "3.5.0",
  "name" : "CVRIdentifier",
  "title" : "Danish Central Business Register (CVR) Identifier",
  "status" : "active",
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
  "description" : "Identifier holding a danish [CVR](https://datacvr.virk.dk/data/) number.",
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
        "id" : "Identifier.use",
        "path" : "Identifier.use",
        "fixedCode" : "official"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "http://cvr.dk"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "CVR-length",
            "severity" : "error",
            "human" : "CVR must be exactly 8 numeric characters long",
            "expression" : "matches('^[0-9]{8}$')",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-cvr-identifier"
          },
          {
            "key" : "CVR-modulus-11",
            "severity" : "error",
            "human" : "CVR must pass the modulus 11 check",
            "expression" : "((\n    (substring(0,1).toInteger()*2)+\n    (substring(1,1).toInteger()*7)+\n    (substring(2,1).toInteger()*6)+\n    (substring(3,1).toInteger()*5)+\n    (substring(4,1).toInteger()*4)+\n    (substring(5,1).toInteger()*3)+\n    (substring(6,1).toInteger()*2)+\n    (substring(7,1).toInteger()*1)) mod(11)=0)",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-cvr-identifier"
          }
        ]
      }
    ]
  }
}

```
