# TelemedicineQuestionnaireResponse - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TelemedicineQuestionnaireResponse**

## Resource Profile: TelemedicineQuestionnaireResponse 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicineQuestionnaireResponse | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*:TelemedicineQuestionnaireResponse |

 
FUT like eHealth QuestionnaireResponse 

**Usages:**

* Examples for this Profile: [QuestionnaireResponse/TelemedicineQuestionnaireResponseExample](QuestionnaireResponse-TelemedicineQuestionnaireResponseExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/hl7.fhir.dk.hackathons|current/StructureDefinition/StructureDefinition-TelemedicineQuestionnaireResponse.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-TelemedicineQuestionnaireResponse.csv), [Excel](StructureDefinition-TelemedicineQuestionnaireResponse.xlsx), [Schematron](StructureDefinition-TelemedicineQuestionnaireResponse.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "TelemedicineQuestionnaireResponse",
  "url" : "http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicineQuestionnaireResponse",
  "version" : "1.0.0",
  "name" : "TelemedicineQuestionnaireResponse",
  "title" : "TelemedicineQuestionnaireResponse",
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
  "description" : "FUT like eHealth QuestionnaireResponse",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "QuestionnaireResponse",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/QuestionnaireResponse",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "QuestionnaireResponse",
      "path" : "QuestionnaireResponse"
    },
    {
      "id" : "QuestionnaireResponse.extension",
      "path" : "QuestionnaireResponse.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "QuestionnaireResponse.extension:workflow-episodeOfCare",
      "path" : "QuestionnaireResponse.extension",
      "sliceName" : "workflow-episodeOfCare",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare"]
      }]
    },
    {
      "id" : "QuestionnaireResponse.questionnaire",
      "path" : "QuestionnaireResponse.questionnaire",
      "min" : 1
    },
    {
      "id" : "QuestionnaireResponse.subject",
      "path" : "QuestionnaireResponse.subject",
      "min" : 1
    },
    {
      "id" : "QuestionnaireResponse.authored",
      "path" : "QuestionnaireResponse.authored",
      "min" : 1
    },
    {
      "id" : "QuestionnaireResponse.source",
      "path" : "QuestionnaireResponse.source",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicinePatient",
        "http://hl7.org/fhir/StructureDefinition/Practitioner",
        "http://hl7.org/fhir/StructureDefinition/RelatedPerson"]
      }]
    }]
  }
}

```
