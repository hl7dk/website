# Danish IPA Core Practitioner Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish IPA Core Practitioner Profile**

## Resource Profile: Danish IPA Core Practitioner Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-practitioner | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:IpaDkCorePractitioner |

 
HL7 Denmark core profile for IPA and DK Core compliant practitioners 

### Scope and Usage

The Danish IPA Core Practitioner profile is intended to encapsulate the combined data model of a condition as used in a Danish context [DKCorePractitioner](./StructureDefinition-dk-core-practitioner.md) and as used in an international context [International Patient Access (IPA) specification](https://hl7.org/fhir/uv/ipa/StructureDefinition-ipa-practitioner.html). The profile does this by extending the definition for dk-core-practitioner and imposing the IPA-Practitioner profile.

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/ipa-dk-core-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ipa-dk-core-practitioner.csv), [Excel](StructureDefinition-ipa-dk-core-practitioner.xlsx), [Schematron](StructureDefinition-ipa-dk-core-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ipa-dk-core-practitioner",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ipa/StructureDefinition/ipa-practitioner"
    }
  ],
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-practitioner",
  "version" : "3.5.0",
  "name" : "IpaDkCorePractitioner",
  "title" : "Danish IPA Core Practitioner Profile",
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
  "description" : "HL7 Denmark core profile for IPA and DK Core compliant practitioners",
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
  "type" : "Practitioner",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner"
      }
    ]
  }
}

```
