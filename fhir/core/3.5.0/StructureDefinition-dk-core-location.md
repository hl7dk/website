# Danish Core Location Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Location Profile**

## Resource Profile: Danish Core Location Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-location | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreLocation |

 
HL7 Denmark core profile for locations 

### Scope and usage

This profile is primarily created for completeness towards [International Patient Access (IPA) specification](https://hl7.org/fhir/uv/ipa/) and is subject to undergo more profiling work in the future.

**Usages:**

* Refer to this Profile: [Danish Core Location Profile](StructureDefinition-dk-core-location.md), [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md) and [Danish Core PractitionerRole Profile](StructureDefinition-dk-core-practitioner-role.md)
* Examples for this Profile: [Location/ambulance](Location-ambulance.md) and [Neuro unit](Location-neuroradiologyUnit.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-location)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-location.csv), [Excel](StructureDefinition-dk-core-location.xlsx), [Schematron](StructureDefinition-dk-core-location.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-location",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location",
  "version" : "3.5.0",
  "name" : "DkCoreLocation",
  "title" : "Danish Core Location Profile",
  "status" : "active",
  "date" : "2025-12-19T17:20:16+01:00",
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
  "description" : "HL7 Denmark core profile for locations",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Location",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Location",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Location",
        "path" : "Location"
      },
      {
        "id" : "Location.managingOrganization",
        "path" : "Location.managingOrganization",
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
        "id" : "Location.partOf",
        "path" : "Location.partOf",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : true
              }
            ],
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
