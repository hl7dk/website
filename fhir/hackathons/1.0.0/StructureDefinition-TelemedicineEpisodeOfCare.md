# TelemedicineEpisodeOfCare - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TelemedicineEpisodeOfCare**

## Resource Profile: TelemedicineEpisodeOfCare 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicineEpisodeOfCare | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*:TelemedicineEpisodeOfCare |

 
FUT like eHealth EpisodeOfCare 

**Usages:**

* Examples for this Profile: [EpisodeOfCare/EpisodeOfCareExample](EpisodeOfCare-EpisodeOfCareExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/hl7.fhir.dk.hackathons|current/StructureDefinition/StructureDefinition-TelemedicineEpisodeOfCare.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-TelemedicineEpisodeOfCare.csv), [Excel](StructureDefinition-TelemedicineEpisodeOfCare.xlsx), [Schematron](StructureDefinition-TelemedicineEpisodeOfCare.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "TelemedicineEpisodeOfCare",
  "url" : "http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicineEpisodeOfCare",
  "version" : "1.0.0",
  "name" : "TelemedicineEpisodeOfCare",
  "title" : "TelemedicineEpisodeOfCare",
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
  "description" : "FUT like eHealth EpisodeOfCare",
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
  "type" : "EpisodeOfCare",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "EpisodeOfCare",
      "path" : "EpisodeOfCare"
    },
    {
      "id" : "EpisodeOfCare.patient",
      "path" : "EpisodeOfCare.patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicinePatient"]
      }]
    },
    {
      "id" : "EpisodeOfCare.period",
      "path" : "EpisodeOfCare.period",
      "min" : 1
    }]
  }
}

```
