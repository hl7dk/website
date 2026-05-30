# DK CVR Organization instance of DkCoreOrganization - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK CVR Organization instance of DkCoreOrganization**

## Example Organization: DK CVR Organization instance of DkCoreOrganization

Profile: [Danish Core Organization Profile](StructureDefinition-dk-core-organization.md)

**identifier**: [DK Central Business Register (CVR)](NamingSystem-cvr.md)/64942212



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "dk-core-organization-1",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"]
  },
  "identifier" : [{
    "system" : "http://cvr.dk",
    "value" : "64942212"
  }]
}

```
