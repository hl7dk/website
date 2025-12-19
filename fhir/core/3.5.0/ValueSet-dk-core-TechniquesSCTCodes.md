# DK TechniquesSCTCodes - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK TechniquesSCTCodes**

## ValueSet: DK TechniquesSCTCodes 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-TechniquesSCTCodes | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:TechniquesSCTCodes |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | |

 
SNOMED CT Codes for the technique used when obtaining an observation 

 **References** 

* [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

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
  "id" : "dk-core-TechniquesSCTCodes",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-TechniquesSCTCodes",
  "version" : "3.5.0",
  "name" : "TechniquesSCTCodes",
  "title" : "DK TechniquesSCTCodes",
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
  "description" : "SNOMED CT Codes for the technique used when obtaining an observation",
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
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "concept" : [
          {
            "code" : "761996005"
          },
          {
            "code" : "733985002"
          },
          {
            "code" : "272391002"
          }
        ]
      }
    ]
  }
}

```
