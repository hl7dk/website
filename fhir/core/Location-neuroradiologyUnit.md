# neuroradiologyUnit - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **neuroradiologyUnit**

## Example Location: neuroradiologyUnit

Profile: [Danish Core Location Profile](StructureDefinition-dk-core-location.md)

**status**: Active

**name**: Neuro unit

**mode**: Instance

**type**: Neuroradiology unit

**telecom**: [+4523292329](tel:+4523292329)

**physicalType**: Room

**managingOrganization**: [Organization: identifier = urn:oid:1.2.208.176.1.1#1133201000016001,http://cvr.dk#64942212; type = sundhedscenter](Organization-CenterForDiabetesTeamKvalitet.md)

**partOf**: [Location: status = active; description = Ambulance provided by Acme Corp; mode = kind; type = Ambulance; telecom = ph: +4523292833(Mobile); physicalType = Vehicle](Location-ambulance.md)



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "neuroradiologyUnit",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location"
    ]
  },
  "status" : "active",
  "name" : "Neuro unit",
  "mode" : "instance",
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
          "code" : "RNEU",
          "display" : "Neuroradiology unit"
        }
      ]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+4523292329"
    }
  ],
  "physicalType" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/location-physical-type",
        "code" : "ro",
        "display" : "Room"
      }
    ]
  },
  "managingOrganization" : {
    "reference" : "Organization/CenterForDiabetesTeamKvalitet"
  },
  "partOf" : {
    "reference" : "Location/ambulance"
  }
}

```
