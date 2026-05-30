# Ali Test Jensen - søn af Anders - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ali Test Jensen - søn af Anders**

## Example Patient: Ali Test Jensen - søn af Anders

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Ali Test Jensen (official) Male, DoB: 2022-01-31 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#3101229995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testtorvet 7 4700 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "AliJensen",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "3101229995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Jensen",
    "given" : ["Ali", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "2022-01-31",
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
