# ElseRespirationRate - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElseRespirationRate**

## Example Observation: ElseRespirationRate

Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Respiratory rate

**subject**: [Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-else.md)

**effective**: 2023-09-12 17:45:00+0000

**performer**: [Practitioner Sidsel Andersen](Practitioner-SidselSygeplejerske.md)

**value**: 19 /min(Details: UCUM code/min = '/min')

**method**: Measurement technique (qualifier value)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ElseRespirationRate",
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
        "code" : "9279-1"
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "86290005"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "effectiveDateTime" : "2023-09-12T17:45:00.000Z",
  "performer" : [
    {
      "reference" : "Practitioner/SidselSygeplejerske"
    }
  ],
  "valueQuantity" : {
    "value" : 19,
    "unit" : "/min",
    "system" : "http://unitsofmeasure.org",
    "code" : "/min"
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
