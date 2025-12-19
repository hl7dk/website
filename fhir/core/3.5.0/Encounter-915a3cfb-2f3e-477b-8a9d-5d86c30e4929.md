# A closed inpatient encounter - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **A closed inpatient encounter**

## Example Encounter: A closed inpatient encounter

Profile: [Danish Core Encounter Profile](StructureDefinition-dk-core-encounter.md)

**CareProvider**: [Organization Ortopædkirurgisk sengeafsnit](Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.md)

**status**: Finished

**class**: [ActCode: IMP](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-IMP) (inpatient encounter)

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)

**period**: 2022-04-27 08:50:00+0100 --> 2022-04-28 14:00:00+0100

> **diagnosis****condition**:[Condition Pertrokantær femurfraktur, højresidig](Condition-JohnFracture.md)**rank**: 1

> **diagnosis****condition**:[Condition Type 2-diabetes](Condition-JohnDiabetes.md)**rank**: 2

**serviceProvider**: [Organization Ortopædkirurgisk sengeafdeling](Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.md)



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "915a3cfb-2f3e-477b-8a9d-5d86c30e4929",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-encounter"
    ]
  },
  "extension" : [
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-care-provider",
      "valueReference" : {
        "reference" : "Organization/19f9ee18-7677-4caf-88fe-8f6df2f2906e"
      }
    }
  ],
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "IMP"
  },
  "subject" : {
    "reference" : "Patient/john"
  },
  "period" : {
    "start" : "2022-04-27T08:50:00.0000+01:00",
    "end" : "2022-04-28T14:00:00.0000+01:00"
  },
  "diagnosis" : [
    {
      "condition" : {
        "reference" : "Condition/JohnFracture"
      },
      "rank" : 1
    },
    {
      "condition" : {
        "reference" : "Condition/JohnDiabetes"
      },
      "rank" : 2
    }
  ],
  "serviceProvider" : {
    "reference" : "Organization/8510eec9-180b-4e9c-95b6-02fad9f853d3"
  }
}

```
