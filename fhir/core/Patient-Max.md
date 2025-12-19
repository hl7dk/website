# Example of valid patient with danish marital status - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of valid patient with danish marital status**

## Example Patient: Example of valid patient with danish marital status

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Mr. Max Test Berggren(official) Mand, DoB: 1972-07-01 ( urn:oid:1.2.208.176.1.2#0107729995)

-------

| | |
| :--- | :--- |
| Marital Status: | Registreret partnerskab |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Max",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "0107729995"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "text" : "Mr. Max Test Berggren",
      "family" : "Berggren",
      "given" : ["Max", "Test"],
      "prefix" : ["Mr"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1972-07-01",
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-marital-status",
        "code" : "P"
      }
    ]
  }
}

```
