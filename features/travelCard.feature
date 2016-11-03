Feature: Contactless Travel Card
  In order to travel in London Underground
  As London Underground tickets manager
  I need to charge the client travels

  Rules:
  - Show README.md file

  Scenario: Michael makes a single journey from a station in the zone A to another station in zone A
    Given Michael has a Clamcard
    When Michael travels from "Asterisk" to "Aldgate"
    Then Michael will be charged £2.50 for his journey

  Scenario: Michael makes thow travels, one from zone A to zone B and other from zone B to zone B
    Given Michael has a Clamcard
    When Michael travels from "Asterisk" to "Barbican"
    And Michael travels from "Barbican" to "Balham"
    Then Michael will be charged £3.00 for his journey number 1
    And Michael will be charged £3.00 for his journey number 2

