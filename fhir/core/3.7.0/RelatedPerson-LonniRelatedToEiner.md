# Lonni som ægtefælle til Einer - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lonni som ægtefælle til Einer**

## Example RelatedPerson: Lonni som ægtefælle til Einer

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/0201609996

**patient**: [Einer Test Lauridsen (official) Male, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201609995)](Patient-Einer.md)

**relationship**: spouse

**name**: Lonni Test Lauridsen (Official)

**gender**: Female

**birthDate**: 1960-01-02



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "LonniRelatedToEiner",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201609996"
  }],
  "patient" : {
    "reference" : "Patient/Einer"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "SPS"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Lonni", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1960-01-02"
}

```
