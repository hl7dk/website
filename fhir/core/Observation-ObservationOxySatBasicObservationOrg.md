# John's oxygen saturation measurement (Basic observation) - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **John's oxygen saturation measurement (Basic observation)**

## Example Observation: John's oxygen saturation measurement (Basic observation)

Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Oxygen saturation in Arterial blood

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**effective**: 2023-11-01 12:00:00+0100

**performer**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)

**value**: 97 %(Details: UCUM code% = '%')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationOxySatBasicObservationOrg",
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
      },
      {
        "system" : "urn:iso:std:iso:11073:10101",
        "code" : "150456",
        "display" : "MDC_PULS_OXIM_SAT_O2"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/john"
  },
  "effectiveDateTime" : "2023-11-01T12:00:00+01:00",
  "performer" : [
    {
      "reference" : "Practitioner/AbrahamLaege"
    }
  ],
  "valueQuantity" : {
    "value" : 97,
    "unit" : "%",
    "system" : "http://unitsofmeasure.org",
    "code" : "%"
  }
}

```
