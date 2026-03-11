# Kaja Test Hansen - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kaja Test Hansen**

## Example Patient: Kaja Test Hansen

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Kaja Test Hansen (official) Female, DoB: 2000-03-21 ( urn:oid:1.2.208.176.1.2#2103009996)

-------

| | |
| :--- | :--- |
| Contact Detail | Testsøjlerne 4 6200 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "KajaHansen",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2103009996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Hansen",
    "given" : ["Kaja", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2000-03-21",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0580"
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
    "line" : ["Testsøjlerne 4"],
    "postalCode" : "6200"
  }]
}

```
