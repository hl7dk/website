# Pia Test Berggren - datter af Kirsten - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pia Test Berggren - datter af Kirsten**

## Example Patient: Pia Test Berggren - datter af Kirsten

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Pia Test Berggren (official) Female, DoB: 2005-05-05 ( urn:oid:1.2.208.176.1.2#0505059996)

-------

| | |
| :--- | :--- |
| Contact Detail | Testgaden 1 5230 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PiaBerggren",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0505059996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Pia", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2005-05-05",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0461"
        }]
      }
    },
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166:-2",
          "code" : "DK-83"
        }]
      }
    }],
    "line" : ["Testgaden 1"],
    "postalCode" : "5230"
  }]
}

```
