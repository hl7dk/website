# National eCPR service, called X-eCPR - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **National eCPR service, called X-eCPR**

## Data Type Profile: National eCPR service, called X-eCPR 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-x-ecpr-identifier | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreXeCprIdentifier |

 
This strucure holds the danish[X-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR)identifier, maintained by the Danish Health Data Authority. 

**Usages:**

* Use this DataType Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md) and [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-x-ecpr-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-x-ecpr-identifier.csv), [Excel](StructureDefinition-dk-core-x-ecpr-identifier.xlsx), [Schematron](StructureDefinition-dk-core-x-ecpr-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-x-ecpr-identifier",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-x-ecpr-identifier",
  "version" : "3.5.0",
  "name" : "DkCoreXeCprIdentifier",
  "title" : "National eCPR service, called X-eCPR",
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
  "description" : "This strucure holds the danish [X-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR) identifier, maintained by the Danish Health Data Authority.",
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
        "fixedCode" : "temp"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:1.2.208.176.1.6.1.1"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "maxLength" : 10,
        "constraint" : [
          {
            "key" : "x-ecpr",
            "severity" : "error",
            "human" : "Requirement of danish X-eCPR. See https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR",
            "expression" : "value.matches('^((((0[1-9]|1[0-9]|2[0-9]|3[0-1])(01|03|05|07|08|10|12))|((0[1-9]|1[0-9]|2[0-9]|30)(04|06|09|11))|((0[1-9]|1[0-9]|2[0-9])(02)))([0-9]{2})((1|7){1})([A-Z]{2})([0-9]{1}))$')",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-x-ecpr-identifier"
          }
        ],
        "mustSupport" : false
      }
    ]
  }
}

```
