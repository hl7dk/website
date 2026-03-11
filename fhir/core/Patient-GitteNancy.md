# Gitte Nancy Test Berggren - datter af Kirsten - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Gitte Nancy Test Berggren - datter af Kirsten**

## Example Patient: Gitte Nancy Test Berggren - datter af Kirsten

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Gitte Nancy Test Berggren (official) Female, DoB: 2010-05-05 ( urn:oid:1.2.208.176.1.2#0505109990)

-------

| | |
| :--- | :--- |
| Contact Detail | Testpark Allé 48 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "GitteNancy",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0505109990"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Gitte", "Nancy", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2010-05-05",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0219"
        }]
      }
    },
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166:-2",
          "code" : "DK-84"
        }]
      }
    }],
    "line" : ["Testpark Allé 48"],
    "postalCode" : "3400"
  }]
}

```
