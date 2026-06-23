# SleepObservationExample - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SleepObservationExample**

## Example Observation: SleepObservationExample

Profile: [SleepObservation](StructureDefinition-SleepObservation.md)

**Episode of care**: [EpisodeOfCare: status = active; period = 2022-09-01 00:00:00+0200 --> (ongoing)](EpisodeOfCare-EpisodeOfCareExample.md)

**status**: Final

**code**: Duration of sleep

**subject**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996 (use: official, ))](Patient-PatientExample.md)

**effective**: 2022-09-05 12:00:00+0200 --> 2022-09-06 12:00:00+0200

**performer**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996 (use: official, ))](Patient-PatientExample.md)

**value**: 5



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "SleepObservationExample",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/SleepObservation"]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/EpisodeOfCareExample"
    }
  }],
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "248263006"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectivePeriod" : {
    "start" : "2022-09-05T12:00:00+02:00",
    "end" : "2022-09-06T12:00:00+02:00"
  },
  "performer" : [{
    "reference" : "Patient/PatientExample"
  }],
  "valueQuantity" : {
    "value" : 5
  }
}

```
