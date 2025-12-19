# Licensed physician in primary care - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Licensed physician in primary care**

## Example PractitionerRole: Licensed physician in primary care

Profile: [Danish Core PractitionerRole Profile](StructureDefinition-dk-core-practitioner-role.md)

**active**: true

**practitioner**: [Practitioner Abraham Murakami](Practitioner-AbrahamLaege.md)

**organization**: [Organization: identifier = urn:oid:1.2.208.176.1.1#633271000016006,http://cvr.dk#64942212; type = sundhedscenter](Organization-CenterForDiabetes.md)

**code**: Primary Care Provider

**specialty**: 408443003

> **availableTime****daysOfWeek**: Mandag, Tirsdag, Onsdag**availableStartTime**: 09:00:00**availableEndTime**: 15:30:00

> **availableTime****daysOfWeek**: Torsdag, Fredag**availableStartTime**: 09:00:00**availableEndTime**: 12:00:00



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "AbrahamPractitionerRole",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role"
    ]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/AbrahamLaege"
  },
  "organization" : {
    "reference" : "Organization/CenterForDiabetes"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v2-0286",
          "code" : "PP"
        }
      ]
    }
  ],
  "specialty" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct/554471000005108/version/20240331",
          "code" : "408443003"
        }
      ]
    }
  ],
  "availableTime" : [
    {
      "daysOfWeek" : ["mon", "tue", "wed"],
      "availableStartTime" : "09:00:00",
      "availableEndTime" : "15:30:00"
    },
    {
      "daysOfWeek" : ["thu", "fri"],
      "availableStartTime" : "09:00:00",
      "availableEndTime" : "12:00:00"
    }
  ]
}

```
