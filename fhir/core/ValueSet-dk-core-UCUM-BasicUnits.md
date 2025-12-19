# DK Core UCUM Basic Units - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Core UCUM Basic Units**

## ValueSet: DK Core UCUM Basic Units 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-UCUM-BasicUnits | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:UCUMBasicUnits |
| **Copyright/Legal**: This material contains content from UCUM (http://ucum.org). UCUM is copyright © 1999-2024, Regenstrief Institute, Inc. and is available under the license at http://ucum.org/license. | |

 
UCUM codes to represent units for basic Observations usable in Denmark 

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
  "id" : "dk-core-UCUM-BasicUnits",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-UCUM-BasicUnits",
  "version" : "3.5.0",
  "name" : "UCUMBasicUnits",
  "title" : "DK Core UCUM Basic Units",
  "status" : "active",
  "experimental" : false,
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
  "description" : "UCUM codes to represent units for basic Observations usable in Denmark",
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
  "copyright" : "This material contains content from UCUM (http://ucum.org). UCUM is copyright © 1999-2024, Regenstrief Institute, Inc. and is available under the license at http://ucum.org/license.",
  "compose" : {
    "include" : [
      {
        "system" : "http://unitsofmeasure.org",
        "concept" : [
          {
            "code" : "%"
          },
          {
            "code" : "cm"
          },
          {
            "code" : "[in_i]"
          },
          {
            "code" : "kg"
          },
          {
            "code" : "g"
          },
          {
            "code" : "[lb_av]"
          },
          {
            "code" : "Cel"
          },
          {
            "code" : "[degF]"
          },
          {
            "code" : "mm[Hg]"
          },
          {
            "code" : "/min"
          },
          {
            "code" : "kg/m2"
          },
          {
            "code" : "m2"
          },
          {
            "code" : "{fraction}"
          }
        ]
      }
    ]
  }
}

```
