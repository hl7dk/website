# Example hospital sub-department - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example hospital sub-department**

## Example Organization: Example hospital sub-department

Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

**identifier**: `urn:oid:1.2.208.176.1.1`/12345678901, `https://www.gs1.org/gln`/5798002472264

**type**: operationsgang

**name**: Ortopædkirurgisk sengeafsnit

**partOf**: [Organization Ortopædkirurgisk sengeafdeling](Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.md)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "19f9ee18-7677-4caf-88fe-8f6df2f2906e",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.1",
      "value" : "12345678901"
    },
    {
      "system" : "https://www.gs1.org/gln",
      "value" : "5798002472264"
    }
  ],
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "551611000005102"
        }
      ]
    }
  ],
  "name" : "Ortopædkirurgisk sengeafsnit",
  "partOf" : {
    "reference" : "Organization/8510eec9-180b-4e9c-95b6-02fad9f853d3"
  }
}

```
