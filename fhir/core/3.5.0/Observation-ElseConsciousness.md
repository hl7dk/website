# ElseConsciousness - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElseConsciousness**

## Example Observation: ElseConsciousness

Profile: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

**status**: Final

**code**: Bevidsthedsniveau

**subject**: [Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-else.md)

**effective**: 2023-09-12 17:45:00+0000

**performer**: [Practitioner Sidsel Andersen](Practitioner-SidselSygeplejerske.md)

**value**: reagerer på smerte

**method**: Reported (qualifier value)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ElseConsciousness",
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
        "code" : "6942003"
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
