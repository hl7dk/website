# MaxConsciousness - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MaxConsciousness**

## Example Observation: MaxConsciousness

Profile: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Level of consciousness

**subject**: [Mr. Max Test Berggren(official) Mand, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)](Patient-Max.md)

**effective**: 2023-08-08 13:30:00+0000

**value**: reagerer på smerte

**method**: Reported (qualifier value)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "MaxConsciousness",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
    ]
  },
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "vital-signs"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "80288-4"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Max"
  },
  "effectiveDateTime" : "2023-08-08T13:30:00.000Z",
  "valueCodeableConcept" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "450847001"
      }
    ]
  },
  "method" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "733985002",
        "display" : "Reported (qualifier value)"
      }
    ]
  }
}

```
