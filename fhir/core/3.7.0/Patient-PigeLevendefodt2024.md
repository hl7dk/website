# Pige Test Levendefødt (2024) - tvilling - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pige Test Levendefødt (2024) - tvilling**

## Example Patient: Pige Test Levendefødt (2024) - tvilling

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Pige Test Levendefødt (official) Female, DoB: 2024-06-13 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1306249996)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Links: | * Also see: [Dreng Test Levendefødt (official) Male, DoB: 2024-06-13 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1306249995)](Patient-DrengLevendefodt2024.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PigeLevendefodt2024",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1306249996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Levendefødt",
    "given" : ["Pige", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2024-06-13",
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/DrengLevendefodt2024"
    },
    "type" : "seealso"
  }]
}

```
