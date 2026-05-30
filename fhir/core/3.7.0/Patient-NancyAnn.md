# Nancy Ann Test Berggren - bedstemor i Berggren familien - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Nancy Ann Test Berggren - bedstemor i Berggren familien**

## Example Patient: Nancy Ann Test Berggren - bedstemor i Berggren familien

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Nancy Ann Test Berggren (official) Female, DoB: 1948-12-25 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996)

-------

| | |
| :--- | :--- |
| Contact Detail | Testpark Allé 48 3400 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "NancyAnn",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2512489996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Nancy", "Ann", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "1948-12-25",
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
    "line" : ["Testpark Allé 48"],
    "postalCode" : "3400"
  }]
}

```
