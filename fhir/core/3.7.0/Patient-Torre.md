# Torre Test Mosebryggersen - tvilling med Sverre - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Torre Test Mosebryggersen - tvilling med Sverre**

## Example Patient: Torre Test Mosebryggersen - tvilling med Sverre

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Torre Test Mosebryggersen (official) Male, DoB: 1990-04-01 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0104909989)

-------

| | |
| :--- | :--- |
| Multiple Birth: | true |
| Contact Detail | Testgrusgraven 3, 3.tv 3400 |
| Links: | * Also see: [Sverre Test Mosebryggersen (official) Male, DoB: 1990-04-01 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#0104909995)](Patient-Sverre.md)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Torre",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "0104909989"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Mosebryggersen",
    "given" : ["Torre", "Test"]
  }],
  "gender" : "male",
  "birthDate" : "1990-04-01",
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
    "line" : ["Testgrusgraven 3, 3.tv"],
    "postalCode" : "3400"
  }],
  "multipleBirthBoolean" : true,
  "link" : [{
    "other" : {
      "reference" : "Patient/Sverre"
    },
    "type" : "seealso"
  }]
}

```
