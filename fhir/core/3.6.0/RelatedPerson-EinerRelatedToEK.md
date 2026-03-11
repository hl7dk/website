# Einer som far til EK - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Einer som far til EK**

## Example RelatedPerson: Einer som far til EK

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/0201609995

**patient**: [EK Test Lauridsen (official) Male, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#0201919995)](Patient-EK.md)

**relationship**: father

**name**: Einer Test Lauridsen (Official)

**gender**: Male

**birthDate**: 1960-01-02



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "EinerRelatedToEK",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201609995"
  }],
  "patient" : {
    "reference" : "Patient/EK"
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
