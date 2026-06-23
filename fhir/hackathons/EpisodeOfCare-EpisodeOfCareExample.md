# EpisodeOfCareExample - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EpisodeOfCareExample**

## Example EpisodeOfCare: EpisodeOfCareExample

Profile: [TelemedicineEpisodeOfCare](StructureDefinition-TelemedicineEpisodeOfCare.md)

**status**: Active

**patient**: [Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996 (use: official, ))](Patient-PatientExample.md)

**period**: 2022-09-01 00:00:00+0200 --> (ongoing)



## Resource Content

```json
{
  "resourceType" : "EpisodeOfCare",
  "id" : "EpisodeOfCareExample",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicineEpisodeOfCare"]
  },
  "status" : "active",
  "patient" : {
    "reference" : "Patient/PatientExample"
  },
  "period" : {
    "start" : "2022-09-01T00:00:00+02:00"
  }
}

```
