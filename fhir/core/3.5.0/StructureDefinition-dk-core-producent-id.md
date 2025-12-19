# Producent Id - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Producent Id**

## Data Type Profile: Producent Id 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-producent-id | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:ProducentId |

 
Offical MedCom code describing the producer of lab results 

**Usages:**

* Use this DataType Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-producent-id)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-producent-id.csv), [Excel](StructureDefinition-dk-core-producent-id.xlsx), [Schematron](StructureDefinition-dk-core-producent-id.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-producent-id",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-producent-id",
  "version" : "3.5.0",
  "name" : "ProducentId",
  "title" : "Producent Id",
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
  "description" : "Offical MedCom code describing the producer of lab results",
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
        "fixedUri" : "http://medcomfhir.dk/ig/terminology/CodeSystem/MedComProducentID"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1
      }
    ]
  }
}

```
