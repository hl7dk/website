# HL7 Denmark core DocumentReference Version ID extension - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HL7 Denmark core DocumentReference Version ID extension**

## Extension: HL7 Denmark core DocumentReference Version ID extension 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-documentreference-version-id-extension | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreDocumentReferenceVersionID |

Extension containing information about the version of the DocumentReference for a specific standard. The version is included in the R5 version of the resource.

**Context of Use**

**Usage info**

**Usages:**

* This Extension is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-documentreference-version-id-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-documentreference-version-id-extension.csv), [Excel](StructureDefinition-dk-core-documentreference-version-id-extension.xlsx), [Schematron](StructureDefinition-dk-core-documentreference-version-id-extension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-documentreference-version-id-extension",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-documentreference-version-id-extension",
  "version" : "3.5.0",
  "name" : "DkCoreDocumentReferenceVersionID",
  "title" : "HL7 Denmark core DocumentReference Version ID extension",
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
  "description" : "Extension containing information about the version of the DocumentReference for a specific standard. The version is included in the R5 version of the resource.",
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
      "expression" : "Element"
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
        "short" : "HL7 Denmark core DocumentReference Version ID extension",
        "definition" : "Extension containing information about the version of the DocumentReference for a specific standard. The version is included in the R5 version of the resource."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-documentreference-version-id-extension"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.value[x]:valueString",
        "path" : "Extension.value[x]",
        "sliceName" : "valueString",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
