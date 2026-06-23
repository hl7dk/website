# TelemedicinePatient - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TelemedicinePatient**

## Resource Profile: TelemedicinePatient 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicinePatient | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*:TelemedicinePatient |

 
An example profile of the Patient resource. 

**Usages:**

* Refer to this Profile: [PhysicalActivityObservation](StructureDefinition-PhysicalActivityObservation.md), [SleepObservation](StructureDefinition-SleepObservation.md), [TelemedicineEpisodeOfCare](StructureDefinition-TelemedicineEpisodeOfCare.md) and [TelemedicineQuestionnaireResponse](StructureDefinition-TelemedicineQuestionnaireResponse.md)
* Examples for this Profile: [Patient/PatientExample](Patient-PatientExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/hl7.fhir.dk.hackathons|current/StructureDefinition/StructureDefinition-TelemedicinePatient.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-TelemedicinePatient.csv), [Excel](StructureDefinition-TelemedicinePatient.xlsx), [Schematron](StructureDefinition-TelemedicinePatient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "TelemedicinePatient",
  "url" : "http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicinePatient",
  "version" : "1.0.0",
  "name" : "TelemedicinePatient",
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
  "description" : "An example profile of the Patient resource.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "loinc",
    "uri" : "http://loinc.org",
    "name" : "LOINC code for the element"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Patient",
      "path" : "Patient"
    },
    {
      "id" : "Patient.name",
      "path" : "Patient.name",
      "min" : 1,
      "mustSupport" : true
    }]
  }
}

```
