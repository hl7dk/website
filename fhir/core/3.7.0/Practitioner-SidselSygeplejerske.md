# SidselSygeplejerske - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SidselSygeplejerske**

## Example Practitioner: SidselSygeplejerske

Profile: [Danish Core Practitioner Profile](StructureDefinition-dk-core-practitioner.md)

**name**: Sidsel Andersen

### Qualifications

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Identifier** | **Code** | **Period** |
| * | `https://autregweb.sst.dk`/CBDJ6 | Sygeplejerske | 2010-06-01 --> 2028-12-31 |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "SidselSygeplejerske",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"]
  },
  "name" : [{
    "text" : "Sidsel Andersen",
    "family" : "Andersen",
    "given" : ["Sidsel"]
  }],
  "qualification" : [{
    "identifier" : [{
      "system" : "https://autregweb.sst.dk",
      "value" : "CBDJ6"
    }],
    "code" : {
      "coding" : [{
        "system" : "http://hl7.dk/fhir/core/CodeSystem/DkCoreProfessionGroupCodes",
        "code" : "5166",
        "display" : "Sygeplejerske"
      }]
    },
    "period" : {
      "start" : "2010-06-01",
      "end" : "2028-12-31"
    }
  }]
}

```
