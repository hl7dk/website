# Else Graviditet - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Else Graviditet**

## Example Condition: Else Graviditet

Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Encounter Diagnosis

**code**: Graviditet, førstegangsfødende

**subject**: [Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-else.md)

**recordedDate**: 2021-07-03



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ElseGraviditet",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
    ]
  },
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "active"
      }
    ]
  },
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
        "code" : "confirmed"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "encounter-diagnosis"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:1.2.208.176.2.4.12",
        "code" : "DZ340",
        "display" : "Graviditet, førstegangsfødende"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/else"
  },
  "recordedDate" : "2021-07-03"
}

```
