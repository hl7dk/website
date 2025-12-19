# Poul Hansen - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Poul Hansen**

## Example Patient: Poul Hansen

Profiles: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md), [PhdPatient](http://hl7.org/fhir/uv/phd/STU1.1/StructureDefinition-PhdPatient.html)

Poul Hansen (no stated gender), DoB Unknown ( National unique individual identifier)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "Poul",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
      "http://hl7.org/fhir/uv/phd/StructureDefinition/PhdPatient"
    ]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "NI"
          }
        ]
      },
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "3001749995"
    }
  ],
  "name" : [
    {
      "text" : "Poul Hansen",
      "family" : "Hansen",
      "given" : ["Poul"]
    }
  ]
}

```
