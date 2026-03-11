# May June Test Moberg - mor i Mosebryggersen familien - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **May June Test Moberg - mor i Mosebryggersen familien**

## Example Patient: May June Test Moberg - mor i Mosebryggersen familien

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

May June Test Moberg (official) Female, DoB: 1962-08-01 ( urn:oid:1.2.208.176.1.2#0108629996)

-------

| | |
| :--- | :--- |
| Marital Status: | Married |
| Contact Detail | Testgrusgraven 3, 3.tv 3400 |
| Links: | * Also see: [Schwendlund Test Mosebryggersen (official) Male, DoB: 1958-08-01 ( urn:oid:1.2.208.176.1.2#0108589995)](Patient-Schwendlund.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MayJune",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0108629996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Moberg",
    "given" : ["May", "June", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1962-08-01",
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
    "line" : ["Testgrusgraven 3, 3.tv"],
    "postalCode" : "3400"
  }],
  "maritalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-MaritalStatus",
      "code" : "M",
      "display" : "Married"
    }]
  },
  "link" : [{
    "other" : {
      "reference" : "Patient/Schwendlund"
    },
    "type" : "seealso"
  }]
}

```
