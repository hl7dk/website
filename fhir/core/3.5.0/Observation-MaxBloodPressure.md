# MaxBloodPressure - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MaxBloodPressure**

## Example Observation: MaxBloodPressure

Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Blood pressure panel with all children optional

**subject**: [Mr. Max Test Berggren(official) Mand, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)](Patient-Max.md)

**effective**: 2023-08-08 13:30:00+0000

**method**: Measurement technique (qualifier value)

> **component****code**:Systolic blood pressure**value**: 156 mmHg(Details: UCUM codemm[Hg] = 'mm[Hg]')

> **component****code**:Diastolic blood pressure**value**: 78 mmHg(Details: UCUM codemm[Hg] = 'mm[Hg]')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "MaxBloodPressure",
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
        "code" : "85354-9"
      },
      {
        "system" : "urn:oid:1.2.208.176.2.4",
        "code" : "ZZ3160"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Max"
  },
  "effectiveDateTime" : "2023-08-08T13:30:00.000Z",
  "method" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "272391002",
        "display" : "Measurement technique (qualifier value)"
      }
    ]
  },
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8480-6"
          },
          {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "407554009"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 156,
        "unit" : "mmHg",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "8462-4"
          },
          {
            "system" : "http://snomed.info/sct",
            "version" : "http://snomed.info/sct/554471000005108",
            "code" : "407555005"
          }
        ]
      },
      "valueQuantity" : {
        "value" : 78,
        "unit" : "mmHg",
        "system" : "http://unitsofmeasure.org",
        "code" : "mm[Hg]"
      }
    }
  ]
}

```
