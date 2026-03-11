# Cæsar Test Østergård - markeret som afdød - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cæsar Test Østergård - markeret som afdød**

## Example Patient: Cæsar Test Østergård - markeret som afdød

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Cæsar Test Østergård (official) Male, DoB: 1914-11-23 ( urn:oid:1.2.208.176.1.2#2311143995)

-------

| | |
| :--- | :--- |
| Deceased: | true |
| Contact Detail | Testhjemmet 1 5230 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "CaesarOestergaard",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2311143995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Østergård",
    "given" : ["Cæsar", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1914-11-23",
  "deceasedBoolean" : true,
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
    "line" : ["Testhjemmet 1"],
    "postalCode" : "5230"
  }]
}

```
