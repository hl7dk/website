# Danish Core Diagnostic Report Profile - HL7 FHIR Implementation Guide: DK Core v3.7.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Danish Core Diagnostic Report Profile**

## Resource Profile: Danish Core Diagnostic Report Profile 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/StructureDefinition/dk-core-diagnostic-report | *Version*:3.7.0 |
| Active as of 2026-05-30 | *Computable Name*:DkCoreDiagnosticReport |

 
HL7 Denmark profile for diagnostic reports. 

### Scope and Usage

The DkCoreDiagnosticReport profile is used for diagnostic reports communicated within the Danish healthcare sector. Several use cases exist:

* Laboratory reports
* Personal health monitoring reports
* Other reports conveying observations between healthcare providers

The most typical is the laboratory report used to convey the laboratory’s response to a request for one or more analyses. It represents the report at a specific point in time and provides the overall context for the results produced. The report contains information about the report itself, the subject, and the specimen(s) on which the analyses are based.

In this case, a DiagnosticReport serves as the primary structure that links the requested analyses, the underlying specimens, and the resulting observations into a coherent laboratory response.

In other use cases, the DiagnosticReport is still a coherent report of resulting observations. However, these use cases are typically characterized by more relaxed requirements than within laboratory medicine.

#### Identifier

In Denmark, traditional laboratory reports such as [MedCom's RPT01](https://svn.medcom.dk/svn/releases/Standarder/Det%20gode%20laboratoriesvar/), repeat the requisition number in the laboratory report to ensure traceability. In FHIR, it is more consistent with the standard to use DiagnosticReport.basedOn to reference the actual requisition. As a result, HL7 Denmark recommends not repeating the requisition number as a DiagnosticReport.identifier.

In Danish laboratories, a laboratory report is sometimes assigned a unique identifier that is not the requisition number. This practice is especially useful when more than one report is associated with a single requisition. This is an example of a business identifier associated with the report itself. As such, it could be relevant to express as a DiagnosticReport.identifier.

#### Status Codes

The DiagnosticReport resource must contain the status of the report and use the required FHIR ValueSet. For all new use cases this is the only requirement.

However, if legacy data requires a mapping to and from the MedCom standard for laboratory results (RPT01/XRPT01), the following codes should be considered equivalent:

* registered: As soon as the specimen is received by the laboratory, a DiagnosticReport is created with the status 'registered'. This reflects that the order has entered the laboratory workflow and initial processing has begun. This corresponds to MedCom's 'modtaget'.
* partial: The status 'partial' is used when some, but not all, Observations within the DiagnosticReport have been finalized. At least one Observation result must still be pending for the status to remain 'partial'. This corresponds to MedCom's 'delsvar'.
* final: When all observations included in the DiagnosticReport have completed processing and all results are available, the status is set to 'final'. This represents the finalization of the entire laboratory response, corresponding to MedCom’s 'komplet_svar'.
* amended: If a previously finalized DiagnosticReport is updated because one or more referenced results have been corrected, the status becomes 'amended'. This ensures that receivers are aware that a new version replaces an earlier final report. There is no single corresponding code in MedCom's laboratory standards on the entire report. Nevertheless, to ensure FHIR compliance, the 'amended' code should be used as described here.

In a MedCom context, there are several ways of showing that a report has corrected results, but only at the result level. In FHIR, these results are Observations that may be referred to in DiagnosticReport.result.

#### Category

The category is used to classify the report. It is divided into three distinct slices: studyType, specialty, and danishSpecialty. The first two are derived directly from the specification of laboratory reports from HL7 Europe, and they should only be used for laboratory reports:

* studyType: A classification of the type of tests or services performed, grouped into clinically meaningful categories. It represents a typology of test results rather than the laboratory itself.
* specialty: Describes the clinical or professional domain of the laboratory that produced the results. It reflects the specific area of laboratory expertise that executed the tests (e.g., microbiology, chemistry, or hematology).

The third category is Danish Specialties as expressed in Clinical Speciality in SOR (Sundhedsvæsenets Organisationsregister) excluding the Laboratory specialities since they are already expressed in the speciality-slice. These may be used for non-laboratory use cases as needed.

#### Code

DiagnosticReport.code may hold different values. In the [HL7 Europe laboratory standard](https://hl7.eu/fhir/laboratory/), the code 'laboratory report' is always used. To support common Danish use cases, the value set includes two more valid values:

* 'personal health monitoring report' for collections of data produced by the patients themselves, typically in telehealth projects.
* 'progress note' for clinical situations where a collection of observation results originates from an encounter and needs to be communicated to other actors in the health sector. Examples could be acute nursing encounters where measurements are shared with the general practitioner. It could also be a general practitioner visit or hospital encounter where a number of different observations are made and need to be shared afterwards.

The value set is extensible. This means that if a specific use case can make use of either of the three codes already included in the value set, they shall be used. However, if a use case cannot meaningfully use either of the three cades, the value set may be extended. To ensure consistency, HL7 Denmark recommends using LOINC document codes for such additional codes.

Note that if a general practitioner visit originates in a report containing only laboratory results, it is recommended to use the code 'laboratory-report'. To differentiate from laboratory reports made in laboratories, use an appropriate category instead e.g. ´408443003 almen lægepraksis´.

#### Other documentation about attributes

Note that different timestamps are allowed. Match them to your specific use case. MedCom's laboratory report uses 'brevDannetTid'. In this case, DiagnosticReport.issued is recommended as the equivalent. For MedCom's 'svarTid', using DiagnosticReport.effectiveDateTime is recommended.

**Usages:**

* Examples for this Profile: [DiagnosticReport/ElseHomeNursingMeasurements](DiagnosticReport-ElseHomeNursingMeasurements.md) and [DiagnosticReport/ElseLaboratoryReport](DiagnosticReport-ElseLaboratoryReport.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/hl7.fhir.dk.core|current/StructureDefinition/StructureDefinition-dk-core-diagnostic-report.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dk-core-diagnostic-report.csv), [Excel](StructureDefinition-dk-core-diagnostic-report.xlsx), [Schematron](StructureDefinition-dk-core-diagnostic-report.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dk-core-diagnostic-report",
  "url" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-diagnostic-report",
  "version" : "3.7.0",
  "name" : "DkCoreDiagnosticReport",
  "title" : "Danish Core Diagnostic Report Profile",
  "status" : "active",
  "date" : "2026-05-30T15:25:27+02:00",
  "publisher" : "HL7 Denmark",
  "contact" : [{
    "name" : "HL7 Denmark",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.hl7.dk"
    },
    {
      "system" : "email",
      "value" : "dk-affiliate@hl7.dk"
    }]
  }],
  "description" : "HL7 Denmark profile for diagnostic reports.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DiagnosticReport",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DiagnosticReport",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "DiagnosticReport",
      "path" : "DiagnosticReport"
    },
    {
      "id" : "DiagnosticReport.basedOn",
      "path" : "DiagnosticReport.basedOn",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/CarePlan",
        "http://hl7.org/fhir/StructureDefinition/ImmunizationRecommendation",
        "http://hl7.org/fhir/StructureDefinition/MedicationRequest",
        "http://hl7.org/fhir/StructureDefinition/NutritionOrder",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-person-servicerequest"]
      }]
    },
    {
      "id" : "DiagnosticReport.category",
      "path" : "DiagnosticReport.category",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "$this"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "DiagnosticReport.category:studyType",
      "path" : "DiagnosticReport.category",
      "sliceName" : "studyType",
      "short" : "The way of grouping of the test results into clinically meaningful domains (e.g. hematology study, microbiology study, etc.)",
      "min" : 0,
      "max" : "*",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-LoincLabStudyTypes"
      }
    },
    {
      "id" : "DiagnosticReport.category:specialty",
      "path" : "DiagnosticReport.category",
      "sliceName" : "specialty",
      "short" : "The clinical domain of the laboratory performing the observation (e.g. microbiology, toxicology, chemistry)",
      "min" : 0,
      "max" : "*",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-SCTLaboratorySpecialities"
      }
    },
    {
      "id" : "DiagnosticReport.category:danishSpecialty",
      "path" : "DiagnosticReport.category",
      "sliceName" : "danishSpecialty",
      "short" : "The clinical domain of a Danish practise setting in which a DiagnosticReport is produced",
      "min" : 0,
      "max" : "*",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-practice-setting-exclude-lab-code"
      }
    },
    {
      "id" : "DiagnosticReport.code",
      "path" : "DiagnosticReport.code",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://hl7.dk/fhir/core/ValueSet/dk-core-LoincDiagnosticDocumentTypes"
      }
    },
    {
      "id" : "DiagnosticReport.subject",
      "path" : "DiagnosticReport.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient",
        "http://hl7.org/fhir/StructureDefinition/Group",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location",
        "http://hl7.org/fhir/StructureDefinition/Device"]
      }]
    },
    {
      "id" : "DiagnosticReport.encounter",
      "path" : "DiagnosticReport.encounter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-encounter"]
      }]
    },
    {
      "id" : "DiagnosticReport.performer",
      "path" : "DiagnosticReport.performer",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
        "http://hl7.org/fhir/StructureDefinition/CareTeam"]
      }]
    },
    {
      "id" : "DiagnosticReport.resultsInterpreter",
      "path" : "DiagnosticReport.resultsInterpreter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
        "http://hl7.org/fhir/StructureDefinition/CareTeam"]
      }]
    },
    {
      "id" : "DiagnosticReport.result",
      "path" : "DiagnosticReport.result",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"]
      }]
    }]
  }
}

```
