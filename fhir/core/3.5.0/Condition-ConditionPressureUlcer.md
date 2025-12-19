# John tryksår - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **John tryksår**

## Example Condition: John tryksår

Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md)

**ConditionLastAssertedDate**: 2020-12-12

**clinicalStatus**: Active

**category**: Problem List Item

**code**: Tryksår i stadium 2, siddende på venstre lår. 4cmx5cm, dybde 3mm, ingen infektion.

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**recordedDate**: 2020-06-05



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "ConditionPressureUlcer",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/ConditionLastAssertedDate",
      "valueDateTime" : "2020-12-12"
    }
  ],
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "active"
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
        "system" : "urn:oid:1.2.208.176.2.21",
        "code" : "I4.4",
        "display" : "Problemer med tryksår"
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "1163220007",
        "display" : "Pressure injury stage II"
      }
    ],
    "text" : "Tryksår i stadium 2, siddende på venstre lår. 4cmx5cm, dybde 3mm, ingen infektion."
  },
  "subject" : {
    "reference" : "Patient/john"
  },
  "recordedDate" : "2020-06-05"
}

```
