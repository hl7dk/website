# Nancy som værge for Brita - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Nancy som værge for Brita**

## Example RelatedPerson: Nancy som værge for Brita

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/2512489996

**patient**: [Brita Test Berggren (official) Female, DoB: 1981-09-15 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1509819996)](Patient-BritaBerggren.md)

**relationship**: guardian

**name**: Nancy Ann Test Berggren (Official)

**gender**: Female

**birthDate**: 1948-12-25



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "NancyGuardianOfBrita",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2512489996"
  }],
  "patient" : {
    "reference" : "Patient/BritaBerggren"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "GUARD"
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
