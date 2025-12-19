# DK D-eCPR OID values - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK D-eCPR OID values**

## ValueSet: DK D-eCPR OID values 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/DkCoreDeCPRValueSet | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreDeCPRValueSet |

 
DK D-eCPR OID values 

 **References** 

* [Decentralised eCPR, called D-eCPR](StructureDefinition-dk-core-d-ecpr-identifier.md)

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
  "id" : "DkCoreDeCPRValueSet",
  "url" : "http://hl7.dk/fhir/core/ValueSet/DkCoreDeCPRValueSet",
  "version" : "3.5.0",
  "name" : "DkCoreDeCPRValueSet",
  "title" : "DK D-eCPR OID values",
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
  "description" : "DK D-eCPR OID values",
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
        "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-d-ecpr-codes"
      }
    ]
  }
}

```
