# Home - HL7 FHIR Implementation Guide: DK Core v3.5.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://hl7.dk/fhir/core/ImplementationGuide/hl7.fhir.dk.core | *Version*:3.5.0 |
| Active as of 2025-12-19 | *Computable Name*:DKCore |

### Introduction

This implementation guide is provided to support the use of FHIR®© in a Danish context.

This document is a working specification that is expected to be implemented and tested by FHIR®© system producers to enable feedback to improve the content of this guide. With this first Standard for Trial Use ballot version we are looking for feedback if the following goals are met:

* provide guidance on core resources for identifiers, code system, value sets and naming systems in a Danish specific context.
* define extensions that are necessary for local use covering needed Danish concepts

**Note**: This implementation guide is not (yet) a FHIR API specification, this will be a goal for the next iteration.

For more information about the Danish HL7 affiliate (HL7-Denmark), please go to [hl7.dk](https://www.hl7.dk). Here can you also find procurement recommendation in regards to FHIR, and an overview of some FHIR implementations in Denmark.

### Scope

The target group of this specification is any party that wants to specify FHIR standards for use in the Danish Health Sector. As a core-specification, a party that wants to use the specification should inherit from dk-core and build use-case specific profiles on top. As such, dk-core does not provide profiles for specific use use cases out-of-the-box.

This document presents Danish use concepts defined via FHIR processable artifacts:

* [Profiles](profiles.md) - are useful constraints of core FHIR resources and datatype for Danish use
* [Extensions](extensions.md) - are FHIR extensions that are added for local use, covering needed Danish concepts
* [Terminologies](terminology.md) - are defined or referenced code systems and value sets for Danish context

dk-core is regularly approved by HL7 Denmark and added to the [catalogue of approved standards](https://sundhedsdatastyrelsen.dk/digitale-loesninger/referencearkitektur-og-standarder/standardkatalog) governed by The Danish Health Data Authority, after consideration by RUSA (Rådgivende Udvalg for Standarder og Arkitektur). See the exact approvals for each version in the history page.

### Governance

FHIR profiles are managed under HL7 Denmark in the HL7 Danish FHIR working group:

* [Source](https://github.com/hl7dk/dk-core)
* [Wiki](https://github.com/hl7dk/dk-core)

### Collaboration

This guide is the product of collaborative work undertaken with participants from:

* [Danish FHIR Implementers Community](https://confluence.hl7.org/display/HD/DK+FHIR+SIG)
* [HL7 Denmark](https://www.hl7.dk)

#### Open an Issue in GitHub

The source code of this implementation guide is maintained in a [publicly accessible repository](https://github.com/hl7dk/dk-core) in GitHub. Issues opened in that GitHub repo are very welcome. They help the affiliate pick up any proposed changes or additions and to discuss them publicly.

#### Open a Pull Request in GitHub

Pull requests are even better. If you are in a position to suggest how exactly your proposal should be implemented in the specification, do it! It helps the team maintaining the implementation guide a great deal.

### Language

The main language of this implementation guide, and the profiles in it, is English. Content that does not have an official English term uses a Danish term instead. Sometimes terms are explained using both Danish and English. Danish terms and explanations are prefixed with [DA]

### Connection between dk-core and common Danish architectures and standards

HL7 Denmark includes common Danish architectures and standards if relevant, when content is added to dk-core. This section provides information about principle decisions as well as more specific ones that require explanations.

#### Principle decisions

* HL7 Denmark considers Danish legislation as the first source of truth when designing models, HL7 Denmark seeks to represent known named entities relevant for health data interoperability truthfully.
* HL7 Denmark upholds the requirements of the FHIR standard whenever it is possible within the boundaries of the Danish legislation.
* Entities that are named both in the FHIR standard and Danish legislation, keeps FHIR naming and requirements, but should explain its relation to Danish names/requirements.
* Danish standards and architectures are considered when designing FHIR profiles. HL7 Denmark uses them when they are relevant for interoperability of health data, and when they are compatible with the FHIR standard. Often public information and data models used as basis of public registries are too detailed, to warrant replication in a FHIR standard. E.g. The Organization profile references organization registries such as SOR and FK-ORG rather than re-constructing each of their attributes in the FHIR-profile, only attributes relevant for interoperability is provided in the FHIR profiles.

#### Specific decisions

* Patient.maritalStatus uses the extendable ValueSet required by the FHIR standard. However, Danish legislation and registries have two additional statuses not covered by the international ValueSet, so these two codes are added in dk-core.
* Several basic resources such as Patient and Organization has an address. In dk-core these addresses use the [FHIR datatype](http://hl7.org/fhir/R4/datatypes.html#Address), which is very basic compared to the [Danish Address standard](https://arkitektur.digst.dk/adresse). However, addresses can be referred faithfully using the international standard e.g. Address.text can be mapped directly to the Danish 'adressebetegnelse'. If more details are needed than FHIR instances provide, the [Danish address registry](https://danmarksadresser.dk/om-adresser/danmarks-adresseregister-dar) can be used for look-up.

### International Aspects

This implementation guide is refining the FHIR standard itself as well as using and depending on the FHIR Standard [International Patient Access (IPA) specification](https://hl7.org/fhir/uv/ipa/). IPA aims "to help patients access their data through patient-facing applications". While this is not the only scope of this implementation guide - it is part of the goal. IPA outlines a few minimum expectations that are required when exchanging data with patient facing apps.

Our main intent is to focus and limit profiling specific to Denmark. During the process, we actively monitor other national (base) profiles. We attempt to harmonize our base profiles with already published base profiles from other Nordic countries:

* [The Norwegian core profiles](https://simplifier.net/HL7Norwayno-basis/)
* [The Swedish Base Profiles](https://hl7.se/fhir/ig/base/)
* [The Finnish Base Profiles](https://hl7.fi/fhir/finnish-base-profiles/)

The implementation guide defines IPA compliance bit differently than the corresponding Nordic implementation guides where profiles extend the IPA profiles. DkCore instead introduces separate IPA DK versions of selected profiles that extend the dk-core profile and imposes the IPA equivalent. This makes it possible to choose whether to comply with the Danish requirements only, or to comply with both the Danish profiles and the IPA equivalents. It is recommended to comply with the IPA DK profiles where possible and with the non-IPA versions for contexts where IPA does not apply.

The requirements added in the IPA profiles are very limited and they will fit most use cases. The main constraints to be aware of are the requirements to patient identifiers, where IPA Patient has additional constraints on identifier and name that might not be relevant in message based exchange of information and may not fit legal requirements in reporting to clinical databases. Similarly, IPA Practitioner is required to have a name, which also can conflict in reporting scenarios.

Regarding international cooperation, please see also the [National IG Implementations](https://confluence.hl7.org/display/IC/National+IG+Implementations) page in HL7 International's Confluence.

### Safety Considerations

This implementation guide defines data elements, resources, formats, and methods for exchanging healthcare data between different participants in the healthcare process. As such, clinical safety is a key concern. Additional guidance regarding safety for the specification’s many and various implementations is available at: [https://www.hl7.org/FHIR/safety.html](https://www.hl7.org/FHIR/safety.html).

Although the present specification does gives users the opportunity to observe data protection and data security regulations, its use does not guarantee compliance with these regulations. Effective compliance must be ensured by appropriate measures during implementation projects and in daily operations. The corresponding implementation measures are explained in the standard. In addition, the present specification can only influence compliance with the security regulations in the technical area of standardization. It cannot influence organizational and contractual matters.

### License and Legal Terms

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

See also http://hl7.org/fhir/license.html

Following is a non-exhaustive list of third-party artifacts and terminologies that may require a separate license:

**SNOMED Clinical Terms® (SNOMED CT®)** This material includes SNOMED Clinical Terms® (SNOMED CT®) which is used by permission of SNOMED International (former known as International Health Terminology Standards Development Organisation IHTSDO). All rights reserved. SNOMED CT®, was originally created by The College of American Pathologists. “SNOMED” and “SNOMED CT” are registered trademarks of SNOMED International.

**Logical Observation Identifiers Names and Codes LOINC** This material contains content from LOINC® (http://loinc.org). The LOINC table, LOINC codes, and LOINC panels and forms file are copyright © 1995-2013, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and available at no cost under the license at http://loinc.org/terms-of-use.

### IP Statements

This publication includes IP covered under the following statements.

* [https://cms.npu-terminology.org/wp-content/uploads/2024/06/NPU-License-Terms-of-Use.pdf](https://cms.npu-terminology.org/wp-content/uploads/2024/06/NPU-License-Terms-of-Use.pdf)

* [Nomenclature for Properties and Units (NPU) - Fragment for DK Core](CodeSystem-dk-npu-fragment.md): [Bundle/ContinuaBundleWithDevice](Bundle-ContinuaBundleWithDevice.md), [DkCoreBasicObservation](StructureDefinition-dk-core-basic-observation.md)...Show 5 more,[NPUBasicObservation](ValueSet-dk-core-NPUBasicObservation.md),[Observation/ElseUrinStix](Observation-ElseUrinStix.md),[Observation/HeartRate.Poul.1974654](Observation-HeartRate.Poul.1974654.md),[Observation/ObservationOxySatObservation](Observation-ObservationOxySatObservation.md)and[Observation/Weight.Poul.230221](Observation-Weight.Poul.230221.md)


* IEEE maintains copyright on all content from IEEE 11073 standards. All rights reserved. Implementers should obtain official copies of all applicable standards documents directly from IEEE. The inclusion of IEEE 11073 terminology codes and definitions in HL7 messages and related implementation guides is permitted under existing agreements. For permission regarding any other usage, please contact IEEE at copyrights@ieee.org.

* [ISO/IEEE 11073 Medical Device Communication Nomenclature](http://terminology.hl7.org/6.5.0/CodeSystem-v3-mdc.html): [Bundle/ContinuaBundleWithDevice](Bundle-ContinuaBundleWithDevice.md), [Device/BPMonitor.C4F312FFFE53F2C9](Device-BPMonitor.C4F312FFFE53F2C9.md)...Show 9 more,[Device/Telma.FEEDDADADEADBEEF](Device-Telma.FEEDDADADEADBEEF.md),[Device/WeightScale.606405FFFECFC604](Device-WeightScale.606405FFFECFC604.md),[DkCoreBasicObservation](StructureDefinition-dk-core-basic-observation.md),[IEEEBasicObservation](ValueSet-dk-core-IEEEBasicObservation.md),[Observation/CoincidentTimeStamp.0222](Observation-CoincidentTimeStamp.0222.md),[Observation/HeartRate.Poul.1974654](Observation-HeartRate.Poul.1974654.md),[Observation/ObservationOxySatBasicObservationOrg](Observation-ObservationOxySatBasicObservationOrg.md),[Observation/ObservationOxySatObservation](Observation-ObservationOxySatObservation.md)and[Observation/Weight.Poul.230221](Observation-Weight.Poul.230221.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [AddressType](CodeSystem-address-type-dk-supplement.md), [AddressUse](CodeSystem-address-use-dk-supplement.md)...Show 71 more,[AdministrativeGenderDkSupplement](CodeSystem-administrative-gender-supplement.md),[AuthorizationIdentifier](StructureDefinition-dk-core-authorization-identifier.md),[CVRIdentifier](StructureDefinition-dk-core-cvr-identifier.md),[CareProvider](StructureDefinition-dk-core-care-provider.md),[CareTeamStatus](CodeSystem-care-team-status-dk-supplement.md),[ConditionLastAssertedDate](StructureDefinition-ConditionLastAssertedDate.md),[ConsentState](CodeSystem-consent-state-codes-dk-supplement.md),[DK Central Healthcare Organization Registry (SOR)](NamingSystem-sor.md),[DK Central Person Registry (CPR)](NamingSystem-cpr.md),[DKCore](index.md),[DKCoreRegionalSubdivisionCodes](CodeSystem-dk-core-regional-subdivision-codes.md),[DaysOfWeek](CodeSystem-days-of-week-dk-supplement.md),[DkCoreBasicObservation](StructureDefinition-dk-core-basic-observation.md),[DkCoreCondition](StructureDefinition-dk-core-condition.md),[DkCoreCprIdentifier](StructureDefinition-dk-core-cpr-identifier.md),[DkCoreDeCPRCodes](CodeSystem-dk-core-d-ecpr-codes.md),[DkCoreDeCPRValueSet](ValueSet-DkCoreDeCPRValueSet.md),[DkCoreDeCprIdentifier](StructureDefinition-dk-core-d-ecpr-identifier.md),[DkCoreDocumentReferenceVersionID](StructureDefinition-dk-core-documentreference-version-id-extension.md),[DkCoreEncounter](StructureDefinition-dk-core-encounter.md),[DkCoreEncounterPriority](ValueSet-dk-core-encounter-priority.md),[DkCoreLocation](StructureDefinition-dk-core-location.md),[DkCoreMinimalDocumentReference](StructureDefinition-dk-core-minimaldocumentreference.md),[DkCoreObservation](StructureDefinition-dk-core-observation.md),[DkCoreOrganization](StructureDefinition-dk-core-organization.md),[DkCorePatient](StructureDefinition-dk-core-patient.md),[DkCorePersonServiceRequest](StructureDefinition-dk-core-person-servicerequest.md),[DkCorePractitioner](StructureDefinition-dk-core-practitioner.md),[DkCorePractitionerRole](StructureDefinition-dk-core-practitioner-role.md),[DkCorePriorityCodes](ValueSet-dk-core-priority-codes.md),[DkCoreProfessionGroupCodes](CodeSystem-DkCoreProfessionGroupCodes.md),[DkCoreProfessionGroupValueSet](ValueSet-DkCoreProfessionGroupValueSet.md),[DkCoreRelatedPerson](StructureDefinition-dk-core-related-person.md),[DkCoreServiceRequestCodes](ValueSet-dk-core-servicerequest-codes.md),[DkCoreXeCprIdentifier](StructureDefinition-dk-core-x-ecpr-identifier.md),[DkMaritalStatus](CodeSystem-dk-marital-status.md),[DkRelatedPersonRelationshipCodes](CodeSystem-dk-relatedperson-relationshipcodes.md),[EpisodeOfCareStatus](CodeSystem-episode-of-care-status-dk-supplement.md),[GLNIdentifier](StructureDefinition-dk-core-gln-identifier.md),[GreenlandMunicipalityCodes](CodeSystem-dk-core-municipality-codes-greenland.md),[IEEEBasicObservation](ValueSet-dk-core-IEEEBasicObservation.md),[IpaDkCoreCondition](StructureDefinition-ipa-dk-core-condition.md),[IpaDkCoreObservation](StructureDefinition-ipa-dk-core-observation.md),[IpaDkCorePatient](StructureDefinition-ipa-dk-core-patient.md),[IpaDkCorePractitioner](StructureDefinition-ipa-dk-core-practitioner.md),[IpaDkCorePractitionerRole](StructureDefinition-ipa-dk-core-practitionerrole.md),[KombitOrgIdentifier](StructureDefinition-dk-core-kombit-org-identifier.md),[LoincBasicObservation](ValueSet-dk-core-LoincBasicObservation.md),[MunicipalityCodes](ValueSet-dk-core-MunicipalityCodes.md),[NPU](CodeSystem-dk-npu-fragment.md),[NPUBasicObservation](ValueSet-dk-core-NPUBasicObservation.md),[NotFollowedAnymore](StructureDefinition-NotFollowedAnymore.md),[Patient/283](Patient-283.md),[PlannedEndDate](StructureDefinition-dk-core-planned-end-date.md),[PlannedStartDate](StructureDefinition-dk-core-planned-start-date.md),[ProducentId](StructureDefinition-dk-core-producent-id.md),[PublicationStatus](CodeSystem-publication-status-dk-supplement.md),[RegionalSubDivisionCodes](StructureDefinition-dk-core-RegionalSubDivisionCodes.md),[RegionalSubdivisionCodes](ValueSet-dk-core-RegionalSubDivisionCodes.md),[RelatedPersonRelationshipTypes](ValueSet-dk-core-RelatedPersonRelationshipTypes.md),[RequestStatus](CodeSystem-request-status-dk-supplement.md),[RoleCodeDkSupplement](CodeSystem-role-code-dk-supplement.md),[SCTBasicObservation](ValueSet-dk-core-SCTBasicObservation.md),[SORIdentifier](StructureDefinition-dk-core-sor-identifier.md),[SorOrganizationType](ValueSet-sor-organization-type.md),[SorPracticeSettingCode](ValueSet-dk-core-practice-setting-code.md),[TechniquesSCTCodes](ValueSet-dk-core-TechniquesSCTCodes.md),[UCUMBasicUnits](ValueSet-dk-core-UCUM-BasicUnits.md),[ValueSet/dk-marital-status](ValueSet-dk-marital-status.md),[extended-patient-contactrelationship](ValueSet-extended-patient-contactrelationship.md)and[v2-0131DkSupplement](CodeSystem-v2-0131-supplement.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/ContinuaBundleWithDevice](Bundle-ContinuaBundleWithDevice.md), [Bundle/ElsesTOBS](Bundle-ElsesTOBS.md)...Show 19 more,[Bundle/MaxTOKS](Bundle-MaxTOKS.md),[DkCoreBasicObservation](StructureDefinition-dk-core-basic-observation.md),[Observation/ElseBloodPressure](Observation-ElseBloodPressure.md),[Observation/ElseBodyTemperature](Observation-ElseBodyTemperature.md),[Observation/ElseHeartRate](Observation-ElseHeartRate.md),[Observation/ElseRespirationRate](Observation-ElseRespirationRate.md),[Observation/ElsesTOBSscore](Observation-ElsesTOBSscore.md),[Observation/HeartRate.Poul.1974654](Observation-HeartRate.Poul.1974654.md),[Observation/MaxBloodPressure](Observation-MaxBloodPressure.md),[Observation/MaxBodyTemperature](Observation-MaxBodyTemperature.md),[Observation/MaxGlasgowComaScale](Observation-MaxGlasgowComaScale.md),[Observation/MaxHeartRate](Observation-MaxHeartRate.md),[Observation/MaxRespirationRate](Observation-MaxRespirationRate.md),[Observation/MaxSaturation](Observation-MaxSaturation.md),[Observation/ObservationOxySatBasicObservationOrg](Observation-ObservationOxySatBasicObservationOrg.md),[Observation/ObservationOxySatObservation](Observation-ObservationOxySatObservation.md),[Observation/ObservationRespiratoryBasicObservation](Observation-ObservationRespiratoryBasicObservation.md),[Observation/Weight.Poul.230221](Observation-Weight.Poul.230221.md)and[UCUMBasicUnits](ValueSet-dk-core-UCUM-BasicUnits.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/ContinuaBundleWithDevice](Bundle-ContinuaBundleWithDevice.md), [Bundle/ElsesTOBS](Bundle-ElsesTOBS.md)...Show 22 more,[Bundle/MaxTOKS](Bundle-MaxTOKS.md),[DkCoreBasicObservation](StructureDefinition-dk-core-basic-observation.md),[DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a12](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.md),[DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a13](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a13.md),[LoincBasicObservation](ValueSet-dk-core-LoincBasicObservation.md),[Observation/ElseBloodPressure](Observation-ElseBloodPressure.md),[Observation/ElseBodyTemperature](Observation-ElseBodyTemperature.md),[Observation/ElseHeartRate](Observation-ElseHeartRate.md),[Observation/ElseRespirationRate](Observation-ElseRespirationRate.md),[Observation/HeartRate.Poul.1974654](Observation-HeartRate.Poul.1974654.md),[Observation/MaxBloodPressure](Observation-MaxBloodPressure.md),[Observation/MaxBodyTemperature](Observation-MaxBodyTemperature.md),[Observation/MaxConsciousness](Observation-MaxConsciousness.md),[Observation/MaxGlasgowComaScale](Observation-MaxGlasgowComaScale.md),[Observation/MaxHeartRate](Observation-MaxHeartRate.md),[Observation/MaxRespirationRate](Observation-MaxRespirationRate.md),[Observation/MaxSaturation](Observation-MaxSaturation.md),[Observation/MaxVitalSignsPanel](Observation-MaxVitalSignsPanel.md),[Observation/ObservationOxySatBasicObservationOrg](Observation-ObservationOxySatBasicObservationOrg.md),[Observation/ObservationOxySatObservation](Observation-ObservationOxySatObservation.md),[Observation/ObservationRespiratoryBasicObservation](Observation-ObservationRespiratoryBasicObservation.md)and[Observation/Weight.Poul.230221](Observation-Weight.Poul.230221.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [AddressType](CodeSystem-address-type-dk-supplement.md), [AddressUse](CodeSystem-address-use-dk-supplement.md)...Show 49 more,[Bundle/ElsesTOBS](Bundle-ElsesTOBS.md),[Bundle/MaxTOKS](Bundle-MaxTOKS.md),[CareTeamStatus](CodeSystem-care-team-status-dk-supplement.md),[Condition/ConditionPressureUlcer](Condition-ConditionPressureUlcer.md),[Condition/JohnPacemaker](Condition-JohnPacemaker.md),[ConsentState](CodeSystem-consent-state-codes-dk-supplement.md),[DaysOfWeek](CodeSystem-days-of-week-dk-supplement.md),[DkCoreBasicObservation](StructureDefinition-dk-core-basic-observation.md),[DkCoreCondition](StructureDefinition-dk-core-condition.md),[DkCoreMinimalDocumentReference](StructureDefinition-dk-core-minimaldocumentreference.md),[DkCoreObservation](StructureDefinition-dk-core-observation.md),[DkCoreOrganization](StructureDefinition-dk-core-organization.md),[DkCorePersonServiceRequest](StructureDefinition-dk-core-person-servicerequest.md),[DkCoreServiceRequestCodes](ValueSet-dk-core-servicerequest-codes.md),[DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a12](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.md),[DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a13](DocumentReference-94e65db8-2f0c-4a2c-a7c9-06a160d59a13.md),[EpisodeOfCareStatus](CodeSystem-episode-of-care-status-dk-supplement.md),[IEEEBasicObservation](ValueSet-dk-core-IEEEBasicObservation.md),[Lægerne Hasseris Bymidte](Organization-LaegerneHasserisBymidte.md),[Observation/ElseBloodPressure](Observation-ElseBloodPressure.md),[Observation/ElseBodyTemperature](Observation-ElseBodyTemperature.md),[Observation/ElseConsciousness](Observation-ElseConsciousness.md),[Observation/ElseHeartRate](Observation-ElseHeartRate.md),[Observation/ElsePainVRS](Observation-ElsePainVRS.md),[Observation/ElseRespirationRate](Observation-ElseRespirationRate.md),[Observation/ElseUrinStix](Observation-ElseUrinStix.md),[Observation/MaxBloodPressure](Observation-MaxBloodPressure.md),[Observation/MaxBodyTemperature](Observation-MaxBodyTemperature.md),[Observation/MaxConsciousness](Observation-MaxConsciousness.md),[Observation/MaxGlasgowComaScale](Observation-MaxGlasgowComaScale.md),[Observation/MaxHeartRate](Observation-MaxHeartRate.md),[Observation/MaxRespirationRate](Observation-MaxRespirationRate.md),[Observation/MaxSaturation](Observation-MaxSaturation.md),[Organization/154b8c96-a061-45bf-9ce4-1947c7c3c283](Organization-154b8c96-a061-45bf-9ce4-1947c7c3c283.md),[Organization/CenterForDiabetes](Organization-CenterForDiabetes.md),[Organization/CenterForDiabetesTeamDiabetes](Organization-CenterForDiabetesTeamDiabetes.md),[Organization/CenterForDiabetesTeamHjerte](Organization-CenterForDiabetesTeamHjerte.md),[Organization/CenterForDiabetesTeamKvalitet](Organization-CenterForDiabetesTeamKvalitet.md),[Organization/b08997bb-4476-4dd0-84dd-2e297f809364](Organization-b08997bb-4476-4dd0-84dd-2e297f809364.md),[Ortopædkirurgisk sengeafdeling](Organization-8510eec9-180b-4e9c-95b6-02fad9f853d3.md),[Ortopædkirurgisk sengeafsnit](Organization-19f9ee18-7677-4caf-88fe-8f6df2f2906e.md),[PublicationStatus](CodeSystem-publication-status-dk-supplement.md),[RequestStatus](CodeSystem-request-status-dk-supplement.md),[SCTBasicObservation](ValueSet-dk-core-SCTBasicObservation.md),[ServiceRequest/JohnsServiceRequest](ServiceRequest-JohnsServiceRequest.md),[ServiceRequest/MaxServiceRequest](ServiceRequest-MaxServiceRequest.md),[SorOrganizationType](ValueSet-sor-organization-type.md),[SorPracticeSettingCode](ValueSet-dk-core-practice-setting-code.md)and[TechniquesSCTCodes](ValueSet-dk-core-TechniquesSCTCodes.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Condition Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-category.html): [Condition/ConditionPressureUlcer](Condition-ConditionPressureUlcer.md), [Condition/ElseGraviditet](Condition-ElseGraviditet.md)...Show 4 more,[Condition/JohnDiabetes](Condition-JohnDiabetes.md),[Condition/JohnFracture](Condition-JohnFracture.md),[Condition/JohnMelanoma](Condition-JohnMelanoma.md)and[Condition/JohnPacemaker](Condition-JohnPacemaker.md)
* [Condition Clinical Status Codes](http://terminology.hl7.org/7.0.1/CodeSystem-condition-clinical.html): [Condition/ConditionPressureUlcer](Condition-ConditionPressureUlcer.md), [Condition/ElseGraviditet](Condition-ElseGraviditet.md)...Show 4 more,[Condition/JohnDiabetes](Condition-JohnDiabetes.md),[Condition/JohnFracture](Condition-JohnFracture.md),[Condition/JohnMelanoma](Condition-JohnMelanoma.md)and[Condition/JohnPacemaker](Condition-JohnPacemaker.md)
* [ConditionVerificationStatus](http://terminology.hl7.org/7.0.1/CodeSystem-condition-ver-status.html): [Condition/ElseGraviditet](Condition-ElseGraviditet.md), [Condition/JohnDiabetes](Condition-JohnDiabetes.md), [Condition/JohnFracture](Condition-JohnFracture.md), [Condition/JohnMelanoma](Condition-JohnMelanoma.md) and [Condition/JohnPacemaker](Condition-JohnPacemaker.md)
* [Location type](http://terminology.hl7.org/7.0.1/CodeSystem-location-physical-type.html): [Location/ambulance](Location-ambulance.md) and [Neuro unit](Location-neuroradiologyUnit.md)
* [Observation Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-observation-category.html): [Bundle/ContinuaBundleWithDevice](Bundle-ContinuaBundleWithDevice.md), [Bundle/ElsesTOBS](Bundle-ElsesTOBS.md)...Show 18 more,[Bundle/MaxTOKS](Bundle-MaxTOKS.md),[DkCoreBasicObservation](StructureDefinition-dk-core-basic-observation.md),[Observation/ElseBloodPressure](Observation-ElseBloodPressure.md),[Observation/ElseBodyTemperature](Observation-ElseBodyTemperature.md),[Observation/ElseHeartRate](Observation-ElseHeartRate.md),[Observation/ElseRespirationRate](Observation-ElseRespirationRate.md),[Observation/HeartRate.Poul.1974654](Observation-HeartRate.Poul.1974654.md),[Observation/MaxBloodPressure](Observation-MaxBloodPressure.md),[Observation/MaxBodyTemperature](Observation-MaxBodyTemperature.md),[Observation/MaxConsciousness](Observation-MaxConsciousness.md),[Observation/MaxHeartRate](Observation-MaxHeartRate.md),[Observation/MaxRespirationRate](Observation-MaxRespirationRate.md),[Observation/MaxSaturation](Observation-MaxSaturation.md),[Observation/MaxVitalSignsPanel](Observation-MaxVitalSignsPanel.md),[Observation/ObservationOxySatBasicObservationOrg](Observation-ObservationOxySatBasicObservationOrg.md),[Observation/ObservationOxySatObservation](Observation-ObservationOxySatObservation.md),[Observation/ObservationRespiratoryBasicObservation](Observation-ObservationRespiratoryBasicObservation.md)and[Observation/Weight.Poul.230221](Observation-Weight.Poul.230221.md)
* [contactRole2](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0131.html): [v2-0131DkSupplement](CodeSystem-v2-0131-supplement.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/ContinuaBundleWithDevice](Bundle-ContinuaBundleWithDevice.md), [DK Central Healthcare Organization Registry (SOR)](NamingSystem-sor.md) and [Patient/Poul](Patient-Poul.md)
* [providerRole](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0286.html): [PractitionerRole/AbrahamPractitionerRole](PractitionerRole-AbrahamPractitionerRole.md) and [PractitionerRole/PlaceholderPractitionerRole](PractitionerRole-PlaceholderPractitionerRole.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [DkCoreMinimalDocumentReference](StructureDefinition-dk-core-minimaldocumentreference.md), [Encounter/0c5e4905-5c2e-4254-8837-770c3724cd13](Encounter-0c5e4905-5c2e-4254-8837-770c3724cd13.md) and [Encounter/915a3cfb-2f3e-477b-8a9d-5d86c30e4929](Encounter-915a3cfb-2f3e-477b-8a9d-5d86c30e4929.md)
* [ActPriority](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActPriority.html): [DkCoreEncounter](StructureDefinition-dk-core-encounter.md) and [DkCoreEncounterPriority](ValueSet-dk-core-encounter-priority.md)
* [MaritalStatus](http://terminology.hl7.org/7.0.1/CodeSystem-v3-MaritalStatus.html): [Bundle/ElsesTOBS](Bundle-ElsesTOBS.md), [Patient/283](Patient-283.md) and [Patient/else](Patient-else.md)
* [RoleCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-RoleCode.html): [DkCoreRelatedPerson](StructureDefinition-dk-core-related-person.md), [Location/ambulance](Location-ambulance.md)...Show 5 more,[Neuro unit](Location-neuroradiologyUnit.md),[RelatedPerson/Child](RelatedPerson-Child.md),[RelatedPerson/TwoRelations](RelatedPerson-TwoRelations.md),[RelatedPersonRelationshipTypes](ValueSet-dk-core-RelatedPersonRelationshipTypes.md)and[RoleCodeDkSupplement](CodeSystem-role-code-dk-supplement.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (hl7.fhir.dk.core.r4)](package.r4.tgz) and [R4B (hl7.fhir.dk.core.r4b)](package.r4b.tgz) are available.

### Dependency Table










### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "hl7.fhir.dk.core",
  "url" : "http://hl7.dk/fhir/core/ImplementationGuide/hl7.fhir.dk.core",
  "version" : "3.5.0",
  "name" : "DKCore",
  "title" : "HL7 FHIR Implementation Guide: DK Core",
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
  "description" : "A FHIR Implementation Guide for the Danish common needs across healthcare sectors",
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
  "packageId" : "hl7.fhir.dk.core",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "hl7_fhir_uv_extensions_r4",
      "uri" : "http://hl7.org/fhir/extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.3.0-ballot-tc1"
    },
    {
      "id" : "hl7_fhir_uv_phd",
      "uri" : "http://hl7.org/fhir/uv/phd/ImplementationGuide/hl7.fhir.uv.phd",
      "packageId" : "hl7.fhir.uv.phd",
      "version" : "1.1.0"
    },
    {
      "id" : "hl7_fhir_uv_ipa",
      "uri" : "http://hl7.org/fhir/uv/ipa/ImplementationGuide/hl7.fhir.uv.ipa",
      "packageId" : "hl7.fhir.uv.ipa",
      "version" : "1.1.0"
    },
    {
      "id" : "ihe_iti_mhd",
      "uri" : "https://profiles.ihe.net/ITI/MHD/ImplementationGuide/ihe.iti.mhd",
      "packageId" : "ihe.iti.mhd",
      "version" : "4.2.3"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2021+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "show-inherited-invariants"
          },
          {
            "url" : "value",
            "valueString" : "false"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "ipa-comparison"
          },
          {
            "url" : "value",
            "valueString" : "{last}"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:iso:std:iso:11073:10101"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.208.176.2.4"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.208.176.2.21"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.208.176.2.4.12"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://npu-terminology.org"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "Parameters-expParam.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.dk/fhir/core/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/expansion-parameters",
        "valueReference" : {
          "reference" : "Parameters/expansion-parameters"
        }
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.9.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2021+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "release"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "show-inherited-invariants"
          },
          {
            "url" : "value",
            "valueString" : "false"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "ipa-comparison"
          },
          {
            "url" : "value",
            "valueString" : "{last}"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:iso:std:iso:11073:10101"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.208.176.2.4"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.208.176.2.21"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "urn:oid:1.2.208.176.2.4.12"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "special-url"
          },
          {
            "url" : "value",
            "valueString" : "http://npu-terminology.org"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "Parameters-expParam.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.dk/fhir/core/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/915a3cfb-2f3e-477b-8a9d-5d86c30e4929"
        },
        "name" : "A closed inpatient encounter",
        "description" : "Encounter happened on a surgery department on a hospital",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/AbrahamLaege"
        },
        "name" : "AbrahamLæge",
        "description" : "Eksempel på lægen Abraham fra akutsygeplejen",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Location"
          }
        ],
        "reference" : {
          "reference" : "Location/ambulance"
        },
        "name" : "ambulance",
        "description" : "Ambulance provided by Acme Corp",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/0c5e4905-5c2e-4254-8837-770c3724cd13"
        },
        "name" : "An open-ended (ongoing) inpatient encounter",
        "description" : "Encounter is happening on a surgery department on a hospital",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-encounter"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a12"
        },
        "name" : "APD-DK DocumentReference instance of DkCoreMinimalDocumentReference.",
        "description" : "APD-DK DocumentReference instance of DkCoreMinimalDocumentReference, containing relevant metadata",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-minimaldocumentreference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-care-provider"
        },
        "name" : "CareProvider",
        "description" : "The organization (facility) responsible for the care of the patient during this encounter",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/CenterForDiabetes"
        },
        "name" : "Center for Diabetes",
        "description" : "Center for Diabetes",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/CenterForDiabetesTeamDiabetes"
        },
        "name" : "Center for Diabetes Team Diabetes",
        "description" : "Center for Diabetes Team Diabetes",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/CenterForDiabetesTeamHjerte"
        },
        "name" : "Center for Diabetes Team Hjerte",
        "description" : "Center for Diabetes Team Hjerte",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/CenterForDiabetesTeamKvalitet"
        },
        "name" : "Center for Diabetes Team Kvalitet",
        "description" : "Center for Diabetes Team Kvalitet",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/CoincidentTimeStamp.0222"
        },
        "name" : "Coincident time stamp from Poul's home blood pressure measurement",
        "description" : "A coincident time stamp observation is used to ensure and inspect the consistency\nof timelines when using battery-operated health devices having their own clock that may\nor may not be synchronized to local time - and may even travel with their owner across\ntime zones.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ConditionLastAssertedDate"
        },
        "name" : "ConditionLastAssertedDate",
        "description" : "Extension for the last date a Condition-instance was confirmed valid in its current state. E.g. with its current clinical- and verification status, stage and severity. Typically the last performed follow-up",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/cpr"
        },
        "name" : "cpr",
        "description" : "The Danish civil registration system (\"CPR\") encompasses basic personal data about anyone with a civil registration number. A civil registration number shall be allocated to anyone who: 1) is registered in the national register in Denmark on the grounds of birth or relocation from abroad; 2) is included under Arbejdsmarkedets TillægsPension (ATP); 3) according to the tax authorities, is required to have a civil registration number for the purpose of tax processing in Denmark.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-cvr-identifier"
        },
        "name" : "Danish Central Business Register (CVR) Identifier",
        "description" : "Identifier holding a danish [CVR](https://datacvr.virk.dk/data/) number.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-cpr-identifier"
        },
        "name" : "Danish Central Person Register (CPR) Identifier",
        "description" : "This structure holds the danish [CPR](https://cpr.dk/) identifier",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-basic-observation"
        },
        "name" : "Danish Core Basic Observation Profile",
        "description" : "HL7 Denmark core profile for basic observations, which is a profiling of DkCoreObservation.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-condition"
        },
        "name" : "Danish Core Condition Profile",
        "description" : "HL7 Denmark core profile for professionally asserted conditions, as specified by danish health and social care organizations",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-encounter"
        },
        "name" : "Danish Core Encounter Profile",
        "description" : "HL7 Denmark core profile for an encounter",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-location"
        },
        "name" : "Danish Core Location Profile",
        "description" : "HL7 Denmark core profile for locations",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-minimaldocumentreference"
        },
        "name" : "Danish Core Minimal DocumentReference Profile",
        "description" : "HL7 Denmark core profile for a Minimal DocumentReference inherited from IHE MHD Minimal DocumentReference",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-municipalityCodes"
        },
        "name" : "Danish Core Municipality codes",
        "description" : "Identifier holding the official identifier for a danish municipality",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-observation"
        },
        "name" : "Danish Core Observation Profile",
        "description" : "HL7 Denmark core profile for observations",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-organization"
        },
        "name" : "Danish Core Organization Profile",
        "description" : "HL7 Denmark core profile for a danish health organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-patient"
        },
        "name" : "Danish Core Patient Profile",
        "description" : "HL7 Denmark core profile for a patient",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-person-servicerequest"
        },
        "name" : "Danish Core Person ServiceRequest Profile",
        "description" : "HL7 Denmark core profile for requesting a service, such as diagnostic investigations, nursing services, treatments, and more for a Patient.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-practitioner"
        },
        "name" : "Danish Core Practitioner Profile",
        "description" : "HL7 Denmark core profile for health professionals and other actors relevant in citizen and patient pathways",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-practitioner-role"
        },
        "name" : "Danish Core PractitionerRole Profile",
        "description" : "HL7 Denmark core profile for health professional roles",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-RegionalSubDivisionCodes"
        },
        "name" : "Danish Core Regional Sub Division Codes Extension",
        "description" : "Identifier holding the official organization identifier for a danish region",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-related-person"
        },
        "name" : "Danish Core Related Person Profile",
        "description" : "HL7 Denmark core profile for a related person",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-authorization-identifier"
        },
        "name" : "Danish Health Professionals Authorization Identifier",
        "description" : "Identifier holding the official [authorization identifier](https://en.stps.dk/en/health-professionals-and-authorities/online-register-registered-health-professionals/) for a practitioner.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ipa-dk-core-condition"
        },
        "name" : "Danish IPA Core Condition Profile",
        "description" : "HL7 Denmark core profile for IPA and DK Core compliant conditions",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ipa-dk-core-observation"
        },
        "name" : "Danish IPA Core Observation Profile",
        "description" : "HL7 Denmark core profile for IPA and DK Core compliant observations",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ipa-dk-core-patient"
        },
        "name" : "Danish IPA Core Patient Profile",
        "description" : "HL7 Denmark core profile for IPA and DK Core compliant patients",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ipa-dk-core-practitioner"
        },
        "name" : "Danish IPA Core Practitioner Profile",
        "description" : "HL7 Denmark core profile for IPA and DK Core compliant practitioners",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ipa-dk-core-practitionerrole"
        },
        "name" : "Danish IPA Core PractitionerRole Profile",
        "description" : "HL7 Denmark core profile for IPA and DK Core compliant practitionerroles",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-d-ecpr-identifier"
        },
        "name" : "Decentralised eCPR, called D-eCPR",
        "description" : "This strucure holds the danish [D-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfordecentraleerstatningspersonnumre-D-eCPR) identifier, which is often used by the Danish regions.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/address-type-dk-supplement"
        },
        "name" : "DK Address Type",
        "description" : "The type of an address (physical / postal)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/address-use-dk-supplement"
        },
        "name" : "DK Address Use",
        "description" : "The use of an address",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/administrative-gender-supplement"
        },
        "name" : "DK Administrative Gender Supplement",
        "description" : "CodeSystem supplement with danish translations for administrative gender",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/care-team-status-dk-supplement"
        },
        "name" : "DK CareTeam Status",
        "description" : "Indicates the status of the care team.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-servicerequest-codes"
        },
        "name" : "DK codes for ServiceRequest",
        "description" : "Value set used to describe Danish healthcare services",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/consent-state-codes-dk-supplement"
        },
        "name" : "DK Consent State",
        "description" : "Indicates the state of the consent",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-IEEEBasicObservation"
        },
        "name" : "Dk Core IEEE Basic Observation",
        "description" : "IEEE MDC codes for Basic Observations usable in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-LoincBasicObservation"
        },
        "name" : "DK Core LOINC Basic Observations",
        "description" : "LOINC codes describing Basic Observations usable in Denmark.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-marital-status"
        },
        "name" : "DK Core Marital Status",
        "description" : "This value set defines the set of codes that can be used to indicate the marital status of a person in Denmark.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-NPUBasicObservation"
        },
        "name" : "DK Core NPU Basic Observation",
        "description" : "NPU codes for Basic Observations usable in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-SCTBasicObservation"
        },
        "name" : "DK Core SNOMED CT Basic Observation",
        "description" : "SNOMED CT codes for Basic Observations usable in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-UCUM-BasicUnits"
        },
        "name" : "DK Core UCUM Basic Units",
        "description" : "UCUM codes to represent units for basic Observations usable in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DkCoreDeCPRValueSet"
        },
        "name" : "DK D-eCPR OID values",
        "description" : "DK D-eCPR OID values",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/days-of-week-dk-supplement"
        },
        "name" : "DK Days Of Week",
        "description" : "The days of the week.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-core-d-ecpr-codes"
        },
        "name" : "DK Decentralised eCPR Systems",
        "description" : "DK",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/episode-of-care-status-dk-supplement"
        },
        "name" : "DK Episode Of Care Status",
        "description" : "The status of the episode of care.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/extended-patient-contactrelationship"
        },
        "name" : "DK Extended Patient Contact Relationship",
        "description" : "DK Extended Patient Contact Relationship",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-core-municipality-codes-greenland"
        },
        "name" : "DK Greenland Municipality Codes",
        "description" : "Greenland municipality codes as defined by https://www.iso.org/obp/ui/#iso:code:3166:GL and https://cpr.dk/cpr-systemet/kommunesammenlaegninger-opdeling/groenland-2018/",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-marital-status"
        },
        "name" : "DK Marital Statuses",
        "description" : "DK marital statuses",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-MunicipalityCodes"
        },
        "name" : "DK Municipality Codes",
        "description" : "Municipality codes used in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-core-municipality-codes"
        },
        "name" : "DK Municipality Codes",
        "description" : "Municipality codes as defined by https://danmarksadresser.dk/adressedata/kodelister/kommunekodeliste/ and https://sundhedsdatastyrelsen.dk/-/media/sds/filer/rammer-og-retningslinjer/patientregistrering/relaterede/kommuneklassifikation.pdf",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-priority-codes"
        },
        "name" : "DK priority codes",
        "description" : "DK Codes for priority",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-encounter-priority"
        },
        "name" : "DK priority codes for encounters",
        "description" : "Value set used for indicating priority of an encounter",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/DkCoreProfessionGroupValueSet"
        },
        "name" : "DK Profession Group",
        "description" : "DK Profession Group codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/DkCoreProfessionGroupCodes"
        },
        "name" : "DK Profession Group Codes",
        "description" : "DK health ProfessionGroup codes as defined by https://www.retsinformation.dk/eli/lta/2019/731, and derived from http://autregwebservice.sst.dk/autregservice.asmx/GetAllProfessionGroups. Code (5176) was not uniqe, and have been converted to 5176a and 5176b",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/publication-status-dk-supplement"
        },
        "name" : "DK Publication Status",
        "description" : "The lifecycle status of a Value Set or Concept Map.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-RegionalSubDivisionCodes"
        },
        "name" : "DK Regional Subdivision Codes",
        "description" : "Subdivision codes (Regional codes) used in Denmark",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-core-regional-subdivision-codes"
        },
        "name" : "DK Regional Subdivision Codes",
        "description" : "Subdivision codes (Regional codes) used in Denmark as found on https://www.iso.org/obp/ui/#iso:code:3166:DK",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-relatedperson-relationshipcodes"
        },
        "name" : "DK Related Person Relationship Codes",
        "description" : "DK Related Person Relationship Codes",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-RelatedPersonRelationshipTypes"
        },
        "name" : "DK Related Person Relationship Types",
        "description" : "DK Related Person Relationship Types",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/request-status-dk-supplement"
        },
        "name" : "DK Request Status",
        "description" : "Codes identifying the stage lifecycle stage of a request",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/role-code-dk-supplement"
        },
        "name" : "DK Role Code",
        "description" : "CodeSystem supplement with danish translations for RoleCode",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/sor-organization-type"
        },
        "name" : "DK SOR Organization Type",
        "description" : "Value set used for indicating the organization type for organizations from SOR",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-practice-setting-code"
        },
        "name" : "DK SOR Practice Setting Code",
        "description" : "Values used for the document metadata attribute practiceSettingCode, which is an attribute specifying the clinical specialty where the act that resulted in the document was performed (e.g., Family Practice, Laboratory, Radiology). The value set is based on a subset of the code list from the SOR lookup table 'SOR-Kliniske specialer' (https://sor.sum.dsdn.dk/lookupdata/#clinical_speciality, accessable on Sundhedsdatanettet (SDN)), which is based on SNOMED CT codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/dk-core-TechniquesSCTCodes"
        },
        "name" : "DK TechniquesSCTCodes",
        "description" : "SNOMED CT Codes for the technique used when obtaining an observation",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/v2-0131-supplement"
        },
        "name" : "DK v2 Contact Role Supplement",
        "description" : "CodeSystem supplement with danish translations for Contact Role",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/ElseGraviditet"
        },
        "name" : "Else Graviditet",
        "description" : "Else Graviditet, tilstandskode som indberettes ifm Elses ambulante forløb (fx jordemoder), og ved eventuel indlæggelse i graviditeten",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ElsesTOBS"
        },
        "name" : "Else's TOBS measurements",
        "description" : "An example of TOBS (Danish: Tidlig opsporing af begyndende sygdom), which includes level of consciousness, heart rate, respiration rate, blood pressure and temperature.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElseBloodPressure"
        },
        "name" : "ElseBloodPressure",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElseBodyTemperature"
        },
        "name" : "ElseBodyTemperature",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElseConsciousness"
        },
        "name" : "ElseConsciousness",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElseHeartRate"
        },
        "name" : "ElseHeartRate",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElsePainVRS"
        },
        "name" : "ElsePainVRS",
        "description" : "Elses smerte målt med VRS",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElseRespirationRate"
        },
        "name" : "ElseRespirationRate",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElsesTOBSscore"
        },
        "name" : "ElsesTOBSscore",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ElseUrinStix"
        },
        "name" : "ElseUrinStix",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/8510eec9-180b-4e9c-95b6-02fad9f853d3"
        },
        "name" : "Example hospital department",
        "description" : "Example hospital department with the orthopedic surgery specialty",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/19f9ee18-7677-4caf-88fe-8f6df2f2906e"
        },
        "name" : "Example hospital sub-department",
        "description" : "Example hospital sub-department with the orthopedic surgery specialty",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Confidential"
        },
        "name" : "Example of a patient with confidential address and name",
        "description" : "Example of a patient with confidential address and name",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/TwoRelations"
        },
        "name" : "Example of a related person with two relations",
        "description" : "Example of a person that has relations as both neighbor and primary caretaker",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/else"
        },
        "name" : "Example of a woman of childbearing age",
        "description" : "Example of a woman of childbearing age. Else is a MedCom test-patient",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/Child"
        },
        "name" : "Example of child as related person",
        "description" : "Example of child as related person",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/ukendt"
        },
        "name" : "Example of valid patient unknown identifier registry",
        "description" : "Example of valid patient unknown identifier registry. The patient is a 'John Doe' with an Identifier from an unofficial register",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/ukendt-D-eCPR"
        },
        "name" : "Example of valid patient with a D-eCPR as identifier",
        "description" : "Example of valid patient with a D-eCPR as identifier.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/ukendt-X-eCPR"
        },
        "name" : "Example of valid patient with a X-eCPR as identifier",
        "description" : "Example of valid patient with a X-eCPR as identifier.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Max"
        },
        "name" : "Example of valid patient with danish marital status",
        "description" : "Example of valid patient with danish marital status",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/283"
        },
        "name" : "Example of valid patient with full address",
        "description" : "Example of valid patient with full address",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/john"
        },
        "name" : "Example of valid patient with multiple names",
        "description" : "Example of valid patient with multiple names",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Parameters"
          }
        ],
        "reference" : {
          "reference" : "Parameters/expParam"
        },
        "name" : "expParam",
        "description" : "SNOMED CT expansion parameter",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-gln-identifier"
        },
        "name" : "GLN Identifier",
        "description" : "Identifier holding a 13 digit GLN",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/HanneSocialraadgiver"
        },
        "name" : "HanneSocialrådgiver",
        "description" : "Eksempel på socialrådgiveren Hanne",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/HenvisningFraLageTilSygehus"
        },
        "name" : "Henvisning vedr. modermærkekræft",
        "description" : "Henvisning fra læge til sygehus vedr. mistanke om at John har modermærkekræft",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-documentreference-version-id-extension"
        },
        "name" : "HL7 Denmark core DocumentReference Version ID extension",
        "description" : "Extension containing information about the version of the DocumentReference for a specific standard. The version is included in the R5 version of the resource.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/JohnDiabetes"
        },
        "name" : "John diabetes",
        "description" : "Johns diabetes-diagnose, udskrivningsdiagnose fra hospitalet fx til brug i indberetning og epikrise",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/JohnFracture"
        },
        "name" : "John fraktur",
        "description" : "Johns fraktur-diagnose, udskrivningsdiagnose fra hospitalet med tillægskode",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/JohnMelanoma"
        },
        "name" : "John mistanke om Modermærkekræft",
        "description" : "Johns mistanke om modermærkekræft i huden, kan fx bruges som henvisningsdiagnosese",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/JohnPacemaker"
        },
        "name" : "John pacemaker",
        "description" : "Johns status efter pacemakeroperation, udtrykt semantisk korrekt med fund frem for operationskode",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Condition"
          }
        ],
        "reference" : {
          "reference" : "Condition/ConditionPressureUlcer"
        },
        "name" : "John tryksår",
        "description" : "John, tryksår, kommunal tilstand",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-condition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationOxySatBasicObservationOrg"
        },
        "name" : "John's oxygen saturation measurement (Basic observation)",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationOxySatObservation"
        },
        "name" : "John's oxygen saturation measurement (Observation)",
        "description" : "This example suggests a way to handle the oxygen saturation case, where the original measurement\nwas reported in '%' by a device or typed in manually, and then 'translated' to the NPU system,\nwhich requires the value to be unitless.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationRespiratoryBasicObservation"
        },
        "name" : "John's Respiratory rate measurement (Basic observation)",
        "description" : "A simple basic observation of a hyperventilating patient",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-kombit-org-identifier"
        },
        "name" : "Kombit Organsation Identifier",
        "description" : "Identifier holding the organization code issued by KOMBIT",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/LaegerneHasserisBymidte"
        },
        "name" : "LaegerneHasserisBymidte",
        "description" : "Praktisernede læge i Hasseris, som defineret af SOR",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/AbrahamPractitionerRole"
        },
        "name" : "Licensed physician in primary care",
        "description" : "This is an example of PractitionerRole profile. The example describes the service which practitioner is performing in a specific location in a specific role.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/MaxTOKS"
        },
        "name" : "Max TOKS measurements, including Glasgow Coma Scale assesment",
        "description" : "An example of TOBS (Danish: Tidlig opsporing af begyndende sygdom), which includes level of consciousness, heart rate, respiration rate, blood pressure and temperature.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxBloodPressure"
        },
        "name" : "MaxBloodPressure",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxBodyTemperature"
        },
        "name" : "MaxBodyTemperature",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxConsciousness"
        },
        "name" : "MaxConsciousness",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxGlasgowComaScale"
        },
        "name" : "MaxGlasgowComaScale",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxHeartRate"
        },
        "name" : "MaxHeartRate",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxRespirationRate"
        },
        "name" : "MaxRespirationRate",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxSaturation"
        },
        "name" : "MaxSaturation",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/MaxVitalSignsPanel"
        },
        "name" : "MaxVitalSignsPanel",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-basic-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/b08997bb-4476-4dd0-84dd-2e297f809364"
        },
        "name" : "MedCom Test Organization",
        "description" : "MedCom Test Organization with SOR id",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-x-ecpr-identifier"
        },
        "name" : "National eCPR service, called X-eCPR",
        "description" : "This strucure holds the danish [X-eCPR](https://www.nspop.dk/pages/viewpage.action?pageId=226757583#eCPRFormater(XeCPRogDeCPR)-Formatetfornationaleerstatningspersonnumre-X-eCPR) identifier, maintained by the Danish Health Data Authority.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Location"
          }
        ],
        "reference" : {
          "reference" : "Location/neuroradiologyUnit"
        },
        "name" : "neuroradiologyUnit",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-location"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/dk-npu-fragment"
        },
        "name" : "Nomenclature for Properties and Units (NPU) - Fragment for DK Core",
        "description" : "Fragment of the NPU code system used in DK Core. The full version of NPU can be found at http://labterm.dk",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/NotFollowedAnymore"
        },
        "name" : "NotFollowedAnymore",
        "description" : "Extension for the date where a condition lost focus in a specific clinical context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/PlaceholderPractitionerRole"
        },
        "name" : "Placeholder for a physician",
        "description" : "This is an example of PractitionerRole where it acts as a placeholder for an unknown person. This may be useful in several scenarios.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-planned-end-date"
        },
        "name" : "PlannedEndDate",
        "description" : "The planned end date/time (or discharge date) of the encounter",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-planned-start-date"
        },
        "name" : "PlannedStartDate",
        "description" : "The planned start date/time (or admission date) of the encounter",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "DocumentReference"
          }
        ],
        "reference" : {
          "reference" : "DocumentReference/94e65db8-2f0c-4a2c-a7c9-06a160d59a13"
        },
        "name" : "PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference.",
        "description" : "PLR-DK DocumentReference instance of DkCoreMinimalDocumentReference, containing relevant metadata",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-minimaldocumentreference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/Poul"
        },
        "name" : "Poul Hansen",
        "description" : "A patient admitted to a remote monitoring programme, performing measurements\nat home.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/BPMonitor.C4F312FFFE53F2C9"
        },
        "name" : "Poul's A&D blood pressure monitor",
        "description" : "This device is Poul's personal blood pressure monitor, which he keeps in the bedroom\nof his home, and uses for daily monitoring due to his CHF condition.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/WeightScale.606405FFFECFC604"
        },
        "name" : "Poul's A&D weight scale",
        "description" : "This device is Poul's personal weighing scale, which he keeps in the bathroom\nof his home, and uses for daily monitoring due to his CHF condition.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Weight.Poul.230221"
        },
        "name" : "Poul's daily weighing on Feb. 21st",
        "description" : "Poul has been instructed to perform a daily weighing in the morning. This is his\ndaily weighing from Feb. 21st 2023.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/HeartRate.Poul.1974654"
        },
        "name" : "Poul's heart rate measurement",
        "description" : "Poul has been instructed to measure his blood pressure due to his CHF condition. This heart rate\nmeasurement was produced by his blood pressure monitor during one of these measurements.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/ipa-dk-core-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/ContinuaBundleWithDevice"
        },
        "name" : "Poul's home blood pressure measurement",
        "description" : "This example demonstrates a DkCoreObservation _and_ Continua-compliant\nbundle containing a home blood pressure measurement uploaded to a Continua-compliant\n_\"FHIR Observation Reporting Server\"._",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/Telma.FEEDDADADEADBEEF"
        },
        "name" : "Poul's remote patient monitoring app",
        "description" : "Poul has been enrolled in a Remote Patient Monitoring programme in order to monitor the\nstate of his CHF condition. This is the app he uses to report the data to his doctor.",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-producent-id"
        },
        "name" : "Producent Id",
        "description" : "Offical MedCom code describing the producer of lab results",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/154b8c96-a061-45bf-9ce4-1947c7c3c283"
        },
        "name" : "Producer Test Organization",
        "description" : "Producer of Lab Results Test Organization",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/JohnsServiceRequest"
        },
        "name" : "Request for nursing care of John.",
        "description" : "Request for nursing care of John.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-person-servicerequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ServiceRequest"
          }
        ],
        "reference" : {
          "reference" : "ServiceRequest/MaxServiceRequest"
        },
        "name" : "Request for nursing care of John.",
        "description" : "Request for nursing care of John.",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-person-servicerequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/SidselSygeplejerske"
        },
        "name" : "SidselSygeplejerske",
        "description" : "Eksempel på en sygeplejerske",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/sor"
        },
        "name" : "sor",
        "description" : "SOR is provided by the Danish Health Data Authority under the Danish Ministry of Health. The register holds organizations within the Danish health sector, their geographical and virtual addresses as well as codes for their identification and for EDI-communication. Danish Health Data Authority is responsible for issuing and publishing codes to identify organizations across health care sectors and related public and private services. SOR includes organizational data on hospitals, the primary care sector (physiotherapists, general practitioners, dentists etc.) and municipal health service organizations as well as non-health care organizations that need to be able to receive data from the former.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/dk-core-sor-identifier"
        },
        "name" : "SOR Identifier",
        "description" : "Identifier holding the official SOR identifier for a danish healthcare organization",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/8fa7df76-bec2-4fe2-9a44-750030a0eda0"
        },
        "name" : "XDS document bundled Author Organization",
        "description" : "Instance of a XDS document bundled  author organization",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/42cb9200-f421-4d08-8391-7d51a2503cb4"
        },
        "name" : "XDS document bundled Author Person",
        "description" : "Instance of a XDS document bundled  author person",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/37628912-7816-47a3-acd8-396b610be142"
        },
        "name" : "XDS document bundled Source Patient",
        "description" : "Instance of a XDS document bundled  source patient",
        "exampleCanonical" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-patient"
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "downloads.html"
            }
          ],
          "nameUrl" : "downloads.html",
          "title" : "Downloads",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance.html"
            }
          ],
          "nameUrl" : "guidance.html",
          "title" : "Guidance",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "html"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "terminology.html"
            }
          ],
          "nameUrl" : "terminology.html",
          "title" : "Terminology",
          "generation" : "html"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/maps"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
