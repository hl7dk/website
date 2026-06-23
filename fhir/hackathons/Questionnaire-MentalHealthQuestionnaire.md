# Psykisk helbred questionnaire - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Psykisk helbred questionnaire**

## Questionnaire: Psykisk helbred questionnaire (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org/fhir/Questionnaire/MentalHealthQuestionnaire | *Version*:1.0.0 |
| Draft as of 2022-06-17 | *Computable Name*: |

 
Spørgeskema der undersøger psykisk helbred for børn og unge, der er i risiko for at udvikle depression eller angst 



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "MentalHealthQuestionnaire",
  "url" : "http://hl7.org/fhir/Questionnaire/MentalHealthQuestionnaire",
  "version" : "1.0.0",
  "title" : "Psykisk helbred questionnaire",
  "status" : "draft",
  "experimental" : true,
  "subjectType" : ["Patient"],
  "date" : "2022-06-17",
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
  "description" : "Spørgeskema der undersøger psykisk helbred for børn og unge, der er i risiko for at udvikle depression eller angst",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "item" : [{
    "linkId" : "1",
    "text" : "Fællesskab",
    "type" : "group",
    "item" : [{
      "linkId" : "1.1",
      "text" : "Venskaber",
      "type" : "choice",
      "answerValueSet" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/FriendshipCodes"
    },
    {
      "linkId" : "1.2",
      "text" : "Lyst til at være sammen med andre",
      "type" : "choice",
      "answerValueSet" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/DesireToBeWithOthersCodes"
    },
    {
      "linkId" : "1.3",
      "text" : "Kærlighed",
      "type" : "choice",
      "answerValueSet" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/LoveCodes"
    }]
  },
  {
    "linkId" : "2",
    "text" : "Daglige opgaver",
    "type" : "group",
    "item" : [{
      "linkId" : "2.1",
      "text" : "Arbejde/skole forventning",
      "type" : "choice",
      "answerValueSet" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/WorkSchoolExpectationCodes"
    },
    {
      "linkId" : "2.2",
      "text" : "Pres",
      "type" : "choice",
      "answerValueSet" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/PressureCodes"
    }]
  },
  {
    "linkId" : "3",
    "text" : "Følelser",
    "type" : "group",
    "item" : [{
      "linkId" : "3.1",
      "text" : "Oplagthed",
      "type" : "choice",
      "answerValueSet" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/EnergyCodes"
    },
    {
      "linkId" : "3.2",
      "text" : "Humør",
      "type" : "choice",
      "answerValueSet" : "http://hl7.dk/fhir/Hackathon-Sep-2022/ValueSet/MoodCodes"
    }]
  }]
}

```
