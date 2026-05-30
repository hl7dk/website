# Anders Test Jensen - far til Ali - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anders Test Jensen - far til Ali**

## Example Patient: Anders Test Jensen - far til Ali

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Anders Test Jensen (official) Male, DoB: 1997-03-31 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#3103979995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testtorvet 7 4700 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "AndersJensen",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "3103979995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Jensen",
    "given" : ["Anders", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1997-03-31",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0370"
        }]
      }
    },
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166:-2",
          "code" : "DK-85"
        }]
      }
    }],
    "line" : ["Testtorvet 7"],
    "postalCode" : "4700"
  }]
}

```
