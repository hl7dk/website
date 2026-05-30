# Ellen Louise Test Lauridsen - trilling med EK & Else - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ellen Louise Test Lauridsen - trilling med EK & Else**

## Example Patient: Ellen Louise Test Lauridsen - trilling med EK & Else

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Ellen Louise Test Lauridsen (official) Female, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919996)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Contact Detail | Testgrusgraven 3, 5.th 3400 |
| Links: | * Also see: [EK Test Lauridsen (official) Male, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919995)](Patient-EK.md)
* Also see: [Else Test Lauridsen (official) Female, DoB: 1991-01-02 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0201919990)](Patient-ElseLauridsen.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "EllenLouise",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0201919996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Lauridsen",
    "given" : ["Ellen", "Louise", "Test"]
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
    "line" : ["Testgrusgraven 3, 5.th"],
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
      "reference" : "Patient/ElseLauridsen"
    },
    "type" : "seealso"
  }]
}

```
