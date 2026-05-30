# Sverre Test Mosebryggersen - tvilling med Torre - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sverre Test Mosebryggersen - tvilling med Torre**

## Example Patient: Sverre Test Mosebryggersen - tvilling med Torre

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Sverre Test Mosebryggersen (official) Male, DoB: 1990-04-01 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0104909995)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Contact Detail | Testgrusgraven 3, 3.tv 3400 |
| Links: | * Also see: [Torre Test Mosebryggersen (official) Male, DoB: 1990-04-01 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0104909989)](Patient-Torre.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Sverre",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0104909995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Mosebryggersen",
    "given" : ["Sverre", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1990-04-01",
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
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/Torre"
    },
    "type" : "seealso"
  }]
}

```
