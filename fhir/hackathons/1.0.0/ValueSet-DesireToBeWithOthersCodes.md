# Lyst til at være sammen med andre - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lyst til at være sammen med andre**

## ValueSet: Lyst til at være sammen med andre 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/DesireToBeWithOthersCodes | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*: |

 
Svarmuligheder for lyst til at være sammen med andre i forbindelse med psykisk helbred questionnaire hackathon 2022 

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
  "id" : "DesireToBeWithOthersCodes",
  "url" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/DesireToBeWithOthersCodes",
  "version" : "1.0.0",
  "title" : "Lyst til at være sammen med andre",
  "status" : "active",
  "date" : "2026-06-23T17:13:16+02:00",
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
  "description" : "Svarmuligheder for lyst til at være sammen med andre i forbindelse med psykisk helbred questionnaire hackathon 2022",
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
        "code" : "bf1232a5-f7fa-470f-9b22-58e850a047a9",
        "display" : "Jeg vil gerne være sammen med andre"
      },
      {
        "code" : "48405c96-5f94-4ccf-b9ef-44579da052a8",
        "display" : "Nogle få gange ugentligt har jeg lyst til at være sammen med andre"
      },
      {
        "code" : "cbce7f88-408f-45bf-bfcf-5ea995476bb7",
        "display" : "Jeg har aldrig lyst til at være sammen med andre"
      }]
    }]
  }
}

```
