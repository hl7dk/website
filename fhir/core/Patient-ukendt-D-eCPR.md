# Example of valid patient with a D-eCPR as identifier - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of valid patient with a D-eCPR as identifier**

## Example Patient: Example of valid patient with a D-eCPR as identifier

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Peter(temp) Mand, DoB Unknown ( urn:oid:1.2.208.176.1.6.1.3.177#1206550VK9)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ukendt-D-eCPR",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.6.1.3.177",
      "value" : "1206550VK9"
    }
  ],
  "name" : [
    {
      "use" : "temp",
      "text" : "Peter",
      "_family" : {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
            "valueCode" : "unknown"
          }
        ]
      },
      "given" : ["Peter"]
    }
  ],
  "gender" : "male"
}

```
