# ElsePainVRS - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ElsePainVRS**

## Example Observation: ElsePainVRS

Profile: [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)

**status**: Final

**code**: Verbal Rating Scale pain intensity score

**subject**: [Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-else.md)

**effective**: 2020-06-01

**value**: Severe pain (finding)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ElsePainVRS",
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
        "code" : "1144798005",
        "display" : "Verbal Rating Scale pain intensity score"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "effectiveDateTime" : "2020-06-01",
  "valueCodeableConcept" : {
    "coding" : [
      {
        "system" : "http://localSystem.dk",
        "code" : "d253770d-ce0b-4320-9806-b8fbe9e5af8a",
        "userSelected" : true
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "76948002",
        "display" : "Severe pain (finding)"
      }
    ]
  }
}

```
