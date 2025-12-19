# Danish Core Practitioner Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Practitioner Profile**

## Resource Profile: Danish Core Practitioner Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCorePractitioner |

 
HL7 Denmark core profile for health professionals and other actors relevant in citizen and patient pathways 

### Scope and usage

The Danish Core Practitioner profile is intended to encapsulate the most common and basic data model of practitioners in Danish healthcare systems covering both primary sector, secondary sector (medical specialists ([DA] speciallæger) and hospitals) and municipality cases. As such the profile should be usable in most Danish contexts. Practitioner is broadly defined (just as it is in the original FHIR ressource), and may be used to define all the professionals involvel directly or indirectly in citizen and patient care.

Be especially aware that the Practitioner profile is only used for describing persons and their qualifications, independent of their current or previous professional roles. Use the international PractitionerRole ressource, if roles of a practitioner needs to be described. This also means that Practitioners are not classified as "Chief Physician" or other titles that denotes their position. The profile is simple and focuses on personal qualifications.

The qualification.code has an extendable ValueSet that includes all official authorizations as defined by [https://www.retsinformation.dk/eli/lta/2019/731](https://www.retsinformation.dk/eli/lta/2019/731), and derived from [http://autregwebservice.sst.dk/autregservice.asmx/GetAllProfessionGroups](http://autregwebservice.sst.dk/autregservice.asmx/GetAllProfessionGroups). In the original set, Code (5176) was not uniqe, and have been converted to 5176a and 5176b respectively. However, the official codes should not limit the use of the practioner profile. E.g. if you need to represent another professional group e.g. social worker OR if you need to represent a qualification, important for a local context e.g. that someone has completed advanced pressure ulcer care training you have different options. You may for example extend the valueSet, add the qualification as plain text, slice the qualification attribute or choose not to represent the qualification.

**Usages:**

* Derived from this Profile: [Danish IPA Core Practitioner Profile](StructureDefinition-ipa-dk-core-practitioner.md)
* Refer to this Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md), [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md), [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md), [Danish Core Patient Profile](StructureDefinition-dk-core-patient.md)...Show 2 more,[Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)and[Danish Core PractitionerRole Profile](StructureDefinition-dk-core-practitioner-role.md)
* Examples for this Profile: [Practitioner/42cb9200-f421-4d08-8391-7d51a2503cb4](Practitioner-42cb9200-f421-4d08-8391-7d51a2503cb4.md), [Practitioner/AbrahamLaege](Practitioner-AbrahamLaege.md), [Practitioner/HanneSocialraadgiver](Practitioner-HanneSocialraadgiver.md) and [Practitioner/SidselSygeplejerske](Practitioner-SidselSygeplejerske.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-practitioner.csv), [Excel](StructureDefinition-dk-core-practitioner.xlsx), [Schematron](StructureDefinition-dk-core-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-practitioner",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
  "version" : "3.5.0",
  "name" : "DkCorePractitioner",
  "title" : "Danish Core Practitioner Profile",
  "status" : "active",
  "date" : "2025-12-19T17:27:08+01:00",
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
  "description" : "HL7 Denmark core profile for health professionals and other actors relevant in citizen and patient pathways",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner"
      },
      {
        "id" : "Practitioner.qualification",
        "path" : "Practitioner.qualification",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "identifier.system"
            }
          ],
          "description" : "Slice based on the identifier.system value which allows for official qualifications to\nDeclaring the slices, and their cardinalities, to allow a KL-code and a SNOMED CT code",
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Practitioner.qualification:officialHealthAuthorization",
        "path" : "Practitioner.qualification",
        "sliceName" : "officialHealthAuthorization",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Practitioner.qualification:officialHealthAuthorization.identifier",
        "path" : "Practitioner.qualification.identifier",
        "short" : "[DA] Autorisationskode, som specificeret af autorisationsregisteret",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-authorization-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Practitioner.qualification:officialHealthAuthorization.code",
        "path" : "Practitioner.qualification.code",
        "short" : "[DA] Kode for kvalifikation, som specificeret af autorisationsregisteret",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/DkCoreProfessionGroupValueSet"
        }
      }
    ]
  }
}

```
