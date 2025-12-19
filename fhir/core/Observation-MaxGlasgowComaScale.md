# MaxGlasgowComaScale - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MaxGlasgowComaScale**

## Example Observation: MaxGlasgowComaScale

Profile: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

**status**: Final

**code**: Glasgow comaskala

**subject**: [Mr. Max Test Berggren(official) Mand, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)](Patient-Max.md)

**effective**: 2023-08-08 13:30:00+0000

**value**: 13 score(Details: UCUM code{score} = '{score}')

> **referenceRange****high**: 8 score(Details: UCUM code{score} = '{score}')**type**:Severe TBI

> **referenceRange****low**: 9 score(Details: UCUM code{score} = '{score}')**high**: 12 score(Details: UCUM code{score} = '{score}')**type**:Moderate TBI

> **referenceRange****low**: 13 score(Details: UCUM code{score} = '{score}')**type**:Mild TBI

> **component****code**:Glasgow coma score motor**value**:Localizing pain

> **component****code**:Glasgow coma score verbal**value**:Confused

> **component****code**:Glasgow coma score eye opening**value**:Eyes open spontaneously



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "MaxGlasgowComaScale",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "248241002"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Max"
  },
  "effectiveDateTime" : "2023-08-08T13:30:00.000Z",
  "valueQuantity" : {
    "value" : 13,
    "unit" : "score",
    "system" : "http://unitsofmeasure.org",
    "code" : "{score}"
  },
  "referenceRange" : [
    {
      "high" : {
        "value" : 8,
        "unit" : "score",
        "system" : "http://unitsofmeasure.org",
        "code" : "{score}"
      },
      "type" : {
        "text" : "Severe TBI"
      }
    },
    {
      "low" : {
        "value" : 9,
        "unit" : "score",
        "system" : "http://unitsofmeasure.org",
        "code" : "{score}"
      },
      "high" : {
        "value" : 12,
        "unit" : "score",
        "system" : "http://unitsofmeasure.org",
        "code" : "{score}"
      },
      "type" : {
        "text" : "Moderate TBI"
      }
    },
    {
      "low" : {
        "value" : 13,
        "unit" : "score",
        "system" : "http://unitsofmeasure.org",
        "code" : "{score}"
      },
      "type" : {
        "text" : "Mild TBI"
      }
    }
  ],
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "9268-4",
            "display" : "Glasgow coma score motor"
          }
        ]
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "LA6566-9",
            "display" : "Localizing pain"
          }
        ]
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "9270-0",
            "display" : "Glasgow coma score verbal"
          }
        ]
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "LA6560-2",
            "display" : "Confused"
          }
        ]
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "9267-6",
            "display" : "Glasgow coma score eye opening"
          }
        ]
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "LA6556-0",
            "display" : "Eyes open spontaneously"
          }
        ]
      }
    }
  ]
}

```
