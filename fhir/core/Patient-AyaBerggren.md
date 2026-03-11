# Aya Test Berggren - datter af Kirsten - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aya Test Berggren - datter af Kirsten**

## Example Patient: Aya Test Berggren - datter af Kirsten

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Aya Test Berggren (official) Female, DoB: 2023-05-05 ( urn:oid:1.2.208.176.1.2#0505239996)

-------

| | |
| :--- | :--- |
| Contact Detail | Testpark Allé 48 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "AyaBerggren",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0505239996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Aya", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2023-05-05",
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
