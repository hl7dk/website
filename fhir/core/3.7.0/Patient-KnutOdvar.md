# Knut Odvar Test Mosebryggersen - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knut Odvar Test Mosebryggersen**

## Example Patient: Knut Odvar Test Mosebryggersen

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Knut Odvar Test Mosebryggersen (official) Male, DoB: 1982-02-15 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1502829995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testgrusgraven 3, 3.tv 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "KnutOdvar",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1502829995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Mosebryggersen",
    "given" : ["Knut", "Odvar", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1982-02-15",
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
