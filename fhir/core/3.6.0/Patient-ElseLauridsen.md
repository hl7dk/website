# Else Test Lauridsen - trilling med EK & Ellen - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Else Test Lauridsen - trilling med EK & Ellen**

## Example Patient: Else Test Lauridsen - trilling med EK & Ellen

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Else Test Lauridsen (official) Female, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#0201919990)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Contact Detail | Testgrusgraven 3, 1.th 3400 |
| Links: | * Also see: [EK Test Lauridsen (official) Male, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#0201919995)](Patient-EK.md)
* Also see: [Ellen Louise Test Lauridsen (official) Female, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#0201919996)](Patient-EllenLouise.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ElseLauridsen",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201919990"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Else", "Test"]
  }],
  "gender" : "female",
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
    "line" : ["Testgrusgraven 3, 1.th"],
    "postalCode" : "3400"
  }],
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/EK"
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
