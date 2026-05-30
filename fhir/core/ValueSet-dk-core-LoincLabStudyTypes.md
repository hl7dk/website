# DK Core Laboratory study types - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Core Laboratory study types**

## ValueSet: DK Core Laboratory study types 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-LoincLabStudyTypes | *Version*:3.7.0 |
| Active as of 2026-05-30 | *Computable Name*:LoincLabStudyTypes |
| **Copyright/Legal**: This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc | |

 
LOINC codes describing laboratory study types that are consistent with European use in EHDS. 

 **References** 

* [Danish Core Diagnostic Report Profile](StructureDefinition-dk-core-diagnostic-report.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "dk-core-LoincLabStudyTypes",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-LoincLabStudyTypes",
  "version" : "3.7.0",
  "name" : "LoincLabStudyTypes",
  "title" : "DK Core Laboratory study types",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-30T15:25:27+02:00",
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
  "description" : "LOINC codes describing laboratory study types that are consistent with European use in EHDS.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "copyright" : "This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc",
  "compose" : {
    "include" : [{
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "18717-9"
      },
      {
        "code" : "18719-5"
      },
      {
        "code" : "18722-9"
      },
      {
        "code" : "18723-7"
      },
      {
        "code" : "18725-2"
      },
      {
        "code" : "18728-6"
      },
      {
        "code" : "26436-6"
      }]
    }]
  }
}

```
