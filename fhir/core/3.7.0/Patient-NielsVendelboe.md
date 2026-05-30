# Niels Test Vendelboe - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Niels Test Vendelboe**

## Example Patient: Niels Test Vendelboe

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Niels Test Vendelboe (official) Male, DoB: 1974-01-30 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#3001749995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testkajen 2 9210 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "NielsVendelboe",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "3001749995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Vendelboe",
    "given" : ["Niels", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1974-01-30",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0851"
        }]
      }
    },
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166:-2",
          "code" : "DK-81"
        }]
      }
    }],
    "line" : ["Testkajen 2"],
    "postalCode" : "9210"
  }]
}

```
