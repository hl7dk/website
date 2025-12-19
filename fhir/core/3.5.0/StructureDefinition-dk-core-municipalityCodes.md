# Danish Core Municipality codes - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Municipality codes**

## Extension: Danish Core Municipality codes 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:MunicipalityCodes |

Identifier holding the official identifier for a danish municipality

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)
* Examples for this Extension: [Patient/283](Patient-283.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-municipalityCodes)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-municipalityCodes.csv), [Excel](StructureDefinition-dk-core-municipalityCodes.xlsx), [Schematron](StructureDefinition-dk-core-municipalityCodes.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-municipalityCodes",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
  "version" : "3.5.0",
  "name" : "MunicipalityCodes",
  "title" : "Danish Core Municipality codes",
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
  "description" : "Identifier holding the official identifier for a danish municipality",
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
      "expression" : "Patient.address"
    },
    {
      "type" : "element",
      "expression" : "Address"
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
        "short" : "Danish Core Municipality codes",
        "definition" : "Identifier holding the official identifier for a danish municipality"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ]
      },
      {
        "id" : "Extension.value[x].coding",
        "path" : "Extension.value[x].coding",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-MunicipalityCodes"
        }
      }
    ]
  }
}

```
