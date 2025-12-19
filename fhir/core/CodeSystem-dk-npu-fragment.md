# Nomenclature for Properties and Units (NPU) - Fragment for DK Core - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Nomenclature for Properties and Units (NPU) - Fragment for DK Core**

## CodeSystem: Nomenclature for Properties and Units (NPU) - Fragment for DK Core 

| | |
| :--- | :--- |
| *Official URL*:http://npu-terminology.org | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:NPU |
| *Other Identifiers:*OID:1.2.208.176.9.1 | |
| **Copyright/Legal**: https://cms.npu-terminology.org/wp-content/uploads/2024/06/NPU-License-Terms-of-Use.pdf | |

 
Fragment of the NPU code system used in DK Core. The full version of NPU can be found at http://labterm.dk 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NPUBasicObservation](ValueSet-dk-core-NPUBasicObservation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dk-npu-fragment",
  "url" : "http://npu-terminology.org",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.208.176.9.1"
    }
  ],
  "version" : "3.5.0",
  "name" : "NPU",
  "title" : "Nomenclature for Properties and Units (NPU) - Fragment for DK Core",
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
  "description" : "Fragment of the NPU code system used in DK Core. The full version of NPU can be found at http://labterm.dk",
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
  "copyright" : "https://cms.npu-terminology.org/wp-content/uploads/2024/06/NPU-License-Terms-of-Use.pdf",
  "caseSensitive" : true,
  "content" : "fragment",
  "property" : [
    {
      "code" : "comment",
      "uri" : "http://hl7.org/fhir/concept-properties#comment",
      "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
      "type" : "string"
    },
    {
      "code" : "effectiveDate",
      "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
      "description" : "The date at which the concept status was last changed",
      "type" : "dateTime"
    },
    {
      "code" : "status",
      "uri" : "http://hl7.org/fhir/concept-properties#status",
      "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
      "type" : "code"
    },
    {
      "code" : "inactive",
      "uri" : "http://hl7.org/fhir/concept-properties#inactive",
      "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
      "type" : "boolean"
    },
    {
      "code" : "ChangeDate",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#ChangeDate",
      "type" : "dateTime"
    },
    {
      "code" : "CreatedDate",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#CreatedDate",
      "type" : "dateTime"
    },
    {
      "code" : "System",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#System",
      "type" : "string"
    },
    {
      "code" : "SysSpec",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#SysSpec",
      "type" : "string"
    },
    {
      "code" : "Component",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#Component",
      "type" : "string"
    },
    {
      "code" : "CompSpec",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#CompSpec",
      "type" : "string"
    },
    {
      "code" : "Kind-of-property",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#Kind-of-property",
      "type" : "string"
    },
    {
      "code" : "Speciality",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#Speciality",
      "type" : "string"
    },
    {
      "code" : "Code value",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#Code-value",
      "type" : "string"
    },
    {
      "code" : "Scale type",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#Scale-type",
      "type" : "string"
    },
    {
      "code" : "Proc",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#Proc",
      "type" : "string"
    },
    {
      "code" : "Unit",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#Unit",
      "type" : "string"
    },
    {
      "code" : "STATUS",
      "uri" : "https://iupac.org/fhir/npu/concept-properties#STATUS",
      "type" : "string"
    }
  ],
  "concept" : [
    {
      "code" : "NPU03011",
      "display" : "Hb(Fe; O₂-bind.; aB)—Oxygen(O₂); sat. = ?",
      "designation" : [
        {
          "language" : "da",
          "value" : "Hb(Fe; O₂-bind.;aB)—Oxygen(O₂); mætn. = ?"
        }
      ],
      "property" : [
        {
          "code" : "ChangeDate",
          "valueDateTime" : "2000-12-20T00:00:00+01:00"
        },
        {
          "code" : "CreatedDate",
          "valueDateTime" : "1996-12-24T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Hb"
        },
        {
          "code" : "SysSpec",
          "valueString" : "Fe; O₂-bind.;aB"
        },
        {
          "code" : "Component",
          "valueString" : "Oxygen"
        },
        {
          "code" : "CompSpec",
          "valueString" : "O₂"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "sat."
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "3011"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2000-12-20T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU27280",
      "display" : "Hb(Fe; O₂-bind.; aB)—Oxygen(O₂); sat.(Pulse oximetry) = ?",
      "designation" : [
        {
          "language" : "da",
          "value" : "Hb(Fe; O₂-bind.;aB)—Oxygen(O₂); mætn.(pulsoximetri) = ?"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "2007-11-23T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Hb"
        },
        {
          "code" : "SysSpec",
          "valueString" : "Fe; O₂-bind.;aB"
        },
        {
          "code" : "Component",
          "valueString" : "Oxygen"
        },
        {
          "code" : "CompSpec",
          "valueString" : "O₂"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "sat."
        },
        {
          "code" : "Proc",
          "valueString" : "Pulse oximetry"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "27280"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2007-11-23T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU04034",
      "display" : "Pt(spec.)—Blood; temp. = ? °C",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pt(spec.)—Blod; temp. = ? °C"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "1996-05-08T00:00:00+02:00"
        },
        {
          "code" : "System",
          "valueString" : "Pt"
        },
        {
          "code" : "SysSpec",
          "valueString" : "spec."
        },
        {
          "code" : "Component",
          "valueString" : "Blood"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "temp."
        },
        {
          "code" : "Unit",
          "valueString" : "°C"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "4034"
        },
        {
          "code" : "Scale type",
          "valueString" : "Differential"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "1996-05-08T00:00:00+02:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU08676",
      "display" : "Pt—Body; temp. = ? °C",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pt—Legeme; temp. = ? °C"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "1997-04-15T00:00:00+02:00"
        },
        {
          "code" : "System",
          "valueString" : "Pt"
        },
        {
          "code" : "Component",
          "valueString" : "Body"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "temp."
        },
        {
          "code" : "Unit",
          "valueString" : "°C"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "8676"
        },
        {
          "code" : "Scale type",
          "valueString" : "Differential"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "1997-04-15T00:00:00+02:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU58033",
      "display" : "Artery(spec.)—Blood pressure(systolic); pr.(proc.) = ? mmHg",
      "designation" : [
        {
          "language" : "da",
          "value" : "Arterie(spec.)—Blodtryk(systolisk); tryk(proc.) = ? mmHg"
        }
      ],
      "property" : [
        {
          "code" : "ChangeDate",
          "valueDateTime" : "2021-03-19T00:00:00+01:00"
        },
        {
          "code" : "CreatedDate",
          "valueDateTime" : "2017-12-18T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Artery"
        },
        {
          "code" : "SysSpec",
          "valueString" : "spec."
        },
        {
          "code" : "Component",
          "valueString" : "Blood pressure"
        },
        {
          "code" : "CompSpec",
          "valueString" : "systolic"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "pr."
        },
        {
          "code" : "Proc",
          "valueString" : "proc."
        },
        {
          "code" : "Unit",
          "valueString" : "mmHg"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "58033"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2021-03-19T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "deprecated"
        },
        {
          "code" : "comment",
          "valueString" : "Specification changed"
        },
        {
          "code" : "inactive",
          "valueBoolean" : true
        }
      ]
    },
    {
      "code" : "NPU57947",
      "display" : "Artery(spec.)—Blood; pr.(systolic; proc.) = ? mmHg",
      "designation" : [
        {
          "language" : "da",
          "value" : "Arterie(spec.)—Blod; tryk(systolisk;proc.) = ? mmHg"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "2017-12-05T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Artery"
        },
        {
          "code" : "SysSpec",
          "valueString" : "spec."
        },
        {
          "code" : "Component",
          "valueString" : "Blood"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "pr."
        },
        {
          "code" : "Proc",
          "valueString" : "systolic;proc."
        },
        {
          "code" : "Unit",
          "valueString" : "mmHg"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "57947"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2017-12-05T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU58034",
      "display" : "Artery(spec.)—Blood pressure(diastolic); pr.(proc.) = ? mmHg",
      "designation" : [
        {
          "language" : "da",
          "value" : "Arterie(spec.)—Blodtryk(diastolisk); tryk(proc.) = ? mmHg"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "2017-12-18T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Artery"
        },
        {
          "code" : "SysSpec",
          "valueString" : "spec."
        },
        {
          "code" : "Component",
          "valueString" : "Blood pressure"
        },
        {
          "code" : "CompSpec",
          "valueString" : "diastolic"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "pr."
        },
        {
          "code" : "Proc",
          "valueString" : "proc."
        },
        {
          "code" : "Unit",
          "valueString" : "mmHg"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "58034"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2017-12-18T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "deprecated"
        },
        {
          "code" : "comment",
          "valueString" : "Specification changed"
        },
        {
          "code" : "inactive",
          "valueBoolean" : true
        }
      ]
    },
    {
      "code" : "NPU57948",
      "display" : "Artery(spec.)—Blood; pr.(diastolic; proc.) = ? mmHg",
      "designation" : [
        {
          "language" : "da",
          "value" : "Arterie(spec.)—Blod; tryk(diastolisk;proc.) = ? mmHg"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "2017-12-05T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Artery"
        },
        {
          "code" : "SysSpec",
          "valueString" : "spec."
        },
        {
          "code" : "Component",
          "valueString" : "Blood"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "pr."
        },
        {
          "code" : "Proc",
          "valueString" : "diastolic;proc."
        },
        {
          "code" : "Unit",
          "valueString" : "mmHg"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "57948"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2017-12-05T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU21692",
      "display" : "Heart—Systole; frequency = ? × 1/min",
      "designation" : [
        {
          "language" : "da",
          "value" : "Hjerte—Systole; frekv. = ? × 1/min"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "2004-09-29T00:00:00+02:00"
        },
        {
          "code" : "System",
          "valueString" : "Heart"
        },
        {
          "code" : "Component",
          "valueString" : "Systole"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "frequency"
        },
        {
          "code" : "Unit",
          "valueString" : "× 1/min"
        },
        {
          "code" : "Speciality",
          "valueString" : "FUN"
        },
        {
          "code" : "Code value",
          "valueString" : "21692"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2004-09-29T00:00:00+02:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU03794",
      "display" : "Pt—Body; height = ? m",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pt—Legeme; højde = ? m"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "1997-04-15T00:00:00+02:00"
        },
        {
          "code" : "System",
          "valueString" : "Pt"
        },
        {
          "code" : "Component",
          "valueString" : "Body"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "height"
        },
        {
          "code" : "Unit",
          "valueString" : "m"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "3794"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "1997-04-15T00:00:00+02:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU03804",
      "display" : "Pt—Body; mass = ? kg",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pt—Legeme; masse = ? kg"
        }
      ],
      "property" : [
        {
          "code" : "CreatedDate",
          "valueDateTime" : "1996-01-01T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Pt"
        },
        {
          "code" : "Component",
          "valueString" : "Body"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "mass"
        },
        {
          "code" : "Unit",
          "valueString" : "kg"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "3804"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "1996-01-01T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    },
    {
      "code" : "NPU27281",
      "display" : "Pt—Body; mass coefficient(mass/squared height) = ? kg/m²",
      "designation" : [
        {
          "language" : "da",
          "value" : "Pt—Legeme; massekoefficient(masse/kvadreret højde) = ? kg/m²"
        }
      ],
      "property" : [
        {
          "code" : "ChangeDate",
          "valueDateTime" : "2007-12-06T00:00:00+01:00"
        },
        {
          "code" : "CreatedDate",
          "valueDateTime" : "2007-11-23T00:00:00+01:00"
        },
        {
          "code" : "System",
          "valueString" : "Pt"
        },
        {
          "code" : "Component",
          "valueString" : "Body"
        },
        {
          "code" : "Kind-of-property",
          "valueString" : "mass coefficient"
        },
        {
          "code" : "Proc",
          "valueString" : "mass/squared height"
        },
        {
          "code" : "Unit",
          "valueString" : "kg/m²"
        },
        {
          "code" : "Speciality",
          "valueString" : "CLC"
        },
        {
          "code" : "Code value",
          "valueString" : "27281"
        },
        {
          "code" : "Scale type",
          "valueString" : "Ratio"
        },
        {
          "code" : "STATUS",
          "valueString" : "ACTIVE"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2007-12-06T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "comment",
          "valueString" : "Unit defined"
        }
      ]
    }
  ]
}

```
