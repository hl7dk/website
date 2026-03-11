# Bruno som bror til Nancy - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bruno som bror til Nancy**

## Example RelatedPerson: Bruno som bror til Nancy

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/2509479989

**patient**: [Nancy Ann Test Berggren (official) Female, DoB: 1948-12-25 ( urn:oid:1.2.208.176.1.2#2512489996)](Patient-NancyAnn.md)

**relationship**: sibling

**name**: Bruno Test Elmer (Official)

**gender**: Male

**birthDate**: 1947-09-25



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "BrunoRelatedToNancy",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2509479989"
  }],
  "patient" : {
    "reference" : "Patient/NancyAnn"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "SIB"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Elmer",
    "given" : ["Bruno", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1947-09-25"
}

```
