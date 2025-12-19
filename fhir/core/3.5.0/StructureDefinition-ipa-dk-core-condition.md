# Danish IPA Core Condition Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish IPA Core Condition Profile**

## Resource Profile: Danish IPA Core Condition Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-condition | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:IpaDkCoreCondition |

 
HL7 Denmark core profile for IPA and DK Core compliant conditions 

### Scope and Usage

The Danish IPA Core Condition profile is intended to encapsulate the combined data model of a condition as used in a Danish context [DKCoreCondition](./StructureDefinition-dk-core-condition.md) and as used in an international context [International Patient Access (IPA) specification](https://hl7.org/fhir/uv/ipa/StructureDefinition-ipa-condition.html). The profile does this by extending the definition for dk-core-condition and imposing the IPA-Condition profile.

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/ipa-dk-core-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ipa-dk-core-condition.csv), [Excel](StructureDefinition-ipa-dk-core-condition.xlsx), [Schematron](StructureDefinition-ipa-dk-core-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ipa-dk-core-condition",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ipa/StructureDefinition/ipa-condition"
    }
  ],
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-condition",
  "version" : "3.5.0",
  "name" : "IpaDkCoreCondition",
  "title" : "Danish IPA Core Condition Profile",
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
  "description" : "HL7 Denmark core profile for IPA and DK Core compliant conditions",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition"
      }
    ]
  }
}

```
