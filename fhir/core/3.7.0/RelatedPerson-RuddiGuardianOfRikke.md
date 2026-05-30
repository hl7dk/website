# Ruddi som værge for Rikke - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ruddi som værge for Rikke**

## Example RelatedPerson: Ruddi som værge for Rikke

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/1502779995

**patient**: [Rikke Test Berggren (official) Female, DoB: 2020-05-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0505209996)](Patient-RikkeBerggren.md)

**relationship**: guardian

**name**: Ruddi Test Berggren (Official)

**gender**: Male

**birthDate**: 1977-02-15



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "RuddiGuardianOfRikke",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1502779995"
  }],
  "patient" : {
    "reference" : "Patient/RikkeBerggren"
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
    "given" : ["Ruddi", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1977-02-15"
}

```
