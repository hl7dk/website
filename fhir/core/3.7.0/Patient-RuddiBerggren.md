# Ruddi Test Berggren - søn af Nancy - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ruddi Test Berggren - søn af Nancy**

## Example Patient: Ruddi Test Berggren - søn af Nancy

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Ruddi Test Berggren (official) Male, DoB: 1977-02-15 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1502779995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testjulianevej 3 8000 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "RuddiBerggren",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1502779995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Ruddi", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1977-02-15",
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
