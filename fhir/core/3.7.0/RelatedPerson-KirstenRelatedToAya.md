# Kirsten som mor til Aya - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kirsten som mor til Aya**

## Example RelatedPerson: Kirsten som mor til Aya

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/2911829996

**patient**: [Aya Test Berggren (official) Female, DoB: 2023-05-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0505239996)](Patient-AyaBerggren.md)

**relationship**: mother

**name**: Kirsten Test Berggren (Official)

**gender**: Female

**birthDate**: 1982-11-29



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "KirstenRelatedToAya",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2911829996"
  }],
  "patient" : {
    "reference" : "Patient/AyaBerggren"
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
    "given" : ["Kirsten", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1982-11-29"
}

```
