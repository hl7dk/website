# Example of a related person with two relations - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a related person with two relations**

## Example RelatedPerson: Example of a related person with two relations

Profile: [Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)

**identifier**: `urn:oid:1.2.208.176.1.2`/0201919996

**patient**: [Schwendlund Test Mosebryggersen(official) Mand, DoB: 1958-08-01 ( urn:oid:1.2.208.176.1.2#0108589995 (use: official, ))](Patient-283.md)

**relationship**: Nabo, Primær omsorgsperson

**name**: Ellen Louise Test Lauridsen (Official)

**gender**: Kvinde

**birthDate**: 1991-01-02



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "TwoRelations",
  "meta" : {
    "profile" : [
      "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:1.2.208.176.1.2",
      "value" : "0201919996"
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
          "code" : "NBOR"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://hl7.dk/fhir/core/CodeSystem/dk-relatedperson-relationshipcodes",
          "code" : "PRICARE"
        }
      ]
    }
  ],
  "name" : [
    {
      "use" : "official",
      "family" : "Lauridsen",
      "given" : ["Ellen Louise Test"]
    }
  ],
  "gender" : "female",
  "birthDate" : "1991-01-02"
}

```
