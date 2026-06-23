# SleepObservation - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SleepObservation**

## Resource Profile: SleepObservation 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/hackathons/StructureDefinition/SleepObservation | *Version*:1.0.0 |
| Active as of 2026-06-23 | *Computable Name*:SleepObservation |

 
FUT like eHealth Observation for daily hours of sleep 

**Usages:**

* Examples for this Profile: [Observation/SleepObservationExample](Observation-SleepObservationExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/hl7.fhir.dk.hackathons|current/StructureDefinition/StructureDefinition-SleepObservation.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-SleepObservation.csv), [Excel](StructureDefinition-SleepObservation.xlsx), [Schematron](StructureDefinition-SleepObservation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "SleepObservation",
  "url" : "http://hl7.dk/fhir/hackathons/StructureDefinition/SleepObservation",
  "version" : "1.0.0",
  "name" : "SleepObservation",
  "title" : "SleepObservation",
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
  "description" : "FUT like eHealth Observation for daily hours of sleep",
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
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
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
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.extension",
      "path" : "Observation.extension",
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
      "id" : "Observation.extension:workflow-episodeOfCare",
      "path" : "Observation.extension",
      "sliceName" : "workflow-episodeOfCare",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare"]
      }]
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "248263006"
        }]
      }
    },
    {
      "id" : "Observation.subject",
      "path" : "Observation.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicinePatient"]
      }]
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "min" : 1,
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Observation.performer",
      "path" : "Observation.performer",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicinePatient"]
      }]
    },
    {
      "id" : "Observation.value[x]",
      "path" : "Observation.value[x]",
      "short" : "Hours of sleep",
      "definition" : "Time (in hours) of sleep within the given period reported",
      "min" : 1,
      "type" : [{
        "code" : "Quantity"
      }]
    },
    {
      "id" : "Observation.value[x].unit",
      "path" : "Observation.value[x].unit",
      "patternString" : "Hours"
    },
    {
      "id" : "Observation.component",
      "path" : "Observation.component",
      "max" : "0"
    }]
  }
}

```
