# Schwendlund som far til Odd - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Schwendlund som far til Odd**

## Example RelatedPerson: Schwendlund som far til Odd

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/0108589995

**patient**: [Odd Haugen Test Mosebryggersen (official) Male, DoB: 1979-02-15 ( urn:oid:1.2.208.176.1.2#1502799995)](Patient-OddHaugen.md)

**relationship**: father

**name**: Schwendlund Test Mosebryggersen (Official)

**gender**: Male

**birthDate**: 1958-08-01



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "SchwendlundRelatedToOdd",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0108589995"
  }],
  "patient" : {
    "reference" : "Patient/OddHaugen"
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
