# Danish IPA Core Patient Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish IPA Core Patient Profile**

## Resource Profile: Danish IPA Core Patient Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-patient | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:IpaDkCorePatient |

 
HL7 Denmark core profile for IPA and DK Core compliant patients 

### Scope and Usage

The Danish IPA Core Patient profile is intended to encapsulate the combined data model of a patient as used in a Danish context [DKCorePatient](./StructureDefinition-dk-core-patient.md) and as used in an international context [International Patient Access (IPA) specification](https://hl7.org/fhir/uv/ipa/StructureDefinition-ipa-patient.html). The profile does this by extending the definition for dk-core-patient and imposing the IPA-Patient profile.

### Compabability Considerations

Marital status in DKCorePatient is aligned with the Danish CPR registry definition and extends the official FHIR valueset with additional values (see valueset [DKCoreMaritalStatus](./ValueSet-dk-marital-status.md) for details). These values are not expected to be understood outside Denmark and should be mapped to other values that match the use case at hand.

**Usages:**

* Refer to this Profile: [Danish IPA Core Observation Profile](StructureDefinition-ipa-dk-core-observation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/ipa-dk-core-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ipa-dk-core-patient.csv), [Excel](StructureDefinition-ipa-dk-core-patient.xlsx), [Schematron](StructureDefinition-ipa-dk-core-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ipa-dk-core-patient",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ipa/StructureDefinition/ipa-patient"
    }
  ],
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-patient",
  "version" : "3.5.0",
  "name" : "IpaDkCorePatient",
  "title" : "Danish IPA Core Patient Profile",
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
  "description" : "HL7 Denmark core profile for IPA and DK Core compliant patients",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      }
    ]
  }
}

```
