# Pige Test Levendefødt (2016) - tvilling - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pige Test Levendefødt (2016) - tvilling**

## Example Patient: Pige Test Levendefødt (2016) - tvilling

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Pige Test Levendefødt (official) Female, DoB: 2016-10-13 ( urn:oid:1.2.208.176.1.2#1310169996)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Links: | * Also see: [Dreng Test Levendefødt (official) Male, DoB: 2016-10-13 ( urn:oid:1.2.208.176.1.2#1310169995)](Patient-DrengLevendefodt2016.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PigeLevendefodt2016",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1310169996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Levendefødt",
    "given" : ["Pige", "Test"]
  }],
  "gender" : "female",
  "birthDate" : "2016-10-13",
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/DrengLevendefodt2016"
    },
    "type" : "seealso"
  }]
}

```
