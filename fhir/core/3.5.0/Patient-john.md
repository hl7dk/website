# Example of valid patient with multiple names - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of valid patient with multiple names**

## Example Patient: Example of valid patient with multiple names

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)

-------

| | |
| :--- | :--- |
| Alt. Name: | Mr. John Christian Meyerhofen(Official) |
| Links: | * General Practitioner: Charlottenlund Lægehus (Identifier: `urn:oid:1.2.208.176.1.1`/487341000016005)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "john",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "0201609995"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "text" : "Mr. John Christian Meyerhofen",
      "family" : "Meyerhofen",
      "given" : ["John", "Christian"],
      "prefix" : ["Mr"]
    },
    {
      "use" : "usual",
      "text" : "Johnny",
      "given" : ["Johnny"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1960-01-02",
  "generalPractitioner" : [
    {
      "identifier" : {
        "system" : "urn:oid:1.2.208.176.1.1",
        "value" : "487341000016005"
      },
      "display" : "Charlottenlund Lægehus"
    }
  ]
}

```
