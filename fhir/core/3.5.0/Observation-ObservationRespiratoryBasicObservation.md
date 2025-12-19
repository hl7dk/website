# John's Respiratory rate measurement (Basic observation) - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **John's Respiratory rate measurement (Basic observation)**

## Example Observation: John's Respiratory rate measurement (Basic observation)

Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Respiratory rate

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**effective**: 2023-11-20 18:00:00+0100

**performer**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)

**value**: 50 /min(Details: UCUM code/min = '/min')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationRespiratoryBasicObservation",
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
        "code" : "9279-1",
        "display" : "Respiratory rate"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/john"
  },
  "effectiveDateTime" : "2023-11-20T18:00:00+01:00",
  "performer" : [
    {
      "reference" : "Practitioner/AbrahamLaege"
    }
  ],
  "valueQuantity" : {
    "value" : 50,
    "unit" : "/min",
    "system" : "http://unitsofmeasure.org",
    "code" : "/min"
  }
}

```
