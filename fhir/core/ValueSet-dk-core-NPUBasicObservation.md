# DK Core NPU Basic Observation - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Core NPU Basic Observation**

## ValueSet: DK Core NPU Basic Observation 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-NPUBasicObservation | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:NPUBasicObservation |

 
NPU codes for Basic Observations usable in Denmark 

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
  "id" : "dk-core-NPUBasicObservation",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-NPUBasicObservation",
  "version" : "3.5.0",
  "name" : "NPUBasicObservation",
  "title" : "DK Core NPU Basic Observation",
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
  "description" : "NPU codes for Basic Observations usable in Denmark",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://npu-terminology.org",
        "concept" : [
          {
            "code" : "NPU03011"
          },
          {
            "code" : "NPU27280"
          },
          {
            "code" : "NPU04034"
          },
          {
            "code" : "NPU08676"
          },
          {
            "code" : "NPU57947"
          },
          {
            "code" : "NPU57948"
          },
          {
            "code" : "NPU21692"
          },
          {
            "code" : "NPU03794"
          },
          {
            "code" : "NPU03804"
          },
          {
            "code" : "NPU27281"
          }
        ]
      }
    ]
  }
}

```
