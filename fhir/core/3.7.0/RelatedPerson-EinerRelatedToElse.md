# Einer som far til Else - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Einer som far til Else**

## Example RelatedPerson: Einer som far til Else

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: [DK Central Person Registry (CPR)](NamingSystem-cpr.md)/0201609995

**patient**: [Else Test Lauridsen (official) Female, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919990)](Patient-ElseLauridsen.md)

**relationship**: father

**name**: Einer Test Lauridsen (Official)

**gender**: Male

**birthDate**: 1960-01-02



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "EinerRelatedToElse",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201609995"
  }],
  "patient" : {
    "reference" : "Patient/ElseLauridsen"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "FTH"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Einer", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1960-01-02"
}

```
