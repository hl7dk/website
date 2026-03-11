# Åge Test Berggren - far til Nancy - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Åge Test Berggren - far til Nancy**

## Example Patient: Åge Test Berggren - far til Nancy

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Åge Test Berggren (official) Male, DoB: 1922-11-02 ( urn:oid:1.2.208.176.1.2#0211223989)

-------

| | |
| :--- | :--- |
| Contact Detail | Testvænget 1 8000 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Aage",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0211223989"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Åge", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1922-11-02",
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
    "line" : ["Testvænget 1"],
    "postalCode" : "8000"
  }]
}

```
