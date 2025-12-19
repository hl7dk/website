# Danish Core Organization Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Organization Profile**

## Resource Profile: Danish Core Organization Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCoreOrganization |

 
HL7 Denmark core profile for a danish health organization 

### Scope and usage

The Danish Core Organization profile is intended to encapsulate the most common and basic data model of organizations in Danish healthcare system, covering both primary sector, secondary sector (medical specialists ([DA] speciallæger) and hospitals) and municipality cases. As such the profile should be usable in most Danish contexts. Organization is broardly defined (just as it is in the original FHIR ressource) and may be used to define all organizations directly or indirectly involved in citizen and patient care.

Please notice, that an organization shall always have at least one identifier. Some identifiers are common in a Danish context, why they are included in the profile, see the list below. However, it is allowed to add a new identifier for a special usage.

* **EAN identifier**: this specifically, refers to what is commonly known as the **EAN** number - which in fact is a [Global Location Number](https://www.gs1.org/standards/id-keys/gln).
* **SOR identifier**: a register for Danish health care organizations which contains information about organizations and their location.
* **KOMBIT organization identifier**: holding the organization code. This is issued by KOMBIT.
* **Ydernummer identifier**: an identifier for private health professionals like general practitioners or physiotherapists.
* **CVR identifier**: an official company identifier for Danish companies.
* **Kommunal identifier**: the official identifier for a Danish municipality.
* **Regional identifier**: the official organization identifier for a Danish region.
* **Producent identifier**: the identifier used for the producer of laboratory result, maintained by MedCom.

#### Representing a general practitioner

When using the Danish Core Organization profile for representing a general practitioner, it is recommended to use both a [SOR identifier](https://hl7.dk/fhir/core/StructureDefinition-dk-core-organization-definitions.html#Organization.identifier:SOR-ID) and an [ydernummer identifier](https://hl7.dk/fhir/core/StructureDefinition-dk-core-organization-definitions.html#Organization.identifier:Ydernummer.id). It is recommended that the SOR identifier is on the ‘sundhedsinstitution’ level from the SOR hierarchy. The same SOR identifier can be used for multiple Organization instances of different general practitioner’s practices, and therefore the ydernummer identifier will be the unique identifier for a Danish GP.

**Usages:**

* Refer to this Profile: [CareProvider](StructureDefinition-dk-core-care-provider.md), [Danish Core Encounter Profile](StructureDefinition-dk-core-encounter.md), [Danish Core Location Profile](StructureDefinition-dk-core-location.md), [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md)...Show 4 more,[Danish Core Observation Profile](StructureDefinition-dk-core-observation.md),[Danish Core Patient Profile](StructureDefinition-dk-core-patient.md),[Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)and[Danish Core PractitionerRole Profile](StructureDefinition-dk-core-practitioner-role.md)
* Examples for this Profile: [Organization/154b8c96-a061-45bf-9ce4-1947c7c3c283](Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.md), [Ortopædkirurgisk sengeafsnit](Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.md), [Ortopædkirurgisk sengeafdeling](Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.md), [Lægerne Hasseris Bymidte](Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.md)...Show 6 more,[Organization/CenterForDiabetes](Organization-CenterForDiabetes.md),[Organization/CenterForDiabetesTeamDiabetes](Organization-CenterForDiabetesTeamDiabetes.md),[Organization/CenterForDiabetesTeamHjerte](Organization-CenterForDiabetesTeamHjerte.md),[Organization/CenterForDiabetesTeamKvalitet](Organization-CenterForDiabetesTeamKvalitet.md),[Lægerne Hasseris Bymidte](Organization-LaegerneHasserisBymidte.md)and[Organization/b08997bb-4476-4dd0-84dd-2e297f809364](Organization-b08997bb-4476-4dd0-84dd-2e297f809364.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-organization.csv), [Excel](StructureDefinition-dk-core-organization.xlsx), [Schematron](StructureDefinition-dk-core-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-organization",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
  "version" : "3.5.0",
  "name" : "DkCoreOrganization",
  "title" : "Danish Core Organization Profile",
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
  "description" : "HL7 Denmark core profile for a danish health organization",
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
  "type" : "Organization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "constraint" : [
          {
            "key" : "dk-core-organization-mandatory-identifier",
            "severity" : "error",
            "human" : "Minimum one identifier shall be of type SOR-ID, KOMBIT-ORG-ID or CVR-ID",
            "expression" : "identifier.where(system='urn:oid:1.2.208.176.1.1' or system='https://kombit.dk/sts/organisation' or system='urn:oid:2.16.840.1.113883.2.24.1.1').exists()",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
          }
        ]
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Organization.identifier:EAN-ID",
        "path" : "Organization.identifier",
        "sliceName" : "EAN-ID",
        "short" : "GLN identifier, [DA] EAN-nummer",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-gln-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Organization.identifier:SOR-ID",
        "path" : "Organization.identifier",
        "sliceName" : "SOR-ID",
        "short" : "[DA] SOR-id",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-sor-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Organization.identifier:KOMBIT-ORG-ID",
        "path" : "Organization.identifier",
        "sliceName" : "KOMBIT-ORG-ID",
        "short" : "[DA] Organisationsenheds-id som specificeret af FK-ORG",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-kombit-org-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Organization.identifier:Ydernummer",
        "path" : "Organization.identifier",
        "sliceName" : "Ydernummer",
        "short" : "[DA] Ydernummer",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Organization.identifier:Ydernummer.system",
        "path" : "Organization.identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:1.2.208.176.1.4"
      },
      {
        "id" : "Organization.identifier:Ydernummer.value",
        "path" : "Organization.identifier.value",
        "min" : 1
      },
      {
        "id" : "Organization.identifier:CVR-ID",
        "path" : "Organization.identifier",
        "sliceName" : "CVR-ID",
        "short" : "VAT identification number, [DA] CVR-nummer",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-cvr-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Organization.identifier:Kommunekode",
        "path" : "Organization.identifier",
        "sliceName" : "Kommunekode",
        "short" : "[DA] Kommunekode",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Organization.identifier:Kommunekode.system",
        "path" : "Organization.identifier.system",
        "min" : 1,
        "fixedUri" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-municipality-codes"
      },
      {
        "id" : "Organization.identifier:Kommunekode.value",
        "path" : "Organization.identifier.value",
        "min" : 1,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-MunicipalityCodes"
        }
      },
      {
        "id" : "Organization.identifier:Regionskode",
        "path" : "Organization.identifier",
        "sliceName" : "Regionskode",
        "short" : "[DA] Regionskode",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Organization.identifier:Regionskode.system",
        "path" : "Organization.identifier.system",
        "min" : 1,
        "fixedUri" : "http://hl7.dk/fhir/core/CodeSystem/dk-core-regional-subdivision-codes"
      },
      {
        "id" : "Organization.identifier:Regionskode.value",
        "path" : "Organization.identifier.value",
        "min" : 1
      },
      {
        "id" : "Organization.identifier:ProducentID",
        "path" : "Organization.identifier",
        "sliceName" : "ProducentID",
        "short" : "[DA] Producent Id",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-producent-id"
            ]
          }
        ]
      },
      {
        "id" : "Organization.type",
        "path" : "Organization.type",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/sor-organization-type"
        }
      }
    ]
  }
}

```
