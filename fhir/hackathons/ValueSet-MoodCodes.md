# Humør - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Humør**

## ValueSet: Humør 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/MoodCodes | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*: |

 
Svarmuligheder for humør i forbindelse med psykisk helbred questionnaire hackathon 2022 

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
  "id" : "MoodCodes",
  "url" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/MoodCodes",
  "version" : "1.0.0",
  "title" : "Humør",
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
  "description" : "Svarmuligheder for humør i forbindelse med psykisk helbred questionnaire hackathon 2022",
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
        "code" : "b9453f69-31a2-4a67-a453-569d7cd9691a",
        "display" : "Jeg er glad"
      },
      {
        "code" : "18b6720d-8ae2-4abf-87e7-c068efb5346c",
        "display" : "Jeg er trist det meste af tiden"
      },
      {
        "code" : "f78ce5be-f7d1-4f03-9eed-bd2563466abe",
        "display" : "Jeg er trist hele tiden og har trang til at græde hver dag"
      }]
    }]
  }
}

```
