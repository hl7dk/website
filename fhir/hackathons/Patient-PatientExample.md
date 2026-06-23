# PatientExample - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PatientExample**

## Example Patient: PatientExample

Profile: [TelemedicinePatient](StructureDefinition-TelemedicinePatient.md)

Nancy Ann Berggren (official) Unknown, DoB Unknown ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2512489996 (use: official, ))

-------

| | |
| :--- | :--- |
| Contact Detail | * NemSMS
* eBoks
* Tårnhøjvej 47 Landet Aalborg Øst 9220 Danmark (home)
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PatientExample",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/hackathons/StructureDefinition/TelemedicinePatient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "urn:oid:1.2.208.176.1.2",
    "value" : "2512489996"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Berggren",
    "given" : ["Nancy", "Ann"]
  }],
  "telecom" : [{
    "system" : "other",
    "value" : "NemSMS"
  },
  {
    "system" : "other",
    "value" : "eBoks"
  }],
  "gender" : "unknown",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes",
          "code" : "0330"
        }]
      }
    },
    {
      "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-regional-subdivision-codes",
          "code" : "DK-85"
        }]
      }
    }],
    "use" : "home",
    "line" : ["Tårnhøjvej 47", "Landet"],
    "city" : "Aalborg Øst",
    "postalCode" : "9220",
    "country" : "Danmark"
  }]
}

```
