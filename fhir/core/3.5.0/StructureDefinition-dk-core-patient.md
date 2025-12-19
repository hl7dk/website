# Danish Core Patient Profile - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Patient Profile**

## Resource Profile: Danish Core Patient Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DkCorePatient |

 
HL7 Denmark core profile for a patient 

### Scope and usage

The Danish Core Patient profile is intended to encapsulate the most common and basic data model of patients in Danish healthcare systems covering both primary sector, secondary sector (specialty doctors and hospitals) and municipality cases. As such the profile should be usable in most Danish contexts. Note that the profile is usable for those that receive health and social care in municipalities, even in contexts where they are more commonly known as citizens ([DA] borgere).

### Patient identifiers

This patient profile currently only reflects the use of the established national danish patient identifiers called [CPR](https://cpr.dk/) and (for patients without or with unknown CPR number) the use of replacement CPR numbers ([DA] Erstatnings-CPR-numre eller eCPR). Both national [X-eCPR](https://sundhedsdatastyrelsen.dk/da/registre-og-services/ecpr) numbers issued by the Danish Health Data Authority ([DA] Sundhedsdatastyrelsen) and [D-eCPR](https://sundhedsdatastyrelsen.dk/da/rammer-og-retningslinjer/om-patientregistrering/patientregistrering-feallesindhold) numbers primarily issued locally by one of the five danish regions are supported by this profile. More official identifiers are expected to be used and profiled in the future, eg:

* [eID](https://ec.europa.eu/digital-single-market/en/trust-services-and-eid)
* **catastrophe** CPR numbers.

#### CPR-identifier

The element identifier.type describes the specific purpose of an identifier. It is desired to use the code 'NNDNK' from the CodeSystem [IdentifierType](https://terminology.hl7.org/4.0.0/CodeSystem-v2-0203.html) as the type for [DkCoreCprIdentifier](https://hl7.dk/fhir/core/StructureDefinition-dk-core-cpr-identifier.html). Due to known problems with the validation tool when validating the code 'NNDNK', including this type will cause an error. Therefore, it is currently not recommended to use this code.

#### eCPR-identifier

The element Patient.identifier includes two slices to represent eCPR. Each slice includes an identifier with requirements for the specific eCPR:

* For X-eCPR, the [DkCoreXeCprIdentifier](./StructureDefinition-dk-core-x-ecpr-identifier.md) must be used, which includes an OID as system and an invariant describing the requirements for the structure of the identifier, [based on guidelines from Danish Health Data Authority](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR). An example of usage can be seen in [here](./Patient-ukendt-X-eCPR.md).
* For D-eCPR, the [DkCoreDeCprIdentifier](./StructureDefinition-dk-core-d-ecpr-identifier.md) must be used, which includes a ValueSet of OID's that may be used as system. The OIDs represent the D-eCPR in general and D-eCPR for each of the five regions. Further, the identifier includes an invariant describing the requirements for the structure of the identifier, [based on guidelines from Danish Health Data Authority](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfordecentraleerstatningspersonnumre-D-eCPR). An example of usage can be seen in [here](./Patient-ukendt-D-eCPR.md).

In case it is necessary to include an eCPR which is not an X-eCPR or a D-eCPR, it is recommended to add a new slice with the relevant other system and the eCPR identifier from that system. This may be necessary for small practices or due to legacy reasons. An example of this can be seen [here](./Patient-ukendt.md).

### Handling CPR registry civilstand and status values

In the Danish CPR registry, a civilstand and a status attribute exist. The civilstand attribute contains information about marital status as well as deceased status. The status value contains information about a persons whereabouts e.g. living in Denmark or Greenland with known or unknown address, disappearance, and death. Most of the status values are used to inform about the reason for a CPR identifier being inactive.

In FHIR, this information is separated into different attributes. As a consequence the following decisions have been made:

* CPR status values except for deceased status are not represented. Data in the health sector is typically not communicated, relating to inactive CPR-identifiers. If information about whether people live in Denmark or Greenland is important, this can be represented in the Patient.addresss attribute. Deceased status is represented in Patient.deceased
* Civilstand values are represented in Patient.maritalStatus except for the value 'D' død (dead). Death is registered in Patient.deceased. Patient.maritalStatus uses a standard FHIR ValueSet. However a few of the Danish civilstatus values cannot be converted (P and O). Here the FHIR ValueSet is extended with the CPR-registry values.

The tabel below shows how to convert between CPR-registry civilstand/status and FHIR representation.

| | |
| :--- | :--- |
| status = 90 and civilstand = D indicating a dead person | Patient.deceasedBoolean = true |
| civilstand = U indicating an unmarried person | Patient.maritalStatus = U |
| civilstand = F indicating a divorced person | Patient.maritalStatus = D |
| civilstand = E indicating a widow | Patient.maritalStatus = W |
| civilstand = P indicating 'registreret partner'/registered partner which is a marriage-like status according to Danish law | Patient.maritalStatus = P |
| civilstand = O indicating 'ophørt registreret partner'/disolved partnership. When the marriage-like partnership is disolved (parallel to a divorce) | Patient.maritalStatus = O |
| civilstand = L indicating that the registrered partner of the person is dead (parallel to a widow) | Patient.maritalStatus = W |

### Linking records

In Denmark it is possible to get a new CPR-number when a person e.g. changes his or her legal gender. Linking of the old and new patient records can handled using the Patient.link element, which asserts that patient resources refer to the same patient. In this case the old record should have the link type 'replaced-by' where the new record may have the link type 'replaces', both with a reference to the other record. This way of linking record can be considered in the case of legal gender. Other types of linking is described on [the page for the patient resource](https://hl7.org/fhir/r4/patient.html#links).

### Use of security label on patients

In case an implementation project needs to support name and address protection ([Navne- og adressebeskyttelse](https://www.retsinformation.dk/eli/lta/2017/646#idee1fb7b6-c7e7-429d-a738-881c5e486fa6)) of a danish citizen, it is recommended to support this with the security label as follows:

```
 <Patient xmlns="http://hl7.org/fhir">
  <meta>
    <security>
      <system value="http://terminology.hl7.org/CodeSystem/v3-Confidentiality"/>
      <code value="R"/>
      <display value="Restricted"/>
    </security>
  </meta>
...  [snip] ...
</Patient>

```

Use of this label should be interpreted according to the law, roughly meaning that only personnel using systems in public/official affairs are allowed to see name and address for the patient/citizen.

### Unknown values or Absent values

There may be scenarios where it is not possible to supply all values as required by this profile. For such cases it is possible to specify a Data Absent Reason ([DAR](https://hl7.org/fhir/R4/extension-data-absent-reason.html)) extension which enables data fields to be supplied where data is not available. An example of this can be seen [here](./Patient-ukendt.md). The use of DAR is not restricted to the patient profile.

**Usages:**

* Derived from this Profile: [Danish IPA Core Patient Profile](StructureDefinition-ipa-dk-core-patient.md)
* Refer to this Profile: [Danish Core Condition Profile](StructureDefinition-dk-core-condition.md), [Danish Core Encounter Profile](StructureDefinition-dk-core-encounter.md), [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md), [Danish Core Observation Profile](StructureDefinition-dk-core-observation.md)...Show 3 more,[Danish Core Patient Profile](StructureDefinition-dk-core-patient.md),[Danish Core Person ServiceRequest Profile](StructureDefinition-dk-core-person-servicerequest.md)and[Danish Core Related Person Profile](StructureDefinition-dk-core-related-person.md)
* Examples for this Profile: [Patient/283](Patient-283.md), [Patient/37628912-7816-47a3-acd8-396b610be142](Patient-37628912-7816-47a3-acd8-396b610be142.md), [Patient/Confidential](Patient-Confidential.md), [Patient/Max](Patient-Max.md)...Show 6 more,[Patient/Poul](Patient-Poul.md),[Patient/else](Patient-else.md),[Patient/john](Patient-john.md),[Patient/ukendt-D-eCPR](Patient-ukendt-D-eCPR.md),[Patient/ukendt-X-eCPR](Patient-ukendt-X-eCPR.md)and[Patient/ukendt](Patient-ukendt.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/hl7.fhir.dk.core|current/StructureDefinition/dk-core-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-patient.csv), [Excel](StructureDefinition-dk-core-patient.xlsx), [Schematron](StructureDefinition-dk-core-patient.sch) 

### Notes:

Note: feedback is most welcome and should be directed to the danish affiliate's github repository (https://github.com/hl7dk/dk-core/).



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-patient",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
  "version" : "3.5.0",
  "name" : "DkCorePatient",
  "title" : "Danish Core Patient Profile",
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
  "description" : "HL7 Denmark core profile for a patient",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
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
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient",
        "constraint" : [
          {
            "key" : "marital-status-unknown-usage",
            "requirements" : "Marital status is legally unknown in Denmark",
            "severity" : "warning",
            "human" : "The constraint ensures that only permitted forms of marriage can be used in the Danish context, as there will be no authority for other forms. See https://cpr.dk/borgere/hvad-staar-der-om-mig-i-cpr-registerindsigt/hvad-og-hvem-er-registreret-i-cpr-og-hvem-opdaterer-oplysninger-om-dig-i-cpr/",
            "expression" : "maritalStatus.coding.where(code = 'P' and system = 'http://terminology.hl7.org/CodeSystem/v3-MaritalStatus').empty() or maritalStatus.coding.where(code = 'A' and system = 'http://terminology.hl7.org/CodeSystem/v3-MaritalStatus').empty()",
            "source" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
          }
        ]
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
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
        "id" : "Patient.identifier:cpr",
        "path" : "Patient.identifier",
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
        "id" : "Patient.identifier:x-ecpr",
        "path" : "Patient.identifier",
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
        "id" : "Patient.identifier:d-ecpr",
        "path" : "Patient.identifier",
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
        "id" : "Patient.name",
        "path" : "Patient.name",
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
        "id" : "Patient.name:official",
        "path" : "Patient.name",
        "sliceName" : "official",
        "short" : "[DA] Officielt navn, som det fremgår af CPR registeret",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Patient.name:official.use",
        "path" : "Patient.name.use",
        "min" : 1,
        "fixedCode" : "official"
      },
      {
        "id" : "Patient.name:official.family",
        "path" : "Patient.name.family",
        "min" : 1
      },
      {
        "id" : "Patient.address",
        "path" : "Patient.address",
        "definition" : "An address for the individual. Danish addresses must comply with directions issued by https://dawa.aws.dk/ and underlying authorities"
      },
      {
        "id" : "Patient.address.extension:municipalityCode",
        "path" : "Patient.address.extension",
        "sliceName" : "municipalityCode",
        "short" : "[DA] Kommunekode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes"
            ]
          }
        ]
      },
      {
        "id" : "Patient.address.extension:regionalSubDivisionCodes",
        "path" : "Patient.address.extension",
        "sliceName" : "regionalSubDivisionCodes",
        "short" : "[DA] Regionskode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes"
            ]
          }
        ]
      },
      {
        "id" : "Patient.address.extension:address-official",
        "path" : "Patient.address.extension",
        "sliceName" : "address-official",
        "short" : "Indicate that this address is meant to be the 'official' address for that person. This can be indicated by setting the boolean to 'true' or adding a code for the country, e.g. 'DK'. In Denmark the official is the address registered in the CPR-register, see: https://www.retsinformation.dk/eli/lta/2023/1010.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/address-official"]
          }
        ]
      },
      {
        "id" : "Patient.maritalStatus",
        "path" : "Patient.maritalStatus",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-marital-status"
        }
      },
      {
        "id" : "Patient.contact.relationship",
        "path" : "Patient.contact.relationship",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://hl7.dk/fhir/core/ValueSet/extended-patient-contactrelationship"
        }
      },
      {
        "id" : "Patient.generalPractitioner",
        "path" : "Patient.generalPractitioner",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "identifier.system"
            }
          ],
          "rules" : "open"
        },
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role"
            ]
          }
        ]
      },
      {
        "id" : "Patient.generalPractitioner:referencedSORUnit",
        "path" : "Patient.generalPractitioner",
        "sliceName" : "referencedSORUnit",
        "short" : "[DA] Praktiserende læges SOR-id på sundhedsinstistutionsniveau",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Patient.generalPractitioner:referencedSORUnit.identifier",
        "path" : "Patient.generalPractitioner.identifier",
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
        "id" : "Patient.managingOrganization",
        "path" : "Patient.managingOrganization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Patient.link.other",
        "path" : "Patient.link.other",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : false
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
            ]
          }
        ]
      }
    ]
  }
}

```
