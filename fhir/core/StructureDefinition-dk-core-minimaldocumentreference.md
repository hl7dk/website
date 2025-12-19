# Danish Core Minimal DocumentReference Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Minimal DocumentReference Profile**

## Resource Profile: Danish Core Minimal DocumentReference Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-minimaldocumentreference | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreMinimalDocumentReference |

 
HL7 Denmark core profile for a Minimal DocumentReference inherited from IHE MHD Minimal DocumentReference 

### Scope and Usage

The Danish Core MinimalDocumentReference profile is intended to encapsulate the data model of a DocumentReference as used in a Danish context of Document sharing, whether it is FHIR or CDA Documents and whether it is native XDS infrastructure or used in an MHD context [IHE MHD DocumentReference Minimal specification 4.2.2](https://profiles.ihe.net/ITI/MHD/4.2.2/StructureDefinition-IHE.MHD.Minimal.DocumentReference.html).

**Conformance to IHE and Danish XDS Context**

This profile inherits from an IHE profile, which have MustSupport assigned to quite a few elements. While this is not the behaviour we normally support in the Danish Core-IG, we accept it in this case, as we are not inheriting from a pure FHIR Core resource, but an already profiled resource. Consequently, we conform to the approach of IHE and follow their direction of using a DocumentReference profile in a strict XDS/MHD context rather than in a general context. In doing so, we have also constrained this profile to the Danish XDS environment hosted by Sundhedsdatastyrelsen (soon Digital Sundhed Danmark). This means constraining the cardinality of both Author and Subject (Patient) to be required.

**Inheritance or imposing**

Normally, when a DK Core profile is derived from a FHIR Core resource, derivation is applied. When "deriving" from another profiled FHIR resource, the DK Core profile would normally impose that profile. In this case, the profile is derived directly from the IHE profile, as this approach better reflects the intended use. If the profile had instead imposed the IHE profile, it would have been necessary to document the justification for conforming in that manner. To fully understand the background and structure of this profile, readers should consult the IHE documentation for the MinimalDocumentReference profile. The profile conforms to the IHE MinimalDocumentReference profile but does not redefine or extend it as a separate IHE profile instance.

**Usages:**

* Examples for this Profile: [DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a12](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.md) and [DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a13](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a13.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-minimaldocumentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-minimaldocumentreference.csv), [Excel](StructureDefinition-dk-core-minimaldocumentreference.xlsx), [Schematron](StructureDefinition-dk-core-minimaldocumentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-minimaldocumentreference",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-minimaldocumentreference",
  "version" : "3.5.0",
  "name" : "DkCoreMinimalDocumentReference",
  "title" : "Danish Core Minimal DocumentReference Profile",
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
  "description" : "HL7 Denmark core profile for a Minimal DocumentReference inherited from IHE MHD Minimal DocumentReference",
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
      "identity" : "DocumentEntry-Mapping",
      "uri" : "urn:ihe:iti:xds:documententry",
      "name" : "XDS and MHD Mapping"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "fhircomposition",
      "uri" : "http://hl7.org/fhir/composition",
      "name" : "FHIR Composition"
    },
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
      "identity" : "xds",
      "uri" : "http://ihe.net/xds",
      "name" : "XDS metadata equivalent"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "https://profiles.ihe.net/ITI/MHD/StructureDefinition/IHE.MHD.Minimal.DocumentReference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference"
      },
      {
        "id" : "DocumentReference.extension",
        "path" : "DocumentReference.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "DocumentReference.extension:versionid",
        "path" : "DocumentReference.extension",
        "sliceName" : "versionid",
        "short" : "Specifies the version of the DocumentReference profile for a standard.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/5.0/StructureDefinition/extension-DocumentReference.version"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.subject",
        "path" : "DocumentReference.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.author",
        "path" : "DocumentReference.author",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.authenticator",
        "path" : "DocumentReference.authenticator",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.context.event",
        "path" : "DocumentReference.context.event",
        "binding" : {
          "strength" : "example",
          "valueSet" : "http://terminology.hl7.org/ValueSet/v3-ActCode|3.0.0"
        }
      },
      {
        "id" : "DocumentReference.context.facilityType",
        "path" : "DocumentReference.context.facilityType",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/sor-organization-type"
        }
      },
      {
        "id" : "DocumentReference.context.practiceSetting",
        "path" : "DocumentReference.context.practiceSetting",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-practice-setting-code"
        }
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo",
        "path" : "DocumentReference.context.sourcePatientInfo",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
            ]
          }
        ]
      }
    ]
  }
}

```
