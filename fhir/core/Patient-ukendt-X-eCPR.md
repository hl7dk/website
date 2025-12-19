# Example of valid patient with a X-eCPR as identifier - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of valid patient with a X-eCPR as identifier**

## Example Patient: Example of valid patient with a X-eCPR as identifier

Profile: [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)

Madsen(temp) Kvinde, DoB: 1992-03-07 ( urn:oid:1.2.208.176.1.6.1.1#0703921VJ4)

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ukendt-X-eCPR",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.6.1.1",
      "value" : "0703921VJ4"
    }
  ],
  "name" : [
    {
      "use" : "temp",
      "text" : "Madsen",
      "family" : "Madsen"
    }
  ],
  "gender" : "female",
  "birthDate" : "1992-03-07"
}

```
