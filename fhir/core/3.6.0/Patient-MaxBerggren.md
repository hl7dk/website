# Max Test Berggren - søn af Nancy - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Max Test Berggren - søn af Nancy**

## Example Patient: Max Test Berggren - søn af Nancy

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Max Test Berggren (official) Male, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testervej 18 6200 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MaxBerggren",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0107729995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Max", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1972-07-01",
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
    "line" : ["Testervej 18"],
    "postalCode" : "6200"
  }]
}

```
