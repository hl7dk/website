# Request for nursing care of John. - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Request for nursing care of John.**

## Example ServiceRequest: Request for nursing care of John.

Profile: [Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)

**status**: Aktiv

**intent**: Plan

**category**: hjemmesygepleje

**priority**: Routine

**code**: sårbehandling og -pleje

**orderDetail**: overvågning af forbindingskift/sårpleje

**subject**: [Johnny Mand, DoB: 1960-01-02 ( urn:oid:1.2.208.176.1.2#0201609995)](Patient-john.md)



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "MaxServiceRequest",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-person-servicerequest"
    ]
  },
  "status" : "active",
  "intent" : "plan",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "658161000005107",
          "display" : "hjemmesygepleje"
        }
      ]
    }
  ],
  "priority" : "routine",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "code" : "225358003",
        "display" : "sårbehandling og -pleje"
      }
    ]
  },
  "orderDetail" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "410379003",
          "display" : "overvågning af forbindingskift/sårpleje"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/john"
  }
}

```
