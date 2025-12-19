# SidselSygeplejerske - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SidselSygeplejerske**

## Example Practitioner: SidselSygeplejerske

Profile: [Danish Core Practitioner Profile](StructureDefinition-dk-core-practitioner.md)

**name**: Sidsel Andersen

### Qualifications

| | |
| :--- | :--- |
| - | **Code** |
| * | Sygeplejerske |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "SidselSygeplejerske",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
    ]
  },
  "name" : [
    {
      "text" : "Sidsel Andersen",
      "family" : "Andersen",
      "given" : ["Sidsel"]
    }
  ],
  "qualification" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes",
            "code" : "5166",
            "display" : "Sygeplejerske"
          }
        ]
      }
    }
  ]
}

```
