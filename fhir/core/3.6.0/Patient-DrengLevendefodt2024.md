# Dreng Test Levendefødt (2024) - tvilling - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dreng Test Levendefødt (2024) - tvilling**

## Example Patient: Dreng Test Levendefødt (2024) - tvilling

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Dreng Test Levendefødt (official) Male, DoB: 2024-06-13 ( urn:oid:1.2.208.176.1.2#1306249995)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Links: | * Also see: [Pige Test Levendefødt (official) Female, DoB: 2024-06-13 ( urn:oid:1.2.208.176.1.2#1306249996)](Patient-PigeLevendefodt2024.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "DrengLevendefodt2024",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1306249995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Levendefødt",
    "given" : ["Dreng", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "2024-06-13",
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/PigeLevendefodt2024"
    },
    "type" : "seealso"
  }]
}

```
