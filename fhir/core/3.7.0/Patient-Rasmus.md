# Rasmus Test Lauridsen - tvilling med Magnus - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Rasmus Test Lauridsen - tvilling med Magnus**

## Example Patient: Rasmus Test Lauridsen - tvilling med Magnus

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Rasmus Test Lauridsen (official) Male, DoB: 1990-04-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0504909989)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Contact Detail | Testgrusgraven 3, 2.th 3400 |
| Links: | * Also see: [Magnus Test Lauridsen (official) Male, DoB: 1990-04-05 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0504909995)](Patient-Magnus.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Rasmus",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0504909989"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Rasmus", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1990-04-05",
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
    "line" : ["Testgrusgraven 3, 2.th"],
    "postalCode" : "3400"
  }],
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/Magnus"
    },
    "type" : "seealso"
  }]
}

```
