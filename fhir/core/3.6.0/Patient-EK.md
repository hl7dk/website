# EK Test Lauridsen - trilling med Ellen & Else - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EK Test Lauridsen - trilling med Ellen & Else**

## Example Patient: EK Test Lauridsen - trilling med Ellen & Else

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

EK Test Lauridsen (official) Male, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#0201919995)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Contact Detail | Testgrusgraven 3, 2.th 3400 |
| Links: | * Also see: [Else Test Lauridsen (official) Female, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#0201919990)](Patient-ElseLauridsen.md)
* Also see: [Ellen Louise Test Lauridsen (official) Female, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#0201919996)](Patient-EllenLouise.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "EK",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201919995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["EK", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1991-01-02",
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
      "reference" : "Patient/ElseLauridsen"
    },
    "type" : "seealso"
  },
  {
    "other" : {
      "reference" : "Patient/EllenLouise"
    },
    "type" : "seealso"
  }]
}

```
