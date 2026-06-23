# ObservationCodes - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ObservationCodes**

## ValueSet: ObservationCodes 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/hackathons/ValueSet/ActivityCodes | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*:ActivityCodes |

 
Observation codes value set 

 **References** 

* [PhysicalActivityObservation](StructureDefinition-PhysicalActivityObservation.md)

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
  "id" : "ActivityCodes",
  "url" : "http://hl7.dk/fhir/hackathons/ValueSet/ActivityCodes",
  "version" : "1.0.0",
  "name" : "ActivityCodes",
  "title" : "ObservationCodes",
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
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "418305009"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "256235009"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "129016000"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "68130003"
      }]
    }]
  }
}

```
