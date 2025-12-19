# Danish IPA Core PractitionerRole Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish IPA Core PractitionerRole Profile**

## Resource Profile: Danish IPA Core PractitionerRole Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-practitionerrole | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:IpaDkCorePractitionerRole |

 
HL7 Denmark core profile for IPA and DK Core compliant practitionerroles 

### Scope and Usage

The Danish IPA Core Practitioner Role profile is intended to encapsulate the combined data model of a practitioner role as used in a Danish context [DKCorePractitionerRole](./StructureDefinition-dk-core-practitioner-role.md) and as used in an international context [International Patient Access (IPA) specification](https://hl7.org/fhir/uv/ipa/StructureDefinition-ipa-practitionerrole.html). The profile does this by extending the definition for dk-core-practitioner-role and imposing the IPA-PractitionerRole profile.

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/ipa-dk-core-practitionerrole)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ipa-dk-core-practitionerrole.csv), [Excel](StructureDefinition-ipa-dk-core-practitionerrole.xlsx), [Schematron](StructureDefinition-ipa-dk-core-practitionerrole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ipa-dk-core-practitionerrole",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ipa/StructureDefinition/ipa-practitionerrole"
    }
  ],
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-practitionerrole",
  "version" : "3.5.0",
  "name" : "IpaDkCorePractitionerRole",
  "title" : "Danish IPA Core PractitionerRole Profile",
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
  "description" : "HL7 Denmark core profile for IPA and DK Core compliant practitionerroles",
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
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole"
      }
    ]
  }
}

```
