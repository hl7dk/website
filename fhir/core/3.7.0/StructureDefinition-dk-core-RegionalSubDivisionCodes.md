# Danish Core Regional Sub Division Codes Extension - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Regional Sub Division Codes Extension**

## Extension: Danish Core Regional Sub Division Codes Extension 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes | *Version*:3.7.0 |
| Active as of 2026-05-30 | *Computable Name*:RegionalSubDivisionCodes |

Identifier holding the official organization identifier for a danish region

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)
* Examples for this Extension: [Patient/283](Patient-283.md), [Patient/Aage](Patient-Aage.md), [Patient/AliJensen](Patient-AliJensen.md), [Patient/AndersJensen](Patient-AndersJensen.md)... Show 31 more, [Patient/AyaBerggren](Patient-AyaBerggren.md), [Patient/BoVestergaard](Patient-BoVestergaard.md), [Patient/BritaBerggren](Patient-BritaBerggren.md), [Patient/Bruno](Patient-Bruno.md), [Patient/CaesarOestergaard](Patient-CaesarOestergaard.md), [Patient/EK](Patient-EK.md), [Patient/Einer](Patient-Einer.md), [Patient/EllenLouise](Patient-EllenLouise.md), [Patient/ElseLauridsen](Patient-ElseLauridsen.md), [Patient/GitteNancy](Patient-GitteNancy.md), [Patient/JulianeJoergensen](Patient-JulianeJoergensen.md), [Patient/KajaHansen](Patient-KajaHansen.md), [Patient/KirstenBerggren](Patient-KirstenBerggren.md), [Patient/KnutOdvar](Patient-KnutOdvar.md), [Patient/LarsBerggren](Patient-LarsBerggren.md), [Patient/Lonni](Patient-Lonni.md), [Patient/Magnus](Patient-Magnus.md), [Patient/MaxBerggren](Patient-MaxBerggren.md), [Patient/MayJune](Patient-MayJune.md), [Patient/MuhammedAbdul](Patient-MuhammedAbdul.md), [Patient/NancyAnn](Patient-NancyAnn.md), [Patient/NielsVendelboe](Patient-NielsVendelboe.md), [Patient/OddHaugen](Patient-OddHaugen.md), [Patient/PiaBerggren](Patient-PiaBerggren.md), [Patient/Rasmus](Patient-Rasmus.md), [Patient/RikkeBerggren](Patient-RikkeBerggren.md), [Patient/RuddiBerggren](Patient-RuddiBerggren.md), [Patient/Schwendlund](Patient-Schwendlund.md), [Patient/SilleJune](Patient-SilleJune.md), [Patient/Sverre](Patient-Sverre.md) and [Patient/Torre](Patient-Torre.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/hl7.fhir.dk.core|current/StructureDefinition/StructureDefinition-dk-core-RegionalSubDivisionCodes.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-RegionalSubDivisionCodes.csv), [Excel](StructureDefinition-dk-core-RegionalSubDivisionCodes.xlsx), [Schematron](StructureDefinition-dk-core-RegionalSubDivisionCodes.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-RegionalSubDivisionCodes",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
  "version" : "3.7.0",
  "name" : "RegionalSubDivisionCodes",
  "title" : "Danish Core Regional Sub Division Codes Extension",
  "status" : "active",
  "date" : "2026-05-30T15:15:22+02:00",
  "publisher" : "HL7 Denmark",
  "contact" : [{
    "name" : "HL7 Denmark",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.hl7.dk"
    },
    {
      "system" : "email",
      "value" : "dk-affiliate@hl7.dk"
    }]
  }],
  "description" : "Identifier holding the official organization identifier for a danish region",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Address"
  },
  {
    "type" : "element",
    "expression" : "Patient.address"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Danish Core Regional Sub Division Codes Extension",
      "definition" : "Identifier holding the official organization identifier for a danish region"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }]
    },
    {
      "id" : "Extension.value[x].coding",
      "path" : "Extension.value[x].coding",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-RegionalSubDivisionCodes"
      }
    }]
  }
}

```
