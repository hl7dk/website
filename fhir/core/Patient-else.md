# Example of a woman of childbearing age - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a woman of childbearing age**

## Example Patient: Example of a woman of childbearing age

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Else Test Lauridsen(official) Kvinde, DoB: 1991-02-02 ( urn:oid:1.2.208.176.1.2#0201919990)

-------

| | |
| :--- | :--- |
| Marital Status: | Married |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "else",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "0201919990"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "text" : "Else Test Lauridsen",
      "family" : "Lauridsen",
      "given" : ["Else", "Test"]
    }
  ],
  "gender" : "female",
  "birthDate" : "1991-02-02",
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-MaritalStatus",
        "code" : "M",
        "display" : "Married"
      }
    ]
  }
}

```
