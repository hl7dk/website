# Bo Test Vestergaard - HL7 FHIR Implementation Guide: DK Core v3.6.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bo Test Vestergaard**

## Example Patient: Bo Test Vestergaard

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Bo Test Vestergaard (official) Male, DoB: 2015-12-02 ( urn:oid:1.2.208.176.1.2#0212159995)

-------

| | |
| :--- | :--- |
| Contact Detail | Testvejen 251 9970 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "BoVestergaard",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0212159995"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Vestergaard",
    "given" : ["Bo", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "2015-12-02",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0813"
        }]
      }
    },
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166:-2",
          "code" : "DK-81"
        }]
      }
    }],
    "line" : ["Testvejen 251"],
    "postalCode" : "9970"
  }]
}

```
