# Example of a patient with confidential address and name - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a patient with confidential address and name**

## Example Patient: Example of a patient with confidential address and name

This instance is an example of a Danish citizen who has requested name and address protection (Navne- og adressebeskyttelse), why the instance is marked with a security label. Only personnel using systems in public/official affairs are allowed to see name and address for the citizen, why these information are included in the profile.

Resource "Confidential"

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Security Labels: http://terminology.hl7.org/CodeSystem/v3-Confidentiality

**identifier**: id: 1502779995

**name**: Hans Hansen (OFFICIAL)

**gender**: male

**birthDate**: 1976-08-09

**address**: Julianevej 22 6000 Kolding (HOME)



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Confidential",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ],
    "security" : [
      {
        "code" : "R",
        "display" : "Restricted"
      }
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "1502779995"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "text" : "Ruddi Test Berggren",
      "family" : "Berggren",
      "given" : ["Ruddi", "Test"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1977-02-15",
  "address" : [
    {
      "use" : "home",
      "line" : ["Julianevej 22"],
      "city" : "Kolding",
      "postalCode" : "6000"
    }
  ]
}

```
