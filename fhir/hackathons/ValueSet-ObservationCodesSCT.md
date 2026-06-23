# ObservationCodesSCT - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ObservationCodesSCT**

## ValueSet: ObservationCodesSCT 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/hackathons/ValueSet/ObservationCodesSCT | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*:ObservationCodesSCT |

 
Observation codes value set 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

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
  "id" : "ObservationCodesSCT",
  "url" : "http://hl7.dk/fhir/hackathons/ValueSet/ObservationCodesSCT",
  "version" : "1.0.0",
  "name" : "ObservationCodesSCT",
  "title" : "ObservationCodesSCT",
  "status" : "active",
  "date" : "2026-06-23T17:17:05+02:00",
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
  "description" : "Observation codes value set",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "68130003:704323007=385673002"
      },
      {
        "code" : "68130003"
      },
      {
        "code" : "68130003:719722006=415577004"
      },
      {
        "code" : "248263006"
      }]
    }]
  }
}

```
