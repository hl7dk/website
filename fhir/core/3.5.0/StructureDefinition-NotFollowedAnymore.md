# NotFollowedAnymore - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NotFollowedAnymore**

## Extension: NotFollowedAnymore 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/NotFollowedAnymore | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:NotFollowedAnymore |

Extension for the date where a condition lost focus in a specific clinical context

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/NotFollowedAnymore)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NotFollowedAnymore.csv), [Excel](StructureDefinition-NotFollowedAnymore.xlsx), [Schematron](StructureDefinition-NotFollowedAnymore.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NotFollowedAnymore",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/NotFollowedAnymore",
  "version" : "3.5.0",
  "name" : "NotFollowedAnymore",
  "title" : "NotFollowedAnymore",
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
  "description" : "Extension for the date where a condition lost focus in a specific clinical context",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Condition"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "NotFollowedAnymore",
        "definition" : "Extension for the date where a condition lost focus in a specific clinical context"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://hl7.dk/fhir/core/StructureDefinition/NotFollowedAnymore"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      }
    ]
  }
}

```
