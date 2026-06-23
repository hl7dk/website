# Artifacts Summary - Danish Hackathon 2026 v1.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Questionnaires 

These define forms used by systems conforming to this implementation guide to capture or expose data to end users.

| | |
| :--- | :--- |
| [Psykisk helbred questionnaire](Questionnaire-MentalHealthQuestionnaire.md) | Spørgeskema der undersøger psykisk helbred for børn og unge, der er i risiko for at udvikle depression eller angst |

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [PhysicalActivityObservation](StructureDefinition-PhysicalActivityObservation.md) | FUT like eHealth Observation for daily physical activity |
| [SleepObservation](StructureDefinition-SleepObservation.md) | FUT like eHealth Observation for daily hours of sleep |
| [TelemedicineEpisodeOfCare](StructureDefinition-TelemedicineEpisodeOfCare.md) | FUT like eHealth EpisodeOfCare |
| [TelemedicinePatient](StructureDefinition-TelemedicinePatient.md) | An example profile of the Patient resource. |
| [TelemedicineQuestionnaire](StructureDefinition-TelemedicineQuestionnaire.md) | FUT like eHealth questionnaire |
| [TelemedicineQuestionnaireResponse](StructureDefinition-TelemedicineQuestionnaireResponse.md) | FUT like eHealth QuestionnaireResponse |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Arbejde/skole forventning](ValueSet-WorkSchoolExpectationCodes.md) | Svarmuligheder for arbejde/skole forventning i forbindelse med psykisk helbred questionnaire hackathon 2022 |
| [Humør](ValueSet-MoodCodes.md) | Svarmuligheder for humør i forbindelse med psykisk helbred questionnaire hackathon 2022 |
| [Kærlighed](ValueSet-LoveCodes.md) | Svarmuligheder for kærlighed i forbindelse med psykisk helbred questionnaire hackathon 2022 |
| [Lyst til at være sammen med andre](ValueSet-DesireToBeWithOthersCodes.md) | Svarmuligheder for lyst til at være sammen med andre i forbindelse med psykisk helbred questionnaire hackathon 2022 |
| [ObservationCodes](ValueSet-ActivityCodes.md) | Observation codes value set |
| [ObservationCodesSCT](ValueSet-ObservationCodesSCT.md) | Observation codes value set |
| [Oplagthed](ValueSet-EnergyCodes.md) | Svarmuligheder for oplagthed i forbindelse med psykisk helbred questionnaire hackathon 2022 |
| [Pres](ValueSet-PressureCodes.md) | Svarmuligheder for pres i forbindelse med psykisk helbred questionnaire hackathon 2022 |
| [Venskaber](ValueSet-FriendshipCodes.md) | Svarmuligheder for venskaber i forbindelse med psykisk helbred questionnaire hackathon 2022 |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Psykisk helbred koder](CodeSystem-MentalHealthCodes.md) | CodeSystem indeholdende valgmuligheder i forbindelse med psykisk helbred spørgeskema til hackathon 2022 |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [EpisodeOfCareExample](EpisodeOfCare-EpisodeOfCareExample.md) | Example of a telemedicin episode of care |
| [PatientExample](Patient-PatientExample.md) |  |
| [PhysicalActivityObservationExample](Observation-PhysicalActivityObservationExample.md) | Example of a physical activity observation |
| [SleepObservationExample](Observation-SleepObservationExample.md) | Example of a sleep observation |
| [TelemedicineQuestionnaireResponseExample](QuestionnaireResponse-TelemedicineQuestionnaireResponseExample.md) | Example of a mental health questionnaire response |

