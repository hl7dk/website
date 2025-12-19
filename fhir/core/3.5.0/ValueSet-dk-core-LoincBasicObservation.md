# DK Core LOINC Basic Observations - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Core LOINC Basic Observations**

## ValueSet: DK Core LOINC Basic Observations 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-LoincBasicObservation | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:LoincBasicObservation |
| **Copyright/Legal**: This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc | |

 
LOINC codes describing Basic Observations usable in Denmark. 

 **References** 

* [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

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
  "id" : "dk-core-LoincBasicObservation",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-LoincBasicObservation",
  "version" : "3.5.0",
  "name" : "LoincBasicObservation",
  "title" : "DK Core LOINC Basic Observations",
  "status" : "active",
  "experimental" : false,
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
  "description" : "LOINC codes describing Basic Observations usable in Denmark.",
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
  "copyright" : "This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc",
  "compose" : {
    "include" : [
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "9279-1"
          },
          {
            "code" : "8867-4"
          },
          {
            "code" : "2708-6"
          },
          {
            "code" : "8310-5"
          },
          {
            "code" : "85353-1"
          },
          {
            "code" : "8302-2"
          },
          {
            "code" : "9843-4"
          },
          {
            "code" : "29463-7"
          },
          {
            "code" : "39156-5"
          },
          {
            "code" : "85354-9"
          },
          {
            "code" : "8480-6"
          },
          {
            "code" : "8462-4"
          },
          {
            "code" : "8478-0"
          },
          {
            "code" : "59408-5"
          }
        ]
      }
    ]
  }
}

```
