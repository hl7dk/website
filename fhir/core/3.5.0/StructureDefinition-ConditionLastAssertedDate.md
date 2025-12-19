# ConditionLastAssertedDate - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConditionLastAssertedDate**

## Extension: ConditionLastAssertedDate 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/ConditionLastAssertedDate | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:ConditionLastAssertedDate |

Extension for the last date a Condition-instance was confirmed valid in its current state. E.g. with its current clinical- and verification status, stage and severity. Typically the last performed follow-up

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md)
* Examples for this Extension: [Condition/ConditionPressureUlcer](Condition-ConditionPressureUlcer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/ConditionLastAssertedDate)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ConditionLastAssertedDate.csv), [Excel](StructureDefinition-ConditionLastAssertedDate.xlsx), [Schematron](StructureDefinition-ConditionLastAssertedDate.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ConditionLastAssertedDate",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/ConditionLastAssertedDate",
  "version" : "3.5.0",
  "name" : "ConditionLastAssertedDate",
  "title" : "ConditionLastAssertedDate",
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
  "description" : "Extension for the last date a Condition-instance was confirmed valid in its current state. E.g. with its current clinical- and verification status, stage and severity. Typically the last performed follow-up",
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
        "short" : "ConditionLastAssertedDate",
        "definition" : "Extension for the last date a Condition-instance was confirmed valid in its current state. E.g. with its current clinical- and verification status, stage and severity. Typically the last performed follow-up"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://hl7.dk/fhir/core/StructureDefinition/ConditionLastAssertedDate"
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
