# Example of valid patient unknown identifier registry - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of valid patient unknown identifier registry**

## Example Patient: Example of valid patient unknown identifier registry

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Anders(temp) Mand, DoB: 1983-06-07 ( http://rn.dk#0706830VJ9)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ukendt",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "http://rn.dk",
      "value" : "0706830VJ9"
    }
  ],
  "name" : [
    {
      "use" : "temp",
      "text" : "Anders",
      "_family" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
            "valueCode" : "unknown"
          }
        ]
      },
      "given" : ["Anders"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1983-06-07"
}

```
