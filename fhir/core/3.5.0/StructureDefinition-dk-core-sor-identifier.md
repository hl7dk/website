# SOR Identifier - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR Identifier**

## Data Type Profile: SOR Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-sor-identifier | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:SORIdentifier |

 
Identifier holding the official SOR identifier for a danish healthcare organization 

**Usages:**

* Use this DataType Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md) and [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-sor-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-sor-identifier.csv), [Excel](StructureDefinition-dk-core-sor-identifier.xlsx), [Schematron](StructureDefinition-dk-core-sor-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-sor-identifier",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-sor-identifier",
  "version" : "3.5.0",
  "name" : "SORIdentifier",
  "title" : "SOR Identifier",
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
  "description" : "Identifier holding the official SOR identifier for a danish healthcare organization",
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
        "id" : "Identifier.use",
        "path" : "Identifier.use",
        "fixedCode" : "official"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:1.2.208.176.1.1"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "min-digits-sor",
            "requirements" : "SOR Identifiers are at minimum 11 digits long",
            "severity" : "error",
            "human" : "SOR Identifiers are at minimum 11 digits long. See https://sundhedsdatastyrelsen.dk/da/rammer-og-retningslinjer/organisationsregistrering",
            "expression" : "matches('^([0-9]){11,}$')",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-sor-identifier"
          }
        ]
      }
    ]
  }
}

```
