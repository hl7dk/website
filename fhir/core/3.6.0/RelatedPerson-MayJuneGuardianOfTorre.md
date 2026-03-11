# May June som værge for Torre - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **May June som værge for Torre**

## Example RelatedPerson: May June som værge for Torre

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/0108629996

**patient**: [Torre Test Mosebryggersen (official) Male, DoB: 1990-04-01 ( urn:oid:1.2.208.176.1.2#0104909989)](Patient-Torre.md)

**relationship**: guardian

**name**: May June Test Moberg (Official)

**gender**: Female

**birthDate**: 1962-08-01



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "MayJuneGuardianOfTorre",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0108629996"
  }],
  "patient" : {
    "reference" : "Patient/Torre"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "GUARD"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Moberg",
    "given" : ["May", "June", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1962-08-01"
}

```
