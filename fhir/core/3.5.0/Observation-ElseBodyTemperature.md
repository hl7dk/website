# ElseBodyTemperature - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElseBodyTemperature**

## Example Observation: ElseBodyTemperature

Profile: [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

**status**: Final

**category**: Vital Signs

**code**: Body temperature

**subject**: [Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-else.md)

**effective**: 2023-09-12 17:45:00+0000

**performer**: [Practitioner Sidsel Andersen](Practitioner-SidselSygeplejerske.md)

**value**: 38.7 grader celcius(Details: UCUM codeCel = 'Cel')

**method**: Measurement technique (qualifier value)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ElseBodyTemperature",
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
        "code" : "8310-5"
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "276885007"
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
    "value" : 38.7,
    "unit" : "grader celcius",
    "system" : "http://unitsofmeasure.org",
    "code" : "Cel"
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
