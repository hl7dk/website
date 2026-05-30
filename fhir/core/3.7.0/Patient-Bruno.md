# Bruno Test Elmer - bror til Nancy - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bruno Test Elmer - bror til Nancy**

## Example Patient: Bruno Test Elmer - bror til Nancy

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Bruno Test Elmer (official) Male, DoB: 1947-09-25 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2509479989)

-------

| | |
| :--- | :--- |
| Contact Detail | Testdrømmehaven 48 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Bruno",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2509479989"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Elmer",
    "given" : ["Bruno", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1947-09-25",
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
    "line" : ["Testdrømmehaven 48"],
    "postalCode" : "3400"
  }]
}

```
