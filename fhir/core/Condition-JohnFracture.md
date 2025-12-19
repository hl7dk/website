# John fraktur - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **John fraktur**

## Example Condition: John fraktur

Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Encounter Diagnosis

**code**: Pertrokantær femurfraktur, højresidig

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**onset**: 2022-04-26

**recordedDate**: 2022-04-27

**recorder**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)

**asserter**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "JohnFracture",
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
        "code" : "DS721+TUL1",
        "display" : "Pertrokantær femurfraktur, højresidig"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/john"
  },
  "onsetDateTime" : "2022-04-26",
  "recordedDate" : "2022-04-27",
  "recorder" : {
    "reference" : "Practitioner/AbrahamLaege"
  },
  "asserter" : {
    "reference" : "Practitioner/AbrahamLaege"
  }
}

```
