# Pres - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pres**

## ValueSet: Pres 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/PressureCodes | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*: |

 
Svarmuligheder for pres i forbindelse med psykisk helbred questionnaire hackathon 2022 

 **References** 

* [Psykisk helbred questionnaire](Questionnaire-MentalHealthQuestionnaire.md)

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
  "id" : "PressureCodes",
  "url" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/PressureCodes",
  "version" : "1.0.0",
  "title" : "Pres",
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
  "description" : "Svarmuligheder for pres i forbindelse med psykisk helbred questionnaire hackathon 2022",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.dk/fhir/Hackathon-Sep-2022/CodeSystem/MentalHealthCodes",
      "concept" : [{
        "code" : "be7fa5d8-ad1f-49c4-9bce-4370c81f6ac9",
        "display" : "Jeg klarer mine opgaver uden at føle mig presset"
      },
      {
        "code" : "7cffb548-c0ff-4521-9782-4d862d952885",
        "display" : "Jeg presser mig selv hele tiden for at klare mine daglige opgaver"
      },
      {
        "code" : "14293f45-25fc-48a1-b8be-918d44009e91",
        "display" : "Jeg klarer ikke mine daglige opgaver"
      }]
    }]
  }
}

```
