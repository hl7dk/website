# LaegerneHasserisBymidte - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **LaegerneHasserisBymidte**

## Example Organization: LaegerneHasserisBymidte

Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

**identifier**: `urn:oid:1.2.208.176.1.1`/61741000016007, `urn:oid:1.2.208.176.1.4`/77410

**type**: lægepraksis

**name**: Lægerne Hasseris Bymidte

**telecom**: ph: 98182233



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "LaegerneHasserisBymidte",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.1",
      "value" : "61741000016007"
    },
    {
      "system" : "urn:oid:1.2.208.176.1.4",
      "value" : "77410"
    }
  ],
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "394761003"
        }
      ]
    }
  ],
  "name" : "Lægerne Hasseris Bymidte",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "98182233"
    }
  ]
}

```
