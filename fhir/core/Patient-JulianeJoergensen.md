# Juliane Test Jørgensen - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Juliane Test Jørgensen**

## Example Patient: Juliane Test Jørgensen

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Juliane Test Jørgensen (official) Female, DoB: 2010-10-11 ( urn:oid:1.2.208.176.1.2#1110109996)

-------

| | |
| :--- | :--- |
| Contact Detail | TestVardevej 350 6800 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "JulianeJoergensen",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1110109996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Jørgensen",
    "given" : ["Juliane", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2010-10-11",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0573"
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
    "line" : ["TestVardevej 350"],
    "postalCode" : "6800"
  }]
}

```
