# Kirsten som mor til Lars - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kirsten som mor til Lars**

## Example RelatedPerson: Kirsten som mor til Lars

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/2911829996

**patient**: [Lars Test Berggren (official) Male, DoB: 2015-05-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0505159995)](Patient-LarsBerggren.md)

**relationship**: mother

**name**: Kirsten Test Berggren (Official)

**gender**: Female

**birthDate**: 1982-11-29



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "KirstenRelatedToLars",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2911829996"
  }],
  "patient" : {
    "reference" : "Patient/LarsBerggren"
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
