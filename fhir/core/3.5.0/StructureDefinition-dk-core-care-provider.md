# CareProvider - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CareProvider**

## Extension: CareProvider 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-care-provider | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:CareProvider |

The organization (facility) responsible for the care of the patient during this encounter

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Danish Core Encounter Profile](StructureDefinition-dk-core-encounter.md)
* Examples for this Extension: [Encounter/0c5e4905-5c2e-4254-8837-770c3724cd13](Encounter-0c5e4905-5c2e-4254-8837-770c3724cd13.md) and [Encounter/915a3cfb-2f3e-477b-8a9d-5d86c30e4929](Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-care-provider)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-care-provider.csv), [Excel](StructureDefinition-dk-core-care-provider.xlsx), [Schematron](StructureDefinition-dk-core-care-provider.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-care-provider",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-care-provider",
  "version" : "3.5.0",
  "name" : "CareProvider",
  "title" : "CareProvider",
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
  "description" : "The organization (facility) responsible for the care of the patient during this encounter",
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Encounter"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CareProvider",
        "definition" : "The organization (facility) responsible for the care of the patient during this encounter"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-care-provider"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
            ]
          }
        ]
      }
    ]
  }
}

```
