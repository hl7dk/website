# Brita Test Berggren - datter af Nancy - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Brita Test Berggren - datter af Nancy**

## Example Patient: Brita Test Berggren - datter af Nancy

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Brita Test Berggren (official) Female, DoB: 1981-09-15 ( urn:oid:1.2.208.176.1.2#1509819996)

-------

| | |
| :--- | :--- |
| Contact Detail | Testpark Allé 48 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "BritaBerggren",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1509819996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Brita", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1981-09-15",
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
