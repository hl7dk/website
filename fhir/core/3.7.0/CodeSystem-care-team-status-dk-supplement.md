# DK CareTeam Status Supplement - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK CareTeam Status Supplement**

## CodeSystem: DK CareTeam Status Supplement 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/CodeSystem/care-team-status-dk-supplement | *Version*:3.7.0 |
| Active as of 2026-05-30 | *Computable Name*:CareTeamStatus |

 
Indicates the status of the care team. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "care-team-status-dk-supplement",
  "url" : "http://hl7.dk/fhir/core/CodeSystem/care-team-status-dk-supplement",
  "version" : "3.7.0",
  "name" : "CareTeamStatus",
  "title" : "DK CareTeam Status Supplement",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-05-30T15:15:22+02:00",
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
  "description" : "Indicates the status of the care team.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/care-team-status",
  "concept" : [{
    "code" : "proposed",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Forslag"
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
    "code" : "suspended",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Suspenderet"
    }]
  },
  {
    "code" : "inactive",
    "designation" : [{
      "language" : "da",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009"
      },
      "value" : "Inaktiv"
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
