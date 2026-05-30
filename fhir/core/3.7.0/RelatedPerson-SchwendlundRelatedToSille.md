# Schwendlund som far til Sille - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Schwendlund som far til Sille**

## Example RelatedPerson: Schwendlund som far til Sille

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/0108589995

**patient**: [Sille June Test Mosebrygersen (official) Female, DoB: 1988-06-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0506889996)](Patient-SilleJune.md)

**relationship**: father

**name**: Schwendlund Test Mosebryggersen (Official)

**gender**: Male

**birthDate**: 1958-08-01



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "SchwendlundRelatedToSille",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0108589995"
  }],
  "patient" : {
    "reference" : "Patient/SilleJune"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "FTH"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Mosebryggersen",
    "given" : ["Schwendlund", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1958-08-01"
}

```
