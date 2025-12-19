# GLN Identifier - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **GLN Identifier**

## Data Type Profile: GLN Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-gln-identifier | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:GLNIdentifier |

 
Identifier holding a 13 digit GLN 

**Usages:**

* Use this DataType Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-gln-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-gln-identifier.csv), [Excel](StructureDefinition-dk-core-gln-identifier.xlsx), [Schematron](StructureDefinition-dk-core-gln-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-gln-identifier",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-gln-identifier",
  "version" : "3.5.0",
  "name" : "GLNIdentifier",
  "title" : "GLN Identifier",
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
  "description" : "Identifier holding a 13 digit GLN",
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
        "fixedUri" : "http://www.gs1.org/gln"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "gln-length",
            "severity" : "error",
            "human" : "GLN must be exactly 13 characters long",
            "expression" : "matches('^[0-9]{13}$')",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-gln-identifier"
          },
          {
            "key" : "gln-modulus-10",
            "severity" : "error",
            "human" : "GLN must pass the modulus 10 check - https://www.gs1.org/services/how-calculate-check-digit-manually",
            "expression" : "((\n(10-((substring(0,1).toInteger()*1)+\n(substring(1,1).toInteger()*3)+\n(substring(2,1).toInteger()*1)+\n(substring(3,1).toInteger()*3)+\n(substring(4,1).toInteger()*1)\n+(substring(5,1).toInteger()*3)\n+(substring(6,1).toInteger()*1)\n+(substring(7,1).toInteger()*3)\n+(substring(8,1).toInteger()*1)\n+(substring(9,1).toInteger()*3)\n+(substring(10,1).toInteger()*1)\n+(substring(11,1).toInteger()*3))mod(10))mod(10))=substring(12,1).toInteger())",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-gln-identifier"
          }
        ]
      }
    ]
  }
}

```
