# Dreng Test Levendefødt (2016) - tvilling - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dreng Test Levendefødt (2016) - tvilling**

## Example Patient: Dreng Test Levendefødt (2016) - tvilling

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Dreng Test Levendefødt (official) Male, DoB: 2016-10-13 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1310169995)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Links: | * Also see: [Pige Test Levendefødt (official) Female, DoB: 2016-10-13 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1310169996)](Patient-PigeLevendefodt2016.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "DrengLevendefodt2016",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "1310169995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Levendefødt",
    "given" : ["Dreng", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "2016-10-13",
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/PigeLevendefodt2016"
    },
    "type" : "seealso"
  }]
}

```
