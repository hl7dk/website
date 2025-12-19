# ambulance - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ambulance**

## Example Location: ambulance

Profile: [Danish Core Location Profile](StructureDefinition-dk-core-location.md)

**status**: Active

**description**: Ambulance provided by Acme Corp

**mode**: Kind

**type**: Ambulance

**telecom**: [+4523292833](tel:+4523292833)

**physicalType**: Vehicle

**managingOrganization**: [Organization: identifier = urn:oid:1.2.208.176.1.1#12345678901,http://cvr.dk#26919991,https://www.gs1.org/gln#5798002472264,https://kombit.dk/sts/organisation#urn:uuid:a107fd1e-9f35-422c-9d1e-add097bbf4a6; type = apotek](Organization-b08997bb-4476-4dd0-84dd-2e297f809364.md)



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "ambulance",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location"
    ]
  },
  "status" : "active",
  "description" : "Ambulance provided by Acme Corp",
  "mode" : "kind",
  "type" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
          "code" : "AMB",
          "display" : "Ambulance"
        }
      ]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+4523292833",
      "use" : "mobile"
    }
  ],
  "physicalType" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/location-physical-type",
        "code" : "ve",
        "display" : "Vehicle"
      }
    ]
  },
  "managingOrganization" : {
    "reference" : "Organization/b08997bb-4476-4dd0-84dd-2e297f809364"
  }
}

```
