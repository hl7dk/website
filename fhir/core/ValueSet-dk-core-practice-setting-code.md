# DK SOR Practice Setting Code - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK SOR Practice Setting Code**

## ValueSet: DK SOR Practice Setting Code 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-practice-setting-code | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:SorPracticeSettingCode |

 
Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Kliniske specialer' (https://sor.sum.dsdn.dk/lookupdata/#clinical_speciality, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED CT codes. 

 **References** 

* [Danish Core Minimal DocumentReference Profile](StructureDefinition-dk-core-minimaldocumentreference.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "dk-core-practice-setting-code",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-practice-setting-code",
  "version" : "3.5.0",
  "name" : "SorPracticeSettingCode",
  "title" : "DK SOR Practice Setting Code",
  "status" : "active",
  "experimental" : false,
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
  "description" : "Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Kliniske specialer' (https://sor.sum.dsdn.dk/lookupdata/#clinical_speciality, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED CT codes.",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "concept" : [
          {
            "code" : "773568002"
          },
          {
            "code" : "408443003"
          },
          {
            "code" : "394577000"
          },
          {
            "code" : "394821009"
          },
          {
            "code" : "394588006"
          },
          {
            "code" : "394582007"
          },
          {
            "code" : "394914008"
          },
          {
            "code" : "394583002"
          },
          {
            "code" : "394811001"
          },
          {
            "code" : "394585009"
          },
          {
            "code" : "408472002"
          },
          {
            "code" : "394803006"
          },
          {
            "code" : "394807007"
          },
          {
            "code" : "419192003"
          },
          {
            "code" : "394579002"
          },
          {
            "code" : "408463005"
          },
          {
            "code" : "394609007"
          },
          {
            "code" : "551411000005104"
          },
          {
            "code" : "394596001"
          },
          {
            "code" : "394600006"
          },
          {
            "code" : "394601005"
          },
          {
            "code" : "394580004"
          },
          {
            "code" : "421661004"
          },
          {
            "code" : "408454008"
          },
          {
            "code" : "394809005"
          },
          {
            "code" : "394592004"
          },
          {
            "code" : "418112009"
          },
          {
            "code" : "394805004"
          },
          {
            "code" : "394584008"
          },
          {
            "code" : "394589003"
          },
          {
            "code" : "394610002"
          },
          {
            "code" : "394591006"
          },
          {
            "code" : "394812008"
          },
          {
            "code" : "394594003"
          },
          {
            "code" : "394608004"
          },
          {
            "code" : "394801008"
          },
          {
            "code" : "394604002"
          },
          {
            "code" : "394915009"
          },
          {
            "code" : "394611003"
          },
          {
            "code" : "394587001"
          },
          {
            "code" : "394537008"
          },
          {
            "code" : "394810000"
          },
          {
            "code" : "394581000"
          },
          {
            "code" : "394605001"
          },
          {
            "code" : "394603008"
          },
          {
            "code" : "408448007"
          },
          {
            "code" : "394612005"
          },
          {
            "code" : "658171000005102"
          },
          {
            "code" : "658161000005107"
          },
          {
            "code" : "658151000005105"
          },
          {
            "code" : "658191000005101"
          },
          {
            "code" : "658201000005103"
          },
          {
            "code" : "658141000005108"
          },
          {
            "code" : "658181000005104"
          }
        ]
      }
    ]
  }
}

```
