# Danish Core Person ServiceRequest Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Person ServiceRequest Profile**

## Resource Profile: Danish Core Person ServiceRequest Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-person-servicerequest | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCorePersonServiceRequest |

 
HL7 Denmark core profile for requesting a service, such as diagnostic investigations, nursing services, treatments, and more for a Patient. 

### Scope and usage

The Danish Core ServiceRequest profile is intended to support requests for services within the health sector, e.g. cross sector. In dk-core, the ServiceRequest resource have been constrained to only contain [DkCorePatient](StructureDefinition-dk-core-patient.md) and Group as subject of the request. This is chosen to ensure a focused and relevant ValueSet for the ServiceRequest.code.

Notice that the international ValueSet for priority have been reduced to contain only two values i.e. 'routine' and 'asap' because only these two concepts are of widespread use in Denmark. 'routine' is the same as the Danish 'elektiv'. 'asap' is the same as the danish 'akut'.

The reasonCode has been sliced and refers to different recommended systems. These are the same as in the [DkCoreCondition](./StructureDefinition-dk-core-condition.md) profile. Read the documentation there, before using the reasonCode in this profile.

#### Category, code and orderDetail

In the ServiceRequest resource there are three levels of categorization.

**Category:** The top level is the ServiceRequest.category, which classifies the services on a high level. Category is for finding the different kinds of ServiceRequests in a consistent way, and can contain more than one code, and relate to different aspects. In Denmark, it is recommended to include one of the NSP/SOR Practice setting codes, as one of the category codes. The codes are included in this implementation guide as an example binding. The official source for NSP/SOR Practice setting codes is the SNOMED CT codes presented [here](https://svn.medcom.dk/svn/releases/Standarder/IHE/OID/DK-IHE_Metadata-Common_Code_systems-Value_sets.xlsx).

Another example of the use of category, related to a different aspect, could be to categorize the ServiceRequest into 'virtual' or 'in-person'.

**Code:** The middle level is ServiceRequest.code, which identifies the service being requested. This is the most important code, and it is recommended to populate this attribute whenever possible. The service request code should semantically be a procedure code. However, be aware that this does not nessesarily mean that it has to be populated with a very specific code. In cross-sector use cases, it is often the case that the requesting organization does not nessesarily know the exact procedure - but they know the kind of procedure or where to start. For example, a general practitioner could use the code 284394000 'Examination of spine' when having a patient with back pain that needs to be examined at the hospital. It would not be expected that the general practitioner would detail a final procedure actually performed in the hospital such as 178625001 'Primary lumbar microdiscectomy'. A good example of SNOMED CT procedure codes, can be found in the international patient summary see the [IPS implementation guide](https://build.fhir.org/ig/HL7/fhir-ips/ValueSet-procedures-uv-ips.html)

**OrderDetail:** The most detailed level is ServiceRequest.orderDetail, which may include additional detail or instruction concerning how the service should be delivered. This can be specific to each organization and does not necessary have to be included when sending a ServiceRequest, but can be enriched by the performer of the service.

**Usages:**

* Examples for this Profile: [ServiceRequest/JohnsServiceRequest](ServiceRequest-JohnsServiceRequest.md) and [ServiceRequest/MaxServiceRequest](ServiceRequest-MaxServiceRequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-person-servicerequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-person-servicerequest.csv), [Excel](StructureDefinition-dk-core-person-servicerequest.xlsx), [Schematron](StructureDefinition-dk-core-person-servicerequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-person-servicerequest",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-person-servicerequest",
  "version" : "3.5.0",
  "name" : "DkCorePersonServiceRequest",
  "title" : "Danish Core Person ServiceRequest Profile",
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
  "description" : "HL7 Denmark core profile for requesting a service, such as diagnostic investigations, nursing services, treatments, and more for a Patient.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "quick",
      "uri" : "http://siframework.org/cqf",
      "name" : "Quality Improvement and Clinical Knowledge (QUICK)"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ServiceRequest",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ServiceRequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ServiceRequest",
        "path" : "ServiceRequest"
      },
      {
        "id" : "ServiceRequest.category",
        "path" : "ServiceRequest.category",
        "binding" : {
          "strength" : "example",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-servicerequest-codes"
        }
      },
      {
        "id" : "ServiceRequest.priority",
        "path" : "ServiceRequest.priority",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-priority-codes"
        }
      },
      {
        "id" : "ServiceRequest.subject",
        "path" : "ServiceRequest.subject",
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
        "id" : "ServiceRequest.requester",
        "path" : "ServiceRequest.requester",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.performer",
        "path" : "ServiceRequest.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person",
              "http://hl7.org/fhir/StructureDefinition/HealthcareService",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://hl7.org/fhir/StructureDefinition/CareTeam"
            ]
          }
        ]
      },
      {
        "id" : "ServiceRequest.reasonCode.coding",
        "path" : "ServiceRequest.reasonCode.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "description" : "Slice based on the code.system value which allow different code-systems to represent a reason",
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "Reason code, [DA] begrundelses-kode"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:FSIIIConditionCode",
        "path" : "ServiceRequest.reasonCode.coding",
        "sliceName" : "FSIIIConditionCode",
        "short" : "[DA] FSIII tilstandskode",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:FSIIIConditionCode.system",
        "path" : "ServiceRequest.reasonCode.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.21"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:SCTCode",
        "path" : "ServiceRequest.reasonCode.coding",
        "sliceName" : "SCTCode",
        "short" : "SNOMED CT kode, typisk klinisk fund eller procedure",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:SCTCode.system",
        "path" : "ServiceRequest.reasonCode.coding.system",
        "min" : 1,
        "patternUri" : "http://snomed.info/sct"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:FFBConditionCode",
        "path" : "ServiceRequest.reasonCode.coding",
        "sliceName" : "FFBConditionCode",
        "short" : "[DA] FFB undertemakode",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:FFBConditionCode.system",
        "path" : "ServiceRequest.reasonCode.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.22"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:SKS",
        "path" : "ServiceRequest.reasonCode.coding",
        "sliceName" : "SKS",
        "short" : "[DA] Kode fra SKS, typisk diagnose eller procedure",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:SKS.system",
        "path" : "ServiceRequest.reasonCode.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.4.12"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:ICPC2code",
        "path" : "ServiceRequest.reasonCode.coding",
        "sliceName" : "ICPC2code",
        "short" : "ICPC2 code",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ServiceRequest.reasonCode.coding:ICPC2code.system",
        "path" : "ServiceRequest.reasonCode.coding.system",
        "min" : 1,
        "patternUri" : "urn:oid:1.2.208.176.2.31"
      },
      {
        "id" : "ServiceRequest.reasonReference",
        "path" : "ServiceRequest.reasonReference",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation",
              "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
              "http://hl7.org/fhir/StructureDefinition/DocumentReference"
            ]
          }
        ]
      }
    ]
  }
}

```
