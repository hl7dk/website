# Kirsten som mor til Gitte - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kirsten som mor til Gitte**

## Example RelatedPerson: Kirsten som mor til Gitte

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/2911829996

**patient**: [Gitte Nancy Test Berggren (official) Female, DoB: 2010-05-05 ( urn:oid:1.2.208.176.1.2#0505109990)](Patient-GitteNancy.md)

**relationship**: mother

**name**: Kirsten Test Berggren (Official)

**gender**: Female

**birthDate**: 1982-11-29



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "KirstenRelatedToGitte",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2911829996"
  }],
  "patient" : {
    "reference" : "Patient/GitteNancy"
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
