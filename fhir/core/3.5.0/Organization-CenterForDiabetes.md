# Center for Diabetes - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Center for Diabetes**

## Example Organization: Center for Diabetes

Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

**identifier**: `urn:oid:1.2.208.176.1.1`/633271000016006, `http://cvr.dk`/64942212

**type**: sundhedscenter



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "CenterForDiabetes",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.1",
      "value" : "633271000016006"
    },
    {
      "system" : "http://cvr.dk",
      "value" : "64942212"
    }
  ],
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "264361005"
        }
      ]
    }
  ]
}

```
