# MaxSaturation - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MaxSaturation**

## Example Observation: MaxSaturation

Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Oxygen saturation in Arterial blood

**subject**: [Mr. Max Test Berggren(official) Mand, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)](Patient-Max.md)

**effective**: 2023-08-08 13:30:00+0000

**value**: 99 %(Details: UCUM code% = '%')

**method**: Measurement technique (qualifier value)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "MaxSaturation",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
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
        "code" : "2708-6",
        "display" : "Oxygen saturation in Arterial blood"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Max"
  },
  "effectiveDateTime" : "2023-08-08T13:30:00.000Z",
  "valueQuantity" : {
    "value" : 99,
    "unit" : "%",
    "system" : "http://unitsofmeasure.org",
    "code" : "%"
  },
  "method" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "272391002",
        "display" : "Measurement technique (qualifier value)"
      }
    ]
  }
}

```
