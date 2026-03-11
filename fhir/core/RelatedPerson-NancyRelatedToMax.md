# Nancy som mor til Max - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Nancy som mor til Max**

## Example RelatedPerson: Nancy som mor til Max

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/2512489996

**patient**: [Max Test Berggren (official) Male, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)](Patient-MaxBerggren.md)

**relationship**: mother

**name**: Nancy Ann Test Berggren (Official)

**gender**: Female

**birthDate**: 1948-12-25



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "NancyRelatedToMax",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2512489996"
  }],
  "patient" : {
    "reference" : "Patient/MaxBerggren"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "MTH"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Nancy", "Ann", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1948-12-25"
}

```
