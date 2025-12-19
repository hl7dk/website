# MaxVitalSignsPanel - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MaxVitalSignsPanel**

## Example Observation: MaxVitalSignsPanel

Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Vital signs, weight, height, head circumference, oxygen saturation and BMI panel

**subject**: [Mr. Max Test Berggren(official) Mand, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)](Patient-Max.md)

**effective**: 2023-08-08 13:30:00+0000

**hasMember**: 

* [Observation Blood pressure panel with all children optional](Observation-MaxBloodPressure.md)
* [Observation Respiratory rate](Observation-MaxRespirationRate.md)
* [Observation Heart rate](Observation-MaxHeartRate.md)
* [Observation Body temperature](Observation-MaxBodyTemperature.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "MaxVitalSignsPanel",
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
        "code" : "85353-1",
        "display" : "Vital signs, weight, height, head circumference, oxygen saturation and BMI panel"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Max"
  },
  "effectiveDateTime" : "2023-08-08T13:30:00.000Z",
  "hasMember" : [
    {
      "reference" : "Observation/MaxBloodPressure"
    },
    {
      "reference" : "Observation/MaxRespirationRate"
    },
    {
      "reference" : "Observation/MaxHeartRate"
    },
    {
      "reference" : "Observation/MaxBodyTemperature"
    }
  ]
}

```
