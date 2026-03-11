# DK Episode Of Care Status Supplement - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK Episode Of Care Status Supplement**

## CodeSystem: DK Episode Of Care Status Supplement 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/episode-of-care-status-dk-supplement | *Version*:3.6.0 |
| Active as of 2026-03-11 | *Computable Name*:EpisodeOfCareStatus |

 
The status of the episode of care. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "episode-of-care-status-dk-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/episode-of-care-status-dk-supplement",
  "version" : "3.6.0",
  "name" : "EpisodeOfCareStatus",
  "title" : "DK Episode Of Care Status Supplement",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-11T23:10:00+01:00",
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
  "description" : "The status of the episode of care.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/episode-of-care-status",
  "concept" : [{
    "code" : "planned",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Planlagt"
    }]
  },
  {
    "code" : "waitlist",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Venteliste"
    }]
  },
  {
    "code" : "active",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Aktiv"
    }]
  },
  {
    "code" : "onhold",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Pauseret"
    }]
  },
  {
    "code" : "finished",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Færdig"
    }]
  },
  {
    "code" : "cancelled",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Annulleret"
    }]
  },
  {
    "code" : "entered-in-error",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Fejlindtastning"
    }]
  }]
}

```
