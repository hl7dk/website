# ElseUrinStix - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElseUrinStix**

## Example Observation: ElseUrinStix

Profile: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

**status**: Final

**code**: U—Leukocytter; arb.k.(proc.) = ?

**subject**: [Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-else.md)

**effective**: 2023-09-12 17:45:00+0000

**value**: Påviselige leukocytter

**method**: Measurement technique (qualifier value)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ElseUrinStix",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
    ]
  },
  "status" : "final",
  "code" : {
    "coding" : [
      {
        "system" : "http://npu-terminology.org",
        "code" : "NPU03987",
        "display" : "U—Leukocytter; arb.k.(proc.) = ?"
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "252385000",
        "display" : "Urine dipstick for leukocyte esterase (procedure)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "effectiveDateTime" : "2023-09-12T17:45:00.000Z",
  "valueString" : "Påviselige leukocytter",
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
