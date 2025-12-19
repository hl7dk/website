# Danish Core PractitionerRole Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core PractitionerRole Profile**

## Resource Profile: Danish Core PractitionerRole Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCorePractitionerRole |

 
HL7 Denmark core profile for health professional roles 

### Scope and usage

This profile is primarily created for completeness towards [International Patient Access (IPA) specification](https://hl7.org/fhir/uv/ipa/) and is subject to undergo more profiling work in the future.

**Usages:**

* Derived from this Profile: [Danish IPA Core PractitionerRole Profile](StructureDefinition-ipa-dk-core-practitionerrole.md)
* Refer to this Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md), [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md), [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md), [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md) and [Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)
* Examples for this Profile: [PractitionerRole/AbrahamPractitionerRole](PractitionerRole-AbrahamPractitionerRole.md) and [PractitionerRole/PlaceholderPractitionerRole](PractitionerRole-PlaceholderPractitionerRole.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-practitioner-role)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-practitioner-role.csv), [Excel](StructureDefinition-dk-core-practitioner-role.xlsx), [Schematron](StructureDefinition-dk-core-practitioner-role.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-practitioner-role",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
  "version" : "3.5.0",
  "name" : "DkCorePractitionerRole",
  "title" : "Danish Core PractitionerRole Profile",
  "status" : "active",
  "date" : "2025-12-19T17:27:08+01:00",
  "publisher" : "HL7 Denmark",
  "contact" : [
    {
      "name" : "HL7 Denmark",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.hl7.dk"
        },
        {
          "system" : "email",
          "value" : "dk-affiliate@hl7.dk"
        }
      ]
    }
  ],
  "description" : "HL7 Denmark core profile for health professional roles",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/PractitionerRole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole"
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.location",
        "path" : "PractitionerRole.location",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location"
            ]
          }
        ]
      }
    ]
  }
}

```
