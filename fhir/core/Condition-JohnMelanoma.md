# John mistanke om Modermærkekræft - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **John mistanke om Modermærkekræft**

## Example Condition: John mistanke om Modermærkekræft

Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Unconfirmed

**category**: Encounter Diagnosis

**code**: Modermærkekræft i huden

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**recordedDate**: 2021-05-01

**recorder**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)

**asserter**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "JohnMelanoma",
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
        "code" : "unconfirmed"
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
        "code" : "DC43",
        "display" : "Modermærkekræft i huden"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/john"
  },
  "recordedDate" : "2021-05-01",
  "recorder" : {
    "reference" : "Practitioner/AbrahamLaege"
  },
  "asserter" : {
    "reference" : "Practitioner/AbrahamLaege"
  }
}

```
