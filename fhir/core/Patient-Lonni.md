# Lonni Test Lauridsen - mor i Lauridsen familien - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lonni Test Lauridsen - mor i Lauridsen familien**

## Example Patient: Lonni Test Lauridsen - mor i Lauridsen familien

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Lonni Test Lauridsen (official) Female, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609996)

-------

| | |
| :--- | :--- |
| Marital Status: | Married |
| Contact Detail | Testgrusgraven 3, 3.th 3400 |
| Links: | * Also see: [Einer Test Lauridsen (official) Male, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-Einer.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Lonni",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201609996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Lonni", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1960-01-02",
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
    "line" : ["Testgrusgraven 3, 3.th"],
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
      "reference" : "Patient/Einer"
    },
    "type" : "seealso"
  }]
}

```
