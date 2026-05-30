# Placeholder for a physician - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Placeholder for a physician**

## Example PractitionerRole: Placeholder for a physician

Profile: [Danish Core PractitionerRole Profile](StructureDefinition-dk-core-practitioner-role.md)

**active**: true

**organization**: [Organization: identifier = urn:oid:1.2.208.176.1.1#633271000016006,http://cvr.dk#DK Central Business Register (CVR)#64942212; type = Health center](Organization-CenterForDiabetes.md)

**code**: Primary Care Provider

**specialty**: 408443003



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "PlaceholderPractitionerRole",
  "meta" : {
    "profile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role"]
  },
  "active" : true,
  "organization" : {
    "reference" : "Organization/CenterForDiabetes"
  },
  "code" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0286",
      "code" : "PP"
    }]
  }],
  "specialty" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct/554471000005108",
      "code" : "408443003"
    }]
  }]
}

```
