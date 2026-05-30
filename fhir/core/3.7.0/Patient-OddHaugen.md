# Odd Haugen Test Mosebryggersen - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Odd Haugen Test Mosebryggersen**

## Example Patient: Odd Haugen Test Mosebryggersen

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Odd Haugen Test Mosebryggersen (official) Male, DoB: 1979-02-15 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1502799995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testgrusgraven 3, 3.tv 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "OddHaugen",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1502799995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Mosebryggersen",
    "given" : ["Odd", "Haugen", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1979-02-15",
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
  }]
}

```
