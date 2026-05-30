# Nancy som mor til Kirsten - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Nancy som mor til Kirsten**

## Example RelatedPerson: Nancy som mor til Kirsten

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/2512489996

**patient**: [Kirsten Test Berggren (official) Female, DoB: 1982-11-29 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2911829996)](Patient-KirstenBerggren.md)

**relationship**: mother

**name**: Nancy Ann Test Berggren (Official)

**gender**: Female

**birthDate**: 1948-12-25



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "NancyRelatedToKirsten",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2512489996"
  }],
  "patient" : {
    "reference" : "Patient/KirstenBerggren"
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
