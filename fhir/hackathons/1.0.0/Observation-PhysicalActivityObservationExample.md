# PhysicalActivityObservationExample - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PhysicalActivityObservationExample**

## Example Observation: PhysicalActivityObservationExample

Profile: [PhysicalActivityObservation](StructureDefinition-PhysicalActivityObservation.md)

**Episode of care**: [EpisodeOfCare: status = active; period = 2022-09-01 00:00:00+0200 --> (ongoing)](EpisodeOfCare-EpisodeOfCareExample.md)

**status**: Final

**code**: Walking

**subject**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996 (use: official, ))](Patient-PatientExample.md)

**effective**: 2022-09-05 00:00:00+0200 --> 2022-09-06 00:00:00+0200

**performer**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996 (use: official, ))](Patient-PatientExample.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "PhysicalActivityObservationExample",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/PhysicalActivityObservation"]
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
      "code" : "129006008",
      "display" : "Walking"
    }]
  },
  "subject" : {
    "reference" : "Patient/PatientExample"
  },
  "effectivePeriod" : {
    "start" : "2022-09-05T00:00:00+02:00",
    "end" : "2022-09-06T00:00:00+02:00"
  },
  "performer" : [{
    "reference" : "Patient/PatientExample"
  }]
}

```
