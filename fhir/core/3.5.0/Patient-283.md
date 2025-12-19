# Example of valid patient with full address - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of valid patient with full address**

## Example Patient: Example of valid patient with full address

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Schwendlund Test Mosebryggersen(official) Mand, DoB: 1958-08-01 ( urn:oid:1.2.208.176.1.2#0108589995 (use: official, ))

-------

| | |
| :--- | :--- |
| Marital Status: | unmarried |
| Contact Detail | Nordre Ringgade 3 Aarhus 8000 DK (home) |
| Links: | * General Practitioner: Peter Sønderby (Identifier: `urn:oid:1.2.208.176.1.1`/79641000016006)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "283",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ]
  },
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "0108589995"
    }
  ],
  "name" : [
    {
      "use" : "official",
      "text" : "Schwendlund Test Mosebryggersen",
      "family" : "Mosebryggersen",
      "given" : ["Schwendlund", "Test"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1958-08-01",
  "address" : [
    {
      "extension" : [
        {
          "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
                "code" : "0330"
              }
            ]
          }
        },
        {
          "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-regional-subdivision-codes",
                "code" : "DK-85"
              }
            ]
          }
        },
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/address-official",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "urn:iso:std:iso:3166",
                "code" : "DK"
              }
            ]
          }
        }
      ],
      "use" : "home",
      "type" : "postal",
      "line" : ["Nordre Ringgade 3"],
      "city" : "Aarhus",
      "postalCode" : "8000",
      "country" : "DK"
    }
  ],
  "maritalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-MaritalStatus",
        "code" : "U",
        "display" : "unmarried"
      }
    ]
  },
  "generalPractitioner" : [
    {
      "identifier" : {
        "system" : "urn:oid:1.2.208.176.1.1",
        "value" : "79641000016006"
      },
      "display" : "Peter Sønderby"
    }
  ]
}

```
