# Sille June Test Mosebrygersen - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sille June Test Mosebrygersen**

## Example Patient: Sille June Test Mosebrygersen

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Sille June Test Mosebrygersen (official) Female, DoB: 1988-06-05 ( urn:oid:1.2.208.176.1.2#0506889996)

-------

| | |
| :--- | :--- |
| Contact Detail | Testgrusgraven 3, 3.tv 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "SilleJune",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0506889996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Mosebrygersen",
    "given" : ["Sille", "June", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1988-06-05",
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
