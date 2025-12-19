# Example of child as related person - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of child as related person**

## Example RelatedPerson: Example of child as related person

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/1502799995

**patient**: [Schwendlund Test Mosebryggersen(official) Mand, DoB: 1958-08-01 ( urn:oid:1.2.208.176.1.2#0108589995 (use: official, ))](Patient-283.md)

**relationship**: child

**name**: Odd Haugen Test Mosebryggersen (Official)

**gender**: Mand

**birthDate**: 1979-02-15



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "Child",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "1502799995"
    }
  ],
  "patient" : {
    "reference" : "Patient/283"
  },
  "relationship" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
          "code" : "CHILD"
        }
      ]
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Mosebryggersen",
      "given" : ["Odd Haugen Test"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1979-02-15"
}

```
