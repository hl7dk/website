# Einer Test Lauridsen - far i Lauridsen familien - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Einer Test Lauridsen - far i Lauridsen familien**

## Example Patient: Einer Test Lauridsen - far i Lauridsen familien

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Einer Test Lauridsen (official) Male, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201609995)

-------

| | |
| :--- | :--- |
| Marital Status: | Married |
| Contact Detail | Testgrusgraven 3, 3.th 3400 |
| Links: | * Also see: [Lonni Test Lauridsen (official) Female, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201609996)](Patient-Lonni.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Einer",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201609995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Einer", "Test"]
  }],
  "gender" : "male",
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
      "reference" : "Patient/Lonni"
    },
    "type" : "seealso"
  }]
}

```
