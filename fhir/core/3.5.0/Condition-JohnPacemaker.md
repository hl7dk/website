# John pacemaker - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **John pacemaker**

## Example Condition: John pacemaker

Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Cardiac pacemaker in situ

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**recordedDate**: 2021-05-01

**recorder**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "JohnPacemaker",
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
          "code" : "problem-list-item"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "441509002",
        "display" : "Cardiac pacemaker in situ"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/john"
  },
  "recordedDate" : "2021-05-01",
  "recorder" : {
    "reference" : "Practitioner/AbrahamLaege"
  }
}

```
