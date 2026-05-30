# Muhammed Test Abdul - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Muhammed Test Abdul**

## Example Patient: Muhammed Test Abdul

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Muhammed Test Abdul (official) Male, DoB: 2005-07-10 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1007059995)

-------

| | |
| :--- | :--- |
| Contact Detail | TestHøjen 5 5900 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MuhammedAbdul",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1007059995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Abdul",
    "given" : ["Muhammed", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "2005-07-10",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0482"
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
    "line" : ["TestHøjen 5"],
    "postalCode" : "5900"
  }]
}

```
