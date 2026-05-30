# Rikke Test Berggren - datter af Kirsten - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Rikke Test Berggren - datter af Kirsten**

## Example Patient: Rikke Test Berggren - datter af Kirsten

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Rikke Test Berggren (official) Female, DoB: 2020-05-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0505209996)

-------

| | |
| :--- | :--- |
| Contact Detail | Testjulianevej 3 8000 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "RikkeBerggren",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0505209996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Rikke", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2020-05-05",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0751"
        }]
      }
    },
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166:-2",
          "code" : "DK-82"
        }]
      }
    }],
    "line" : ["Testjulianevej 3"],
    "postalCode" : "8000"
  }]
}

```
