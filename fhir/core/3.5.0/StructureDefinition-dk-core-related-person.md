# Danish Core Related Person Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Related Person Profile**

## Resource Profile: Danish Core Related Person Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreRelatedPerson |

 
HL7 Denmark core profile for a related person 

### Scope and usage

The Danish Core Related Person profile is intended to encapsulate the most common and basic data model of persons related to patients/persons in Danish healthcare systems covering both primary sector, secondary sector (specialty doctors and hospitals) and municipality cases. As such the profile should be usable in most Danish contexts. Note that the profile is usable for related persons to those that receive health and social care in municipalities, even in contexts where receivers of care are more commonly known as citizens ([DA] borgere).

Note, that professional relationships between a patient and a healthcare professional are expressed by other means e.g. through `Patient.generalPractitioner`.

Note also, that the intended use of Related Person is to describe a relationship, where privileges which might be associated to the relationship should be expressed by other means, e.g.the actual rights associated with being power of attorney, should be described in a legally binding document, and that document can be represented with the Consent resource.

Note furthermore, that a patients primary contact when possible should be expressed through `Patient.contact`. However, when this is not feasible Related Person may be used.

### Identifiers for related persons

This related person profile currently reflects the use of the established national Danish citizen identifiers called [CPR](https://cpr.dk/) and (where relevant) the use of replacement CPR numbers ([DA] Erstatnings-CPR-numre eller eCPR).

#### CPR-identifier

The element identifier.type describes the specific purpose of an identifier. It is desired to use the code 'NNDNK' from the CodeSystem [IdentifierType](https://terminology.hl7.org/4.0.0/CodeSystem-v2-0203.html) as the type for [DkCoreCprIdentifier](https://hl7.dk/fhir/core/StructureDefinition-dk-core-cpr-identifier.html). However, it is currently not recommended to use this code, due to known problems with the validation tool when validating the code 'NNDNK'.

#### eCPR-identifier

The element RelatedPerson.identifier includes two slices to represent eCPR. Each slice includes an identifier with requirements for the specific eCPR:

* For X-eCPR, the [DkCoreXeCprIdentifier](./StructureDefinition-dk-core-x-ecpr-identifier.md) must be used, which includes an OID as system and an invariant describing the requirements for the structure of the identifier, [based on guidelines from Danish Health Data Authority](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR).
* For D-eCPR, the [DkCoreDeCprIdentifier](./StructureDefinition-dk-core-d-ecpr-identifier.md) must be used, which includes a ValueSet of OID's that may be used as system. The OIDs represent the D-eCPR in general and D-eCPR for each of the five regions. Further, the identifier includes an invariant describing the requirements for the structure of the identifier, [based on guidelines from Danish Health Data Authority](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfordecentraleerstatningspersonnumre-D-eCPR).

### Relationship codes

The relationships in [DK Core Related Person Relationship Types](ValueSet-dk-core-RelatedPersonRelationshipTypes.md) are intended to cover the most common use cases within the Danish healthcare sector. For the relationship codes that are included from the general relationship codes [danish translations](CodeSystem-role-code-dk-supplement.md) are provided. In cases when other relationships need to be expressed, codes from the general [Related Person Relationship Type](http://hl7.org/fhir/R4/valueset-relatedperson-relationshiptype.html) or [HL7 Role Code System](http://terminology.hl7.org/CodeSystem/v3-RoleCode) should be used when possible. In the latter system is e.g. the code 'CCO', which is a clinical companion (DA: Servicehund).

### Use of security label on related persons

In case an implementation project needs to support name and address protection ([Navne- og adressebeskyttelse](https://www.retsinformation.dk/eli/lta/2017/646#idee1fb7b6-c7e7-429d-a738-881c5e486fa6)) of a danish citizen, it is recommended to support this with the security label as follows:

```
 <RelatedPerson xmlns="http://hl7.org/fhir">
  <meta>
    <security>
      <system value="http://terminology.hl7.org/CodeSystem/v3-Confidentiality"/>
      <code value="R"/>
      <display value="Restricted"/>
    </security>
  </meta>
...  [snip] ...
</RelatedPerson>

```

Use of this label should be interpreted according to the law, roughly meaning that only personnel using systems in public/official affairs are allowed to see name and address for the related person/citizen.

**Usages:**

* Refer to this Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md), [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md), [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md), [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md) and [Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)
* Examples for this Profile: [RelatedPerson/Child](RelatedPerson-Child.md) and [RelatedPerson/TwoRelations](RelatedPerson-TwoRelations.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-related-person)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-related-person.csv), [Excel](StructureDefinition-dk-core-related-person.xlsx), [Schematron](StructureDefinition-dk-core-related-person.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-related-person",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person",
  "version" : "3.5.0",
  "name" : "DkCoreRelatedPerson",
  "title" : "Danish Core Related Person Profile",
  "status" : "active",
  "date" : "2025-12-19T17:20:16+01:00",
  "publisher" : "HL7 Denmark",
  "contact" : [
    {
      "name" : "HL7 Denmark",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.hl7.dk"
        },
        {
          "system" : "email",
          "value" : "dk-affiliate@hl7.dk"
        }
      ]
    }
  ],
  "description" : "HL7 Denmark core profile for a related person",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RelatedPerson",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "RelatedPerson",
        "path" : "RelatedPerson"
      },
      {
        "id" : "RelatedPerson.identifier",
        "path" : "RelatedPerson.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "RelatedPerson.identifier:cpr",
        "path" : "RelatedPerson.identifier",
        "sliceName" : "cpr",
        "short" : "[DA] cpr-nummer, som det fremgår af CPR registeret",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-cpr-identifier"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.identifier:x-ecpr",
        "path" : "RelatedPerson.identifier",
        "sliceName" : "x-ecpr",
        "short" : "[DA] X-eCPR, tildelt fra den nationale eCPR service",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-x-ecpr-identifier"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.identifier:d-ecpr",
        "path" : "RelatedPerson.identifier",
        "sliceName" : "d-ecpr",
        "short" : "[DA] D-eCPR, decentral eCPR",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-d-ecpr-identifier"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.patient",
        "path" : "RelatedPerson.patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.relationship",
        "path" : "RelatedPerson.relationship",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-RelatedPersonRelationshipTypes"
        }
      },
      {
        "id" : "RelatedPerson.name",
        "path" : "RelatedPerson.name",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "use"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "RelatedPerson.name:official",
        "path" : "RelatedPerson.name",
        "sliceName" : "official",
        "short" : "[DA] Officielt navn, som det fremgår af CPR registeret",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "RelatedPerson.name:official.use",
        "path" : "RelatedPerson.name.use",
        "min" : 1,
        "fixedCode" : "official"
      },
      {
        "id" : "RelatedPerson.name:official.family",
        "path" : "RelatedPerson.name.family",
        "min" : 1
      }
    ]
  }
}

```
