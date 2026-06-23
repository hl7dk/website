# TelemedicineQuestionnaire - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TelemedicineQuestionnaire**

## Resource Profile: TelemedicineQuestionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicineQuestionnaire | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*:TelemedicineQuestionnaire |

 
FUT like eHealth questionnaire 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/hl7.fhir.dk.hackathons|current/StructureDefinition/StructureDefinition-TelemedicineQuestionnaire.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-TelemedicineQuestionnaire.csv), [Excel](StructureDefinition-TelemedicineQuestionnaire.xlsx), [Schematron](StructureDefinition-TelemedicineQuestionnaire.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "TelemedicineQuestionnaire",
  "url" : "http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicineQuestionnaire",
  "version" : "1.0.0",
  "name" : "TelemedicineQuestionnaire",
  "title" : "TelemedicineQuestionnaire",
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
  "description" : "FUT like eHealth questionnaire",
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
  },
  {
    "identity" : "objimpl",
    "uri" : "http://hl7.org/fhir/object-implementation",
    "name" : "Object Implementation Information"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Questionnaire",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Questionnaire",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Questionnaire",
      "path" : "Questionnaire"
    }]
  }
}

```
