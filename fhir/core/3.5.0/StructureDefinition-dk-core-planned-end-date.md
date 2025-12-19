# PlannedEndDate - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlannedEndDate**

## Extension: PlannedEndDate 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-planned-end-date | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:PlannedEndDate |

The planned end date/time (or discharge date) of the encounter

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Danish Core Encounter Profile](StructureDefinition-dk-core-encounter.md)
* Examples for this Extension: [Encounter/0c5e4905-5c2e-4254-8837-770c3724cd13](Encounter-0c5e4905-5c2e-4254-8837-770c3724cd13.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-planned-end-date)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-planned-end-date.csv), [Excel](StructureDefinition-dk-core-planned-end-date.xlsx), [Schematron](StructureDefinition-dk-core-planned-end-date.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-planned-end-date",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-planned-end-date",
  "version" : "3.5.0",
  "name" : "PlannedEndDate",
  "title" : "PlannedEndDate",
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
  "description" : "The planned end date/time (or discharge date) of the encounter",
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
      "expression" : "Encounter"
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
        "short" : "PlannedEndDate",
        "definition" : "The planned end date/time (or discharge date) of the encounter"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-planned-end-date"
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
