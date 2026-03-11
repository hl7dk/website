# Schwendlund som far til Torre - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Schwendlund som far til Torre**

## Example RelatedPerson: Schwendlund som far til Torre

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/0108589995

**patient**: [Torre Test Mosebryggersen (official) Male, DoB: 1990-04-01 ( urn:oid:1.2.208.176.1.2#0104909989)](Patient-Torre.md)

**relationship**: father

**name**: Schwendlund Test Mosebryggersen (Official)

**gender**: Male

**birthDate**: 1958-08-01



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "SchwendlundRelatedToTorre",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0108589995"
  }],
  "patient" : {
    "reference" : "Patient/Torre"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "FTH"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Mosebryggersen",
    "given" : ["Schwendlund", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1958-08-01"
}

```
