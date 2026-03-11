# Åge som far til Nancy - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Åge som far til Nancy**

## Example RelatedPerson: Åge som far til Nancy

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/0211223989

**patient**: [Nancy Ann Test Berggren (official) Female, DoB: 1948-12-25 ( urn:oid:1.2.208.176.1.2#2512489996)](Patient-NancyAnn.md)

**relationship**: father

**name**: Åge Test Berggren (Official)

**gender**: Male

**birthDate**: 1922-11-02



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "AageRelatedToNancy",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0211223989"
  }],
  "patient" : {
    "reference" : "Patient/NancyAnn"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "FTH"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Åge", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1922-11-02"
}

```
