# Venskaber - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Venskaber**

## ValueSet: Venskaber 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/FriendshipCodes | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*: |

 
Svarmuligheder for venskaber i forbindelse med psykisk helbred questionnaire hackathon 2022 

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
  "id" : "FriendshipCodes",
  "url" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/FriendshipCodes",
  "version" : "1.0.0",
  "title" : "Venskaber",
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
  "description" : "Svarmuligheder for venskaber i forbindelse med psykisk helbred questionnaire hackathon 2022",
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
        "code" : "60e95414-b97d-4197-af85-d5efc5628e86",
        "display" : "Jeg føler mig tæt på mine venner"
      },
      {
        "code" : "93105f14-245e-4e66-8db0-86866978de58",
        "display" : "Jeg har venner, men de er ikke tætte mere"
      },
      {
        "code" : "597872aa-a00e-4de3-b0a3-03dae9fd890a",
        "display" : "Jeg har ingen venner"
      }]
    }]
  }
}

```
