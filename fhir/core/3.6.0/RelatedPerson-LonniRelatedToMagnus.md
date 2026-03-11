# Lonni som mor til Magnus - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lonni som mor til Magnus**

## Example RelatedPerson: Lonni som mor til Magnus

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/0201609996

**patient**: [Magnus Test Lauridsen (official) Male, DoB: 1990-04-05 ( urn:oid:1.2.208.176.1.2#0504909995)](Patient-Magnus.md)

**relationship**: mother

**name**: Lonni Test Lauridsen (Official)

**gender**: Female

**birthDate**: 1960-01-02



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "LonniRelatedToMagnus",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201609996"
  }],
  "patient" : {
    "reference" : "Patient/Magnus"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "MTH"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Lonni", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1960-01-02"
}

```
