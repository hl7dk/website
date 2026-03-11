# Anders som far til Ali - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anders som far til Ali**

## Example RelatedPerson: Anders som far til Ali

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/3103979995

**patient**: [Ali Test Jensen (official) Male, DoB: 2022-01-31 ( urn:oid:1.2.208.176.1.2#3101229995)](Patient-AliJensen.md)

**relationship**: father

**name**: Anders Test Jensen (Official)

**gender**: Male

**birthDate**: 1997-03-31



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "AndersRelatedToAli",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "3103979995"
  }],
  "patient" : {
    "reference" : "Patient/AliJensen"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "FTH"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Jensen",
    "given" : ["Anders", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1997-03-31"
}

```
