# Dk Core IEEE Basic Observation - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dk Core IEEE Basic Observation**

## ValueSet: Dk Core IEEE Basic Observation 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ValueSet/dk-core-IEEEBasicObservation | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:IEEEBasicObservation |
| **Copyright/Legal**: This material contains content from IEEE-SA (https://standards.ieee.org/), copyright © the Insitute of Electrical and Electronics Engineers, Inc. | |

 
IEEE MDC codes for Basic Observations usable in Denmark 

 

### Purpose of this ValueSet

 
This ValueSet comprises the most common IEEE MDC codes used to represent observations that are considered "basic" by this profile. This ValueSet is**not**meant to be exhaustive! 
The origin of an MDC code is usually the equipment used to perform the measurement, and often the code carries supplemental information about how (or where on the body) the observation was performed. 

 **References** 

* [Danish Core Basic Observation Profile](StructureDefinition-dk-core-basic-observation.md)

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
  "id" : "dk-core-IEEEBasicObservation",
  "url" : "http://hl7.dk/fhir/core/ValueSet/dk-core-IEEEBasicObservation",
  "version" : "3.5.0",
  "name" : "IEEEBasicObservation",
  "title" : "Dk Core IEEE Basic Observation",
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
  "description" : "IEEE MDC codes for Basic Observations usable in Denmark",
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
  "purpose" : "### Purpose of this ValueSet\nThis ValueSet comprises the most common IEEE MDC codes used to represent observations\nthat are considered \"basic\" by this profile. This ValueSet is **not** meant to be exhaustive!\n\nThe origin of an MDC code is usually the equipment used to perform the measurement,\nand often the code carries supplemental information about how (or where on the body)\nthe observation was performed.",
  "copyright" : "This material contains content from IEEE-SA (https://standards.ieee.org/), copyright © the Insitute of Electrical and Electronics Engineers, Inc.",
  "compose" : {
    "include" : [
      {
        "system" : "urn:iso:std:iso:11073:10101",
        "concept" : [
          {
            "code" : "151562",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of breathing; method not specified."
              }
            ]
          },
          {
            "code" : "151570",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of breathing; method: direct airway flow measurement."
              }
            ]
          },
          {
            "code" : "151578",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of breathing; method: transthoracic impedance variations."
              }
            ]
          },
          {
            "code" : "151594",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of breathing; method: carbon dioxide measurement."
              }
            ]
          },
          {
            "code" : "151602",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of breathing; method: non-airway pressure measurement, e.g. central venous blood pressure (CVP)."
              }
            ]
          },
          {
            "code" : "151650",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of breathing; method: acoustic."
              }
            ]
          },
          {
            "code" : "151658",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of breathing; method: SpO2 plethysmography."
              }
            ]
          },
          {
            "code" : "8410992",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Value of respiration rate. [measured by sleep apnoea breathing therapy equipment]"
              }
            ]
          },
          {
            "code" : "149514",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of blood pulse in an artery."
              }
            ]
          },
          {
            "code" : "149522",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of blood pulse in an artery, measured invasively."
              }
            ]
          },
          {
            "code" : "149546",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of blood pulse in an artery, measured non-invasively."
              }
            ]
          },
          {
            "code" : "149530",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of blood pulse as obtained by pulse oximetry."
              }
            ]
          },
          {
            "code" : "147842",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rate of cardiac beats (ECG)."
              }
            ]
          },
          {
            "code" : "8410590",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Instantaneous heart rate."
              }
            ]
          },
          {
            "code" : "149554",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Heart rate obtained from the variation of transthoracic impedance."
              }
            ]
          },
          {
            "code" : "149562",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Heart rate obtained from an artery that is close to the surface and a pulse can be felt."
              }
            ]
          },
          {
            "code" : "8454258",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "This is an object representing the heart rate over a period of time. [Exercise / fitness equipment]"
              }
            ]
          },
          {
            "code" : "150324",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Arterial oxygen saturation. [no method]"
              }
            ]
          },
          {
            "code" : "150456",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Oxygen saturation. [using pulse oximetry]"
              }
            ]
          },
          {
            "code" : "150364",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Body temperature. [unspecified]"
              }
            ]
          },
          {
            "code" : "150368",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Core temperature."
              }
            ]
          },
          {
            "code" : "150388",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Skin temperature."
              }
            ]
          },
          {
            "code" : "150392",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Tympanic temperature."
              }
            ]
          },
          {
            "code" : "188420",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Rectal temperature."
              }
            ]
          },
          {
            "code" : "188424",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Oral temperature."
              }
            ]
          },
          {
            "code" : "188428",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Ear temperature."
              }
            ]
          },
          {
            "code" : "188452",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Axillary (armpit) temperature."
              }
            ]
          },
          {
            "code" : "188456",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Gastro-intestinal tract temperature."
              }
            ]
          },
          {
            "code" : "188740",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "The actual height of the patient."
              }
            ]
          },
          {
            "code" : "153856",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Circumference of the head."
              }
            ]
          },
          {
            "code" : "188736",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "The measurement of the mass of patient."
              }
            ]
          },
          {
            "code" : "188752",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "The individual's body weight, in kilograms, divided by the square of height, in meters (BMI)."
              }
            ]
          },
          {
            "code" : "150020",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Pressure of the blood, obtained noninvasively."
              }
            ]
          },
          {
            "code" : "150021",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Pressure of the blood, obtained noninvasively, at the systolic phase."
              }
            ]
          },
          {
            "code" : "150022",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Pressure of the blood, obtained noninvasively, at the diastolic phase."
              }
            ]
          },
          {
            "code" : "150023",
            "designation" : [
              {
                "use" : {
                  "system" : "http://snomed.info/sct",
                  "version" : "http://snomed.info/sct/554471000005108",
                  "code" : "900000000000003001"
                },
                "value" : "Pressure of the blood, obtained noninvasively, as computed by averaging on one cycle."
              }
            ]
          }
        ]
      }
    ]
  }
}

```
